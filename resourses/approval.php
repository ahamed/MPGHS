<?php 

include "init.php";


$id = $_GET['id'];

     

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


?>
