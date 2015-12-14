<?php
session_start();
class selectionLogin{
    
    public $userFlag;
    
       public function check_cookie(){
        if(isset($_COOKIE['user_email'])){
            return true;
        }else{
            return false;
        }
    }
    
    public function check_session(){
        
        if(isset($_SESSION['userName'])){
            return true;
        }else{
            return false;
        }
            

    }
    
 
    
}
?>
