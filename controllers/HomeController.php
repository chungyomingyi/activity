<?php 
class HomeController extends Controller {
    
    //呼叫views/front.php
    function front(){
        $this->views("front");
    }
    
    //呼叫views/back.php
    function back(){
        $this->views("back");
    }
}



?>