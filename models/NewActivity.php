<?php

class NewActivity {
    
    //建立sql連線
    function __conn(){
        config::pdoConnection();
    }
    //建立活動
    function insert_activity(){
        
        //將輸入的資料寫進sql
        $insert_activity = "INSERT INT 'back' (`active`, `limit`, `friend`,  `starttime`, `endtime`) VALUES 
         ('{$_POST["active"]}','{$_POST["limit"]}','{$_POST["friend"]}','{$_POST["starttime"]}','{$_POST["endtime"]}')"
        config::$db->query($insert_activity);
        //建立活動後產生連結
        
        
    }
    
    
    
    
}



?>