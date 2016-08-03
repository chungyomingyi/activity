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
    
    //加入活動，輸入編號頁面
    function add(){
        $this->view("add");
    }
    
    //新增活動資料，呼叫models/NewActivity.php
    function create(){
        
        $this->models("NewActivity");
        
        //建立完活動回到前台活動顯示頁面
        $this->views("front");
    }
    
    
    
}



?>