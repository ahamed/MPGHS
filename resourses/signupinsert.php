<?php 
session_start();
class signup{ 
    
    
    public $link;
    public $host, $user,$ps,$db;
    public $username, $password, $sql,$login, $data, $rows;
    
    public $fname, $lname, $bdate;
    public $sex, $blood, $mobile;
    public $email, $pass, $passing;
    public $university, $job;
    public $iist;
    
    public function __construct($fname, $lname, $bdate, $sex, $blood, $mobile,$email, $pass, $passing, $uni, $job){
  // public function __construct(){
        $this -> fname = $fname;
        $this -> lname = $lname;
        $this -> bdate = $bdate;
        $this -> sex = $sex;
        $this -> blood = $blood;
        $this -> mobile = $mobile;
        $this -> email = $email;
        $this -> pass = $pass;
        $this -> passing = $passing;
        $this -> university = $uni;
        $this -> job = $job;
       
        
        
        $this -> host = "localhost";
        $this -> user = "root";
        $this -> ps = "lumas";
        $this -> db = "mpghs";
        $this -> connect();
        $this -> insert_into_students();
        
        
    }

    
    public function insert_into_students(){
      
        $sql = "INSERT INTO students VALUES ('$this->fname', '$this->lname','$this->bdate','$this->sex','$this->blood','$this->mobile','$this->email','$this->pass','$this->passing','$this->university','$this->job')";
        
      //  $insert_into_studetns_mysql = mysql_query($sql) ;
       
        
        if ( mysql_query($sql)){
                
            $session_name = "userName";
            $session_user_id = "email";
            $session_value = $this -> fname;
                
            $_SESSION[$session_name]= $session_value;
            $_SESSION[$session_user_id] = $this -> email;
            
           ?>
    <script>
        window.location.href = "../profile/";

    </script>


    <?php
        }else{
            
            ?>
        <script>
            window.location.href = "../signup/";

        </script>

        <?php
            
        }
    }
    
     public function connect(){
        $this -> link = mysql_connect($this->host, $this->user, $this->ps);
        mysql_select_db($this -> db) or die("database not found");
        
    }
    

}



?>
