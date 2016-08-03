<?php

class NewActivity {
    
    //從core/Config裡的pdoConnection()取得sql連線
    function __conn(){
        config::pdoConnection();
    }
    //建立活動
    function insert_activity($active,$maxpeople,$friend,$starttime,$endtime){
        
        //將輸入的資料寫進sql
        $insert_activity = "INSERT INTO `back` (`active`, `maxpeople`, `friend`, `starttime`, `endtime`) VALUES 
         ('{$_POST["active"]}','{$_POST["maxpeople"]}','{$_POST["friend"]}','{$_POST["starttime"]}','{$_POST["endtime"]}')"
        config::$db->query($insert_activity);
        
        //建立活動後產生連結
        
    }
    
    
    
    
}



?>