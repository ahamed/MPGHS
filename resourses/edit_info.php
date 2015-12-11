<?php
class edit{
    private $link;
    private $host, $user,$ps,$db;
    private $username, $password, $sql,$login, $data, $rows;
    
    private $fname, $lname, $bdate;
    private $sex, $blood, $mobile;
    private $email, $pass, $passing;
    private $university, $job;
    private $iist;
    
    public function __construct($fname, $lname, $bdate, $sex, $blood, $mobile,$email, $passing, $uni, $job){
       
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
        $this -> update_table();
        
    }
    
    
        
    public function update_table(){
        $email_session = 'email';
        $mobile_seddion = 'mobile';
        
        $sqlupdate = "UPDATE students SET fname  = '$this->fname',lname =  '$this->lname', bdate = '$this->bdate',sex = '$this->sex',blood = '$this->blood',mobile = '$this->mobile',email = '$this->email',passing_year = '$this->passing',university = '$this->university',job = '$this->job' WHERE email = '$_SESSION[$email_session]'";
        
        if(mysql_query($sqlupdate)){
            $_SESSION[$email_session] = $this->email;
          //  $_SESSION[$mobile_session] = $this->mobile;
            ?>
    <script>
        window.location.href = "../profile/";

    </script>


    <?php 
        }else{
            ?>
        <script>
            window.location.href = "../profile/";

        </script>

        <?php 
            
        }
    }
    
    
     public function connect(){
        $this -> link = mysql_connect($this->host, $this->user, $this->ps);
        mysql_select_db($this -> db) or die("database not found");
        
    }

    
}
