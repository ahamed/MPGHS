<?php 
session_start();
class signup{ 
    
    
    private $link;
    private $host, $user,$ps,$db;
    private $username, $password, $sql,$login, $data, $rows;
    
    private $fname, $lname, $bdate;
    private $sex, $blood, $mobile;
    private $email, $pass, $passing;
    private $university, $job;
    private $iist;
    
    public function __construct($fname, $lname, $bdate, $sex, $blood, $mobile,$email, $pass, $passing, $uni, $job){
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
        
        
        
    }

    
    public function insert_into_students(){
      
        $insertsql = "INSERT INTO students VALUES ('$this->fname', '$this->lname','$this->bdate','$this->sex','$this->blood','$this->mobile','$this->email','$this->pass','$this->passing','$this->university','$this->job',0)";
        
      //  $insert_into_studetns_mysql = mysql_query($sql) ;
       
        
        if ( mysql_query($insertsql)){
                
            $session_name = "userName";
            $session_user_id = "email";
            $session_mobile = "mobile";
            $session_value = $this -> fname;
                
            $_SESSION[$session_name]= $session_value;
            $_SESSION[$session_user_id] = $this -> email;
            $_SESSION[$session_mobile] = $this -> mobile;
            $img = mysql_query("insert into picture values('$this->mobile','../images/common.jpeg')") or die("Don't insert");
            $table_name = "noti".$this->mobile;
            
            $create_notification_table = "CREATE TABLE IF NOT EXISTS $table_name (whosends varchar(100), primary key(whosends))";
            if( mysql_query($create_notification_table)){
                
            }else{
                ?>
    <script>
        alert("table noti not created");

    </script>
    <?php
                echo "Table of notification not created";
            }
            
            /*Send request for approval*/
            
            $retrive_yr = mysql_query("select mobile from students where passing_year = '{$this->passing}'");
            while($yr = mysql_fetch_array($retrive_yr)){
                $tab = "noti".$yr[0];
                $ins = mysql_query("insert into {$tab} values ('{$this->mobile}')");
            }
            
            
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

    
    public function update_table(){
        
        
        $email_session = 'email';
        $mobile_session = 'mobile';
        $old_table = "noti".$_SESSION[$mobile_session];
        $old_mobile = $_SESSION[$mobile_session];
        
        
        
        $sqlupdate = "UPDATE students SET fname  = '$this->fname',lname =  '$this->lname', bdate = '$this->bdate',sex = '$this->sex',blood = '$this->blood',mobile = '$this->mobile',email = '$this->email',passing_year = '$this->passing',university = '$this->university',job = '$this->job' WHERE email = '$_SESSION[$email_session]'";
        
        if(mysql_query($sqlupdate)){
            $_SESSION[$email_session] = $this->email;
            $_SESSION[$mobile_session] = $this->mobile;
            
            $getPic = mysql_query("select image from picture where id = '$old_mobile'");
            $pic = mysql_fetch_array($getPic);
            $sql_update_picture = mysql_query("insert into picture values ('$this->mobile','$pic[0]')");
            
            
            $new_table = "noti".$this -> mobile;
            if( $new_table != $old_table){
                $rename_noti = "RENAME TABLE $old_table TO $new_table";
            if( mysql_query($rename_noti)){
                
            }else{
                echo "Error renaming";
            }    
            }
            
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
    
    
    
   
}



?>
