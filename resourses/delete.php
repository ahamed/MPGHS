<?php
session_start();
include "init.php";
$id = $_GET['id'];

$table = "noti".$_SESSION['mobile'];
echo $table;
    $deleteNotification = "delete from {$table} where whosends = '{$id}'";
    if(mysql_query($deleteNotification)){
        ?>
    <script>
        window.location.href = "../notification/";

    </script>
    <?php
                            }



?>
