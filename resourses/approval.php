<?php 
session_start();
include "init.php";


$id = $_GET['id'];

     

$table = "noti".$_SESSION['mobile'];

$check_table = mysql_query("select * from $table where whosends = '{$id}'");
$number_of_rows = mysql_num_rows($check_table);

if( $number_of_rows <= 0){
    ?>
    <script>
        window.location.href = "../notification/";

    </script>

    <?php
}else{
    
    $getVarification = mysql_fetch_array(mysql_query("SELECT varification from students where mobile = '{$id}'"));
    $varification = $getVarification[0] +1;
    $updateVarification = mysql_query("update students set varification = {$varification} where mobile = '{$id}'");

    if($updateVarification){
        echo "<h2>updated</h2>";
        ?>
        <script>
            window.location.href = "delete.php?id=<?php echo $id;?>";

        </script>

        <?php
    }
}

    


?>
