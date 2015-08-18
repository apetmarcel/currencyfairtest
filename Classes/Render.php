<?php

namespace Classes;

class Render {
    
    protected $settings;
    protected $database;
    protected $view;
    
    
    public function __construct($settings,  \Classes\CurrencyFairDB $database, \Classes\View $view) {
        $this->settings = $settings;
        $this->database = $database;
        $this->view = $view;
    }
    
    public function run(){
        $settings = $this->settings;

        #get from db total messages per currency pair
        $mesgs = $this->database->getTotalMessagesPerCurrencyPair();
        
        $viewname = strtolower(basename(__FILE__));
        $this->view->setParams(array('title'=>'Messages Volume for each Currency Pair','volumes'=>$mesgs,'side_title'=>'Total of Messages'));
        $this->view->Load($viewname);
    }
    
    
    
}
