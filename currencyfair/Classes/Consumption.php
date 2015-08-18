<?php

namespace Classes;

class Consumption {
    
    protected $settings;
    protected $sanitiser;
    protected $database;
    
    protected $allowed_persecond = 100;
    
    public function __construct($settings,$sanitiser,$database) {
        if(!is_array($settings['consumption'])){
            throw new \InvalidArgumentException('No valid consumption settings provided. ');
        }
                
        $this->settings = $settings;
        $this->sanitiser = $sanitiser;
        $this->database = $database;
        
        $this->allowed_persecond = $settings['transactions_per_second'];
    }
    
    public function run(){
        
        $settings = $this->settings;
        $sanitiser = $this->sanitiser;
        
        #get raw params
        $params = $sanitiser->getQueryParams('post','json');
        
        
        if(empty($params)){
            throw new \InvalidArgumentException('No parameters found.');
        }
        #filter and sanitise params
        $params_options = $settings['consumption']['expected_params'];
        $sanitiser->cleanParams($params,$params_options);
        
        #get current counter
        $counter = $this->database->getCounterPerSecond();
        
        #check if limit is reached
        if((int)$this->allowed_persecond === (int)$counter->total_persecond && strtotime($counter->time) ==  time()){
            
            echo "the limit: $this->allowed_persecond  of transactions per second has been reached!";
            
            return;
            
        }elseif(strtotime($counter->time) < time()){
            
            #if the current time is bigger than the one in database, reset counter
            $counter_reset = $this->database->resetCounterPerSecond();
            
            if((int)$counter_reset!==1){
                throw new \UnexpectedValueException("Could not reset counter");
            }
            
        }
        
        #save transactions
        $result = $this->database->saveTransaction($params);
        
        if((int)$result!==1){
            throw new \UnexpectedValueException("Transaction could not be saved into database");
        }
        
        
    }
    
    
    
}
