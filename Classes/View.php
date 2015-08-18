<?php
namespace Classes;


class View{
    
    public function __construct() {
    }
    
    /**
     * loads the file
     * @param string $filename
     * @throws Exception
     */
    public function Load($filename){
        $filepath = BASE_PATH.DIRECTORY_SEPARATOR.'views/'.$filename;
        if(!is_file($filepath)){
            throw new Exception('Could not locate this view: '.$filepath);
        }
        
        require_once $filepath;
        
    }
    
    
    /**
     * set parameters for the view
     * @param array $args
     * @throws \InvalidArgumentException
     */
    public function setParams($args){
        if(!is_array($args)){
            throw new \InvalidArgumentException('the view arguments must be an array');
        }
        
        
        
        foreach($args as $key => $arg){
            $this->$key = $arg;
        }
        
    }
    
}