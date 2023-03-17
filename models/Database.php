<?php

class Database{
    protected $pdo;
    public function __construct()
    {
        try{
           $this-> pdo = new PDO("mysql:host=" .HOST . ";dbname=" . DBNAME, LOGIN, PASSWORD);
           $this-> pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(Exception $ex){
            $ex->getMessage();
        }
    }
}