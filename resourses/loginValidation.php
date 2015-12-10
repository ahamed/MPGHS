<?php
class loginValidation{ 

  
    public $link;
    public $host, $user,$ps,$db;
    public $username, $password, $sql,$login, $data, $rows;
    
    
    
    public function __construct($user,$pass){
        $this -> host = "localhost";
        $this -> user = "root";
        $this -> ps = "lumas";
        $this -> db = "mpghs";
        $this -> connect();
        
        $this -> username = $user;
        $this -> password = $pass;
        
        $this -> evaluate_queries();
        
        
    }
    
    public function evaluate_queries(){
        $this -> sql = "select fname,email,password from students where email = '$this->username' and password = '$this->password'";
        $this -> login = mysql_query($this -> sql) or die("Login Error");
        $this -> rows = mysql_num_rows($this -> login);
        if( !($this -> rows)){
            $this -> rows = 0;
        }else{
            $this -> data = mysql_fetch_array($this -> login) or die(mysql_error());    
        }
        
    }
    
    
    public function connect(){
        $this -> link = mysql_connect($this->host, $this->user, $this->ps);
        mysql_select_db($this -> db) or die("database not found");
        
    }
    
    
    public function user_name(){
        if( $this -> rows >= 1 ){
            return $this -> data[0];
        }else if( $this -> rows<=0){
            return "-1";
        }
    }
    
    public function user_ID(){
        if( $this -> rows >= 1 ){
            return $this -> data[1];
        }else if( $this -> rows<=0){
            return "-1";
        }
    }
    
    public function user_password(){
        if( $this -> rows >= 1){
            return $this -> data[2];
        }else if($this -> rows<=0){
            return "-1";
        }
    }
    
   
}


?>
