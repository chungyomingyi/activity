<?php 
class BackController extends Controller {
    
    //建立活動頁面
    function newActivity(){
        $this->view("newActivity");
    }
    //新增活動資料，呼叫models/NewActivity.php
    function create(){

        $insert=$this->model("NewActivity");
        $result= $insert->insert_activity($_POST['active'],$_POST['maxpeople'],$_POST['friend'],$_POST['starttime'],$_POST['endtime']);
        // foreach($result as $data);
        
        $data['activity'] = $data[0];
        $data['maxpeople'] = $data[1];
        $data['friend'] = $data[2];
        $data['starttime'] = $data[3];
        $data['endtime'] = $data[4];
        $data['url'] = "https://lab-mingyi-lai.c9users.io/activity/Back/add?id=".$data[0]."";
        
        $data['friend'] = $_POST['friend'];
        $this->view("listActivity",$data);
        
    }
    
    //活動顯示頁面
    function listActivity(){
        $this->view("listActivity");
    }
    
    
    
}



?>