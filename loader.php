<?php

function __autoload($class_name) {
    $myclass_name =  BASE_PATH.DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $class_name).'.php';
    if (file_exists($myclass_name)) {
        require_once $myclass_name;
        return true;
    }else{
        throw new Exception("Class with name; $myclass_name couldn't be found");
    }
}

function getRoute(){
	#get the type of request from url
	$url =parse_url ($_SERVER['REQUEST_URI'] );#
	$path_array = explode('/',$url['path']);
	#extract the immediate folder.
	if(isset($path_array[2])){
		return strtolower(trim($path_array[2]));
	}
	return null;
}