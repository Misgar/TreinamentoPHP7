<?php

class Singleton
{
    
    
    public static $conn;
    
    private function __construct()
    {

    }
    
    private  function __clone()
    {
        
    }

    public static function getConn()
    {
         $dns = 'pgsql:host=localhost; dbname=aplicacao';
        
         $user = 'curso501';
        
         $pass = 'curso501@secret';
        
        if(!self::$conn)
        {
          
            self::$conn = new PDO($dns, $user, $pass);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        }
        
        return self::$conn;
    }
}

$conn1 = Singleton::getConn();
$conn2 = Singleton::getConn();
echo '<pre>';
var_dump($conn1);
echo '<hr>';
var_dump($conn2);