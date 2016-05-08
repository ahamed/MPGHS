<?php 
class resultTable{

function showTable(){
    ?>
     <table class="table table-striped table-hover table-bordered" id="data">


                                                    <?php 
                                                    include "../resourses/init.php";
                                        
                                        $sql = "select * from achivements order by year DESC limit 6";
                                        $fetch_data = mysql_query($sql) or die("data not found");

                                        ?>
                                                        <tr class="danger">
                                                            <th>Year</th>

                                                            <?php 
                                             $inc = 0;
                                        while ( $data = mysql_fetch_array($fetch_data)){
                                            ?>


                                                                <th id="yr<?php echo $inc; ?>">
                                                                    <?php  echo $data[0]; ?>
                                                                </th>

                                                                <?php 
                                        $inc ++;
                                        }
                                             
                                        ?>
                                                        </tr>
                                                        <tr class="success">
                                                            <th>Total Examinees</th>

                                                            <?php    
                                             $sql = "select * from achivements order by year DESC limit 6";
                                            $fetch_data = mysql_query($sql) or die("data not found");
                                            $inc = 0;
                                            while($data = mysql_fetch_array($fetch_data)){
                                                 ?>

                                                                <td id="ex<?php echo $inc?>">
                                                                    <?php echo $data[1];?>
                                                                </td>
                                                                <?php
                                                    
                                                $inc++;    
                                                }
                                            ?>
                                                        </tr>
                                                        <tr class="warning">
                                                            <th>Total passed</th>
                                                            <?php
                                            
                                             $sql = "select * from achivements order by year DESC limit 6";
                                        $fetch_data = mysql_query($sql) or die("data not found");
                                             $inc = 0;
                                            while($data  = mysql_fetch_array($fetch_data)){
                                                ?>
                                                                <td id="pa<?php echo $inc?>">
                                                                    <?php echo $data[2];?>
                                                                </td>

                                                                <?php 
                                                
                                                $inc ++;
                                            }
                                             
                                             ?>
                                                        </tr>
                                                        <tr class="success">
                                                            <th>Total A+</th>

                                                            <?php
                                            $sql = "select * from achivements order by year DESC limit 6";
                                        $fetch_data = mysql_query($sql) or die("data not found");
                                                $inc = 0;
                                                while($data = mysql_fetch_array($fetch_data)){
                                                    ?>
                                                                <td id="ap<?php echo $inc?>">
                                                                    <?php echo $data[3];?>
                                                                </td>

                                                                <?php 
                                                    $inc++;
                                                }
                                            ?>

                                                        </tr>
                                                        <tr class="warning">
                                                            <th>Total Golden A+</th>
                                                            <?php
                                            $sql = "select * from achivements order by year DESC limit 6";
                                        $fetch_data = mysql_query($sql) or die("data not found");
                                            $inc = 0;
                                            while($data = mysql_fetch_array($fetch_data)){
                                                ?>

                                                                <td id="gp<?php echo $inc;?>">
                                                                    <?php echo $data[4];?>
                                                                </td>

                                                                <?php
                                                
                                                $inc++;
                                            }
                                            
                                            ?>
                                                        </tr>
                                                        <tr class="success">
                                                            <th>Passed (%)</th>

                                                            <?php
                                             $sql = "select * from achivements order by year DESC limit 6";
                                        $fetch_data = mysql_query($sql) or die("data not found");
                                             $inc = 0;
                                            while($data = mysql_fetch_array($fetch_data)){
                                                $percent = ($data[2] * 100)/($data[1]);
                                                $number = number_format($percent,2,'.','');
                                               
                                                ?>
                                                                <td id="p<?php echo $inc;?>">
                                                                    <?php echo $number;?>
                                                                </td>

                                                                <?php
                                               $inc++;
                                                
                                            }
                                             
                                            ?>
                                                        </tr>

                                                        <?php
                                        ?>
                                                            <!-- end php tag-->


                                                </table>
<?php
}

function showRightAffix($option){

?>
<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="400">
                                <li role="presentation"><h4><?php echo "{$option}"?></h4></li>
                                <?php
                            include "../resourses/init.php";
                                $sql = mysql_query("select * from teachers order by name DESC");
                    $inc = 0;
                    while($data = mysql_fetch_array($sql)){
                     ?>
                                    <li role="presentation">
                                        <a href="#teacher<?php echo $inc;?>">
                                            <?php echo $data[0];?>
                                        </a>
                                        <!--  <img clsss="img-responsive img-circle" src="../images/teachers/<?php echo $data[8];?>" width="20" height="20" style="display:inline;"></li>-->
                                        <?php 
                        
                        
                        $inc++;
                    }
                            ?>




                            </ul>


<?php

}

}

?>
