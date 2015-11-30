<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Mohangonj Pilot Govt. High School</title>
        
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#myScrollSpy" data-offset="100" onload="showGraph()">
        
        
        <!-- include the menu bar-->
        <?php include "menu.php"; ?>
        
        <?php include "carousel.php"?>
        
        
        <!-- start container-->
        <div class="container">
            
            <!-- start very outer row-->
            <div class="row row-content" >
                <div class="col-xs-12 col-sm-10" id="outer-row">
                    <!-- start first inner  row-->
                    <div class="row row-content" id="history">
                        <div class="col-xs-12 col-sm-12">
                            <div class="media">
                                <div class="media media-left media-middle">
                                
                                </div>
                                <div class="media-body">
                                    <h2 class="media-heading">History</h2>
                                    <p style="padding: 5px;"></p>
                                    <p>The university has a history that started in 1858 when Dhaka Brahma School was founded in 1858 by Dinanath Sen, Prabhaticharan Roy, Anathbandhu Mallik and Brajasundar Kaitra. The name Jagannath school was given by Kishorilal Chowdhury, the Zamindar of Baliati in Manikganj, who took over the school in 1872 and renamed it after his father. In 1884, it was raised to a second grade college. Law was one of the first courses introduced. A common management committee administered the school and college until 1887, when the school section was separated to form the independent Kishore Jubilee School. It is now known as K L Jubilee School. The administration of the college was transferred to a board of trustees in 1907. In the following year, it became a first grade college.

The college started with 48 students and in five years, the roll raised to 396. In 1910, Raja Manmath Roy Chowdhury, the zamindar of Santosh, Tangail, affiliated the Pramath-Manmath College of Tangail with Jagannath College. With the establishment of University of Dhaka in 1921, it stopped admission to degree courses and was renamed Jagannath Intermediate College. This status was changed after 28 years in 1949, when it reopened degree classes. The college was taken over by the government in 1968.

Jagannath College opened honours and masters programmes in 1975. That year the government once again took over the college and upgraded it into a postgraduate college. In 1982, the college closed its programmes at intermediate level. The college introduced evening shifts in 1992.

It was transformed into Jagannath University in 2005 by passing a bill named Jagannath University Act-2005 in the national parliament.[3]</p>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div><!-- end frist inner row history-->  
                    
                    
                    <!-- start of nav-tab of table and graph-->
                    <div class="row row-content" id="achivements">
                        
                        <div class="col-xs-12 col-sm-12">
                            <h1 class="media-heading media-object">Achivements</h1>
                            <p style="padding: 5px"></p>
                            <ul class="nav nav-tabs" role="tablists">
                                 <li role="presentation" class="active">
                                    <a  href="#graph" role="tab" data-toggle="tab"  id="logGraph" aria-controls="graph">
                                        Result State Graph
                                    </a>
                                </li>
                                <li  role="presentation">
                                    <a href="#table"  data-toggle="tab" aria-contorls="table" role="tab" >
                                        Result State Table
                                    </a>
                                </li>
                               
                            </ul>
                            
                            <div class="tab-content tab-area">
                                <div class="tab-pane fade " role="tabpanel" id="table">
                                    <div class="media">
                                <div class="media-right media-middle">
                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">
                                        
                                        
                                        <?php include "resourses/init.php";
                                        
                                        $sql = "select * from achivements order by year DESC limit 6";
                                        $fetch_data = mysql_query($sql) or die("data not found");

                                        ?>
                                         <tr class="danger">
                                                <th>&nbsp;</th>
                                        
                                        <?php 
                                             $inc = 0;
                                        while ( $data = mysql_fetch_array($fetch_data)){
                                            ?>
                                        
                                           
                                             <th id="yr<?php echo $inc; ?>"><?php  echo $data[0]; ?></th>
                                            
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
                                            
                                                    <td id="ex<?php echo $inc?>"><?php echo $data[1];?></td>
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
                                                <td id="pa<?php echo $inc?>"><?php echo $data[2];?></td>
                                             
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
                                                <td id="ap<?php echo $inc?>"><?php echo $data[3];?></td>
                                                
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
                                                
                                                <td id="gp<?php echo $inc;?>"><?php echo $data[4];?></td>
                                            
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
                                                <td id="p<?php echo $inc;?>"><?php echo $number;?></td>
                                            
                                            <?php
                                               $inc++;
                                                
                                            }
                                             
                                            ?>
                                        </tr>
                                            
                                            <?php
                                        ?>  <!-- end php tag-->
                                            
                                        
                                    </table>
                                </div><!-- end table responsive class-->
                                
                            </div>
                                </div>
                                <div class="tab-pane  in active" role="tabpanel" id="graph">
                                    
                                      <!-- start of graph row-->
                    <div class="row row-content">
                        <div class="col-xs-12 col-sm-9">
                            <canvas id="passingGraph" height="200" style="width:100%" class=""></canvas>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div class="media" style="padding: 20px;">
                                <div class="media media-left media-middle">
                                    <div class="media-object indicator-color1"></div>
                                </div>
                                <div class="media-body">
                                    <h2 class="media-headding">Pass %</h2>
                                    
                                </div>
                                <br>
                                <div class="media media-left media-middle">
                                    <div class="media-object indicator-color2"></div>
                                </div>
                                <div class="media-body">
                                    <h2 class="media-headding">A+</h2>
                                </div>
                                <br>
                                <div class="media media-left media-middle">
                                    <div class="media-object indicator-color3"></div>
                                </div>
                                <div class="media-body">
                                    <h2 class="media-headding">Golden A+</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- end graph row-->
                                    
                                    
                                </div>
                            </div><!-- end tab-contents div-->
                            
                            
                        </div><!-- end col 12-->
                        
                    </div><!-- end of nav tab of table and graph row-->
                    
                    
                  
                    
                    
                </div>
                
                
                <div class="col-xs-2 col-sm-2">
                <nav class="col-sm-2 hidden-xs" id="myScrollSpy">
                    <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="400">
                        <li><a href="#history">History</a></li>
                        <li><a href="#achivements">Achivements</a></li>
                        
                    </ul>
                </nav>
                </div><!-- end right side panel-->
            </div><!-- end very outer row-->
        
        </div>
        <!--end main container-->
        <?php include "footer.php";?>
        
        
        
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>                            
        <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bower_components/jquery/dist/chart.min.js"></script>
        <script type="text/javascript" src="js/passingGraph.js"></script>
    </body>
    
    
    
    
    
    
</html>