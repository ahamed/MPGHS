<?php
class showStudents{
    
    private $link;
    private $host, $user,$ps,$db;
    private $username, $password, $sql,$login, $data, $rows;

    public function __construct(){
    
     
        $this -> host = "localhost";
        $this -> user = "root";
        $this -> ps = "lumas";
        $this -> db = "mpghs";
        $this -> connect();

    }
    
    public function connect(){
        $this -> link = mysql_connect($this->host, $this->user, $this->ps);
        mysql_select_db($this -> db) or die("database not found");
        
    }
    
    
    public function show(){
        $sql = "select * from students as s, picture as p where s.mobile = p.id order by fname ASC";
        $getValues = mysql_query($sql);
        while($data = mysql_fetch_array($getValues)){
            ?>

    <div class="col-xs-12 col-sm-4">
        <div class="thumbnail">

            <img class="img-responsive img-thumbnail" src="<?php echo $data[12];?>" width="242" height="200">

            <div class="caption">
                <h3><?php echo $data[0]." ".$data[1];?></h3>
                <p>
                    <h4><span>Born at</span> - <?php echo $data[2];?></h4>
                    <h4><span>Blood Group</span> - <?php echo $data[4];?></h4>
                    <h4><span>Mobile no</span> - +880 <?php echo $data[5];?></h4>
                    <h4><span>Email</span> - <?php echo $data[6];?></h4>
                    <h4><span>Graduated from</span> - <?php echo $data[9];?></h4>
                    <h4><span>Occupation</span> - <?php echo $data[10];?></h4>
                </p>
            </div>
        </div>
    </div>



    <?php
        }
        
    }
}


?>
