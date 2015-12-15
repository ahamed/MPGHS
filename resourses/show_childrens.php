<?php
class child{
    
    
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
    
    
    
    public function show($class, $section){
        
        $six_a = mysql_query("select * from childrens where class = '{$class}' and section = '{$section}'") or die("Error occur six".mysql_error());
        

    ?>
    <table class="table table-striped table-hover table-bordered" id="data">

        <tr class="danger">
            <th>Roll</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Religion</th>
            <th>Guardian's Mobile</th>
            <th>Class</th>
            <th>Section</th>
        </tr>


        <?php
        
        while( $data = mysql_fetch_array($six_a)){
            $roll = explode("-",$data[0]);
            ?>



            <tr class="success">
                <td>
                    <?php echo $roll[1]; ?>
                </td>
                <td>
                    <?php echo $data[1];?>
                </td>
                <td>
                    <?php echo $data[2];?>
                </td>
                <td>
                    <?php echo $data[3];?>
                </td>
                <td>
                    <?php echo $data[4];?>
                </td>
                <td>
                    <?php echo $data[5];?>
                </td>
                <td>
                    <?php echo $data[6];?>
                </td>
                <td>
                    <?php echo $data[7];?>
                </td>
                <td>
                    <?php echo $data[8];?>
                </td>
            </tr>
            <?php
            
            
        }  

?>

    </table>
    <?php

        
        
        
    }
    
    
}


?>
