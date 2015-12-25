<?php
/**
 * Created by PhpStorm.
 * User: sajeeb
 * Date: 12/25/15
 * Time: 5:03 PM
 */

class showNotification {


    public function __construct(){

    }

    public  function show(){

        if(isset($_SESSION['mobile'])){
            $mobile = $_SESSION['mobile'];
            $table = "noti".$mobile;
            $sql = mysql_query("select * from {$table}");
            $rows = mysql_num_rows($sql);
            if( $rows > 0){
                ?>

                <script>
                    $("#notific").show().text('<?php echo $rows;?>');
                </script>
            <?php
            }else{
                ?>
                <script>
                    $("#notific").hide();
                </script>
            <?php
            }
        }

    }
}