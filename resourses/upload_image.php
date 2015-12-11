<?php
 class up{
    
    private $link;
    private $host, $user,$ps,$db;
    private $username, $password, $sql,$login, $data, $rows;

public function __construct(){
    
     
        $this -> host = "localhost";
        $this -> user = "root";
        $this -> ps = "lumas";
        $this -> db = "mpghs";
        $this -> connect();
        $this -> upload_avater();
}

 public function connect(){
        $this -> link = mysql_connect($this->host, $this->user, $this->ps);
        mysql_select_db($this -> db) or die("database not found");
        
    }


 public function upload_avater(){
        
        //$update = "update picture set image"
        $target_dir = "../student_images/";
$target_file =$target_dir.basename($_FILES['avater']['name']);


        $uploadOk=1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
        
         $chk = getimagesize($_FILES['avater']['tmp_name']);
    if($chk){

        header("Location: ../profile/");
        $uploadOk = 1;
    }else{
        echo "File is not an image";
        //header("upload.php");
        $uploadOk = 0;
    }

    if(file_exists($target_file)){
        echo "Sorry , file already exist";
        header("Location: ../profile/");
        $uploadOk = 0;
    }

    if($_FILES['avater']['size']> 5000000){
        echo "sorry your file is too large";
        header("Location: ../profile/");

        $uploadOk = 0;

    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        header("Location: ../profile/");
        $uploadOk = 0;
    }
    if($uploadOk==0){
        echo "sorry file was not upload";
        header("Location: ../profile/");

    }else{
        rename($target_file,"my_name".$imageFileType);
        if(move_uploaded_file($_FILES['avater']['tmp_name'],$target_file)){


            header("Location: ../profile/");
        }else{
            echo "Sorry, there was an error uploading your file";
            header("Location: ../profile/");
        }
    }
        
     $mobile = 'mobile';
     
    if(mysql_query("update picture set image = '$target_file' where id='$_SESSION[$mobile]'")){
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
        echo "Error uploading".mysql_error();
    }
     
        
    }
    
    
   

 }

?>
