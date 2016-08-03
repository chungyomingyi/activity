<?php 
class HomeController extends Controller {
    
    //呼叫views/front.php
    function front(){
        $this->view("front");
    }
    
    //呼叫views/back.php
    function back(){
        $this->view("back");
    }
    
    //新增活動資料，呼叫models/NewActivity.php
    function create(){
        $this->models("NewActivity");
        
        
        $this->views();
    }
    
    
    
}



?>