<?php 
class HomeController extends Controller {
    
    //導向前台活動顯示頁面呼叫views/front.php
    function front(){
        $this->view("front");
    }
    
    //後台頁面，呼叫views/back.php
    function back(){
        $this->view("back");
    }
    
    //加入活動，輸入編號的頁面
    function add(){
        $this->view("add");
    }
    
    //新增活動資料，呼叫models/NewActivity.php
    function create(){
        
        //取得back表單資料
        $active = $_POST["active"];
        $maxpeople = $_POST["maxpeople"];
        $friend = $_POST["friend"];
        $starttime = $_POST["starttime"];
        $endtime = $_POST["endtime"];
        
        $insert=$this->models("NewActivity");
        $result= $insert->insert_activity($active,$maxpeople,$friend,$starttime,$endtime);
        $this->view("front",$result);
        //回到前台活動顯示頁面
        header("Location:../Home/front");
        
    }
    
    
    
}



?>