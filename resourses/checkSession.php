<?php
session_start();
class selectionLogin{
    
    public $userFlag;
    
    
    public function test(){
        
        if(isset($_SESSION['userName'])){
            return true;
        }else{
            return false;
        }
            

    }
    
}
?>
