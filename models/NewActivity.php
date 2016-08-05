<?php
require_once("models/Config.php");
class NewActivity {
    var $dbh;
    
    function __construct(){   
        $db_con = new DB_con();
        $db = $db_con->db;
        $this-> dbh = $db;
    }
    //建立活動
    function insert_activity($active,$maxpeople,$friend,$starttime,$endtime){
        $dbh = $this->dbh ;
        //將輸入的資料寫進sql
        $sth=$dbh->prepare("INSERT INTO `back` (`active`, `maxpeople`, `friend`, `starttime`, `endtime`) 
                                            VALUES (?, ?, ?, ?, ?)");
        
        $sth->bindParam(1, $active);
        $sth->bindParam(2, $maxpeople);
        $sth->bindParam(3, $friend);
        $sth->bindParam(4, $starttime);
        $sth->bindParam(5, $endtime);
        $sth->execute();
         
        // 將新增到資料庫的活動內容 查詢取 id
        $slet = $dbh->prepare("SELECT * FROM `back` WHERE `active` = :active");
        $slet->bindParam(':active', active);
        $slet->execute();
        $dbh = null;
        
        return $slet->fetchAll();
    }
    
    
}



?>