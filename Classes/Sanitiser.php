<?php
namespace Classes;



class Sanitiser {
    
    
    private $validation_errors = array();
    
    public function getQueryParams($type='post',$format=null){
        
        $return_vars = array();
        
        if(strtolower(trim($type))=='post'){            
            if(!empty($format)&&strtolower(trim($format))=='json'){
                $json_string= $this->getPostJsonInput($type);
                $return_vars = json_decode($json_string);
            }else{
                # go on with other possible formats
            }
        }
        #get other expected type of params.
        return (array)$return_vars;
    }
    
	
	private function  isJson($string) {
		 json_decode($string);
		 return (json_last_error() == JSON_ERROR_NONE);
	}


    
    
    private function getPostJsonInput($type){
        
		$myvars = file_get_contents('php://input');
		
		if(!$this->isJson($myvars)){
			throw new \Exception("No valid json input found: ".$myvars);
		}
		return $myvars;
		/**
			normally I would check the header content-type to make sure it's a json one, but
			as I have issues with Access-Control-Allow-Origin by sending json from ajax from a different server, I skip this validation
		$content_type = filter_input(INPUT_SERVER,'CONTENT_TYPE');
		
        if(strpos($content_type, 'application/json')!==false&&$type=='post'){
            $myvars = file_get_contents('php://input');
            return $myvars;
        }else{
            throw new \Exception("No valid json content type found in header: ".$content_type);
        }*/
    }
    
    
    /**
     * 
     * @param array $array
     * @param array $options
     * @throws \InvalidArgumentException is thrown when 
     */
    public function cleanParams(&$array,$options){
        #do I have all the params that are required? 
        foreach($options as $key =>$value){
            if($value['required']===true&&(!array_key_exists($key,$array)||empty($array[$key]))){
                throw new \InvalidArgumentException("This parameter is required: ".$key);
            }
        }
        
        foreach($array as $key => &$value){
            if(array_key_exists($key,$options)){
                $value = $this->paramSanitising(trim($value), $options[$key]);
            }else{
                throw new \InvalidArgumentException("This is an invalid argument: $key");
            }
        }
    }
    
    private function paramSanitising($value,$options){
        $var_type = $options['type'];
        switch($var_type){
            case'int':
                $validate = FILTER_SANITIZE_NUMBER_INT;
                break;
            case'string':
                $validate = FILTER_SANITIZE_STRING;
                break;
            default:
                $validate = FILTER_SANITIZE_STRING;
                break;
        }
        #$sanitiser_filters = array($validate,FILTER_SANITIZE_MAGIC_QUOTES,FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_STRIPPED);
        
        $value1 = filter_var($value, $validate);
        $value2 = filter_var($value1, FILTER_SANITIZE_STRING);
        $value = filter_var($value2,FILTER_SANITIZE_MAGIC_QUOTES);
        
        return $value;
    }

    
    
    public function getParamValidationErrors(){
        return $this->validation_errors;
    }
    
    
}
