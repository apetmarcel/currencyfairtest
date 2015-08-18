<?php
header("Access-Control-Allow-Origin: *");

use Classes\Consumption;
use Classes\Sanitiser;
use Classes\DBConnection;
use Classes\CurrencyFairDB;
use Classes\View;
use Classes\Render;

define('BASE_PATH',__DIR__);

#get autoloader
include_once BASE_PATH.DIRECTORY_SEPARATOR.'loader.php';
#include settings
$settings = include_once BASE_PATH.DIRECTORY_SEPARATOR.'settings.php';

#connect to the db using PDO and then get the instantiate the currency fair db. 
$dbConnection = new DBConnection($settings);
$db = $dbConnection->getPDOConnection();
#currencyFairDB
$currencyFairDB = new CurrencyFairDB($db);

#this will simply take the first name after the currencyfair in the url. 
$myroute = getRoute();


if($myroute=='render'){
	
	#my view 
	$view = new View();
	$render = new Render($settings, $currencyFairDB, $view);
	$render->run();
	
}elseif($myroute=='consumption'){
	
	#currencyFairDB
	$currencyFairDB = new CurrencyFairDB($db);
	$sanitiser = new Sanitiser();
	$consumption = new Consumption($settings, $sanitiser, $currencyFairDB);
	$consumption->run();
	
}else{
	die('invalid path');
}