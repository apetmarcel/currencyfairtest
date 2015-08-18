<?php

namespace Classes;

class DBConnection{
    
    private $settings = array();
    private $PDOConnection = null;
    
    
    public function __construct($settings) {
    
        $this->settings = $settings;
        
    }
    
    
    
    /**
     * gets the PDO Connecction 
     */
    public function getPDOConnection(){
        #connect to db
        
        if(is_null($this->PDOConnection)){
            
            $settings = $this->settings;
            $db_host = $settings['db']['host'];
            $db_name = $settings['db']['name'];
            $db_user = $settings['db']['username'];
            $db_pass = $settings['db']['password'];

            /*try{
                $db = new \PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);
            } catch (Exception $ex) {
                echo'Could not connect to the db: '.$ex->getMessage();
            }*/
			try {
				$dbh = new \PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);
			} catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
            
            
            $this->PDOConnection = $dbh;
        }
        
        return $this->PDOConnection;       
    }
    
    
}
