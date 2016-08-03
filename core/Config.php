<?php

class Config{
    
    function pdoConnection(){
        
        //設定資料庫帳號密碼
        $config['db']['dsn']='mysql:host=localhost; dbname=booking; charset=utf8';
        $config['db']['user'] = 'root';//帳號
        $config['db']['password'] = '';//密碼
        
        $db = new PDO(
            $config['db']['dsn'],
            $config['db']['user'],
            $config['db']['password'],
                array(
                    PDO::ATTR_EMULATE_PREPARES=>false,
                    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                )
            );
         config::$db=$db;
        
    }
}
?>