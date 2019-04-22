<?php

ini_set('display_errors', 1);

class dbConfig {
  
   public static $db_conn=null;
   private function  __construct() {
       
   }   
   public static function getInstance()
   {
       if(dbConfig::$db_conn==null)
       {
            // db config attributes
            $host =  "localhost" ;
            $dbname =  "doctor_consultant" ;
            $user =  "root" ;
            $password =  "" ;
            $dsn = "mysql:host=".$host.";dbname=".$dbname."";
            $option = array
               (
               PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
               );

            try
            {
              dbConfig::$db_conn=  new PDO($dsn, $user, $password,$option);
              dbConfig::$db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $ex) 
            {die('Connection Failed' . $ex->getMessage());}  
            return dbConfig::$db_conn;
       }
       else
       {
           return dbConfig::$db_conn;
       }
   }
                                      
}
