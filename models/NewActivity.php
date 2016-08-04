<?php

class NewActivity {
    
    //從core/Config裡的pdoConnection()取得sql連線
    function __conn(){
        config::pdoConnection();
    }
    //建立活動
    function insert_activity($active,$maxpeople,$friend,$starttime,$endtime){
        
        //將輸入的資料寫進sql
        $sth=DB::$db->prepare("INSERT INTO `back` (`active`, `maxpeople`, `friend`, `starttime`, `endtime`) VALUES 
        (:active,:maxpeople,:friend,:starttime,:endtime)");
        $sth->bindparam(":active",$_POST["active"]);
        $sth->bindparam(":maxpeople",$_POST["maxpeople"]);
        $sth->bindparam(":friend",$_POST["friend"]);
        $sth->bindparam(":starttime",$_POST["starttime"]);
        $sth->bindparam(":endtime",$_POST["endtime"]);
        $sth->execute();
         
         
         
         
        // config::$db->query($insert_activity);
        
        //建立活動後產生連結
        
    }
    
    
    
    
}



?>