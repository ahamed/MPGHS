<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teachers and Students Center</title>

    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/bootstrap-social.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="../css/mystyle.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body data-spy="scroll" data-target="#myScrollSpy" data-offset="100">
    <?php include "menu.php";?>

        <header class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-xs-12 col-sm-8">
                        <h2>Teachers and Students Center <small>Mohangonj Pilot Govt. High School</small></h2>

                        <p style="padding:40px;"></p>
                        <p>Mohangoj Pilot Govt. High School is a very reputed high school in Netrakona district. She has a great and well trained Teachers panel and ofcourse a nice brillient students.</p>
                    </div>
                    <div class="col-xs-12 col-sm-4" style="border-left: 1px solid #ddd;">
                        <p style="padding-top: 0px;"></p>
                        <img class="img-responsive img-circle" src="../images/teachers/head-master.jpeg" id="head-master">
                        <div id="hm-info">
                            <h2>Head Teacher</h2>
                            <h4>MD. Muchal master <small> Bsc. in Mathematics</small></h4>
                        </div>


                    </div>

                </div>
            </div>
        </header>
        <!-- end jumbotron header-->



        <div class="container">

            <div class="row row-content" id="teachers-info">
                <div class="col-sm-10 col-xs-12">
                    <!-- start inner row for partitioning the main area into two parts-->

                    <!-- start php code from here-->

                    <?php 
                    include "../resourses/init.php";
                    $sql = mysql_query("select * from teachers order by name DESC");
                    $inc = 0;
                    while($data = mysql_fetch_array($sql)){
                        
                        ?>

                        <div class="row row-content" id="teacher<?php echo $inc;?>">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <img class="img-responsive media-object img-thumbnail" src="../images/teachers/<?php echo $data[8]?>" width="400" height="400">
                                </div>
                                <div class="media-body t-info">
                                    <p style="padding-bottom: 20px;"></p>
                                    <dl class="dl-horizontal">
                                        <dt>Name    : </dt>
                                        <dd>
                                            <?php echo $data[0];?>
                                        </dd>

                                        <dt>Age : </dt>
                                        <dd>
                                            <?php echo $data[1];?>
                                        </dd>

                                        <dt>Specialized for : </dt>
                                        <dd>
                                            <?php echo $data[2];?>
                                        </dd>

                                        <dt>Short biography :</dt>
                                        <dd>
                                            <p>
                                                <?php echo $data[3];?>
                                            </p>
                                        </dd>
                                        <p style="padding-bottom: 5px;"></p>
                                        <dt>Contacts : </dt>
                                        <dd>

                                            <div class="btn-group" role="group">
                                                <a type="button" href="tel:+88<?php echo $data[4];?>" class="btn btn-success"><span class="fa fa-phone"></span></a>
                                                <a type="button" href="https://facebook.com/<?php echo $data[5]?>" class="btn btn-info"><span class="fa fa-facebook"></span></a>
                                                <a type="button" href="mailto:<?php echo $data[6];?>" class="btn btn-warning"><span class="fa fa-envelope"></span></a>
                                                <a type="button" href="https://twitter.com/<?php echo $data[7];?>" class="btn btn-info"><span class="fa fa-twitter"></span></a>

                                            </div>
                                        </dd>

                                    </dl>
                                </div>

                            </div>
                            <!-- end media-->
                        </div>
                        <!-- end inner row-->


                        <?php
                        
                        $inc++;
                        
                   }
                    
                    
                    ?>





                            <!-- start 2nd teacher profile-->

                            <!--<div class="row row-content">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img class="img-responsive media-object img-thumbnail" src="..//images/math_teacher.jpg" width="400" height="400"> 
                            </div>
                            <div class="media-body t-info">
                                <p style="padding-bottom: 20px;"></p>
                                <dl class="dl-horizontal">
                                    <dt>Name    : </dt>
                                    <dd>Kanai master</dd>
                                    
                                    <dt>Age : </dt>
                                    <dd>63</dd>
                                    
                                    <dt>Specialized for : </dt>
                                    <dd>Mathematics</dd>
                                    
                                    <dt>Short biography :</dt>
                                    <dd>Joined high school at 1963 in Mohangonj Pilot Govt. High School and finish his high school at 1968. Joined at BAUC at 2009 and finished at 2011. Then he admitted into Jagannath University Dhaka at Department of Computer Science and Engineering and completed his graduation at 2016. </dd>
                                    <p style="padding-bottom: 5px;"></p>
                                    <dt>Contacts : </dt>
                                    <dd>
                                        
                                        <div class="btn-group" role="group">
                                            <a type="button" href="tel:+8801778919803" class="btn btn-success"><span class="fa fa-phone"></span></a>
                                            <a type="button" href="#" class="btn btn-info"><span class="fa fa-facebook"></span></a>
                                            <a type="button" href="mailto:sajeeb07ahamed@gmail.com" class="btn btn-warning"><span class="fa fa-envelope"></span></a>
                                            <a type="button" href="#" class="btn btn-info"><span class="fa fa-twitter"></span></a>
                                            
                                        </div>
                                    </dd>
                                    
                                </dl>
                            </div>
                        
                        </div><!-- end media-->
                            <!--</div>-->


                </div>
                <!-- end main information point -->

                <div class="col-sm-2 col-xs-12">
                    <nav class="col-sm-2 hidden-xs" id="myScrollSpy">
                        <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="400">
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
                    </nav>
                </div>
                <!-- end left side reserve part-->
            </div>


        </div>
        <!-- end main container-->



        <?php include "../resourses/footer.php";?>

            <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../bower_components/jquery/dist/chart.min.js"></script>
            <script type="text/javascript" src="../js/passingGraph.js"></script>

            <script type="text/javascript">
                $(document).ready(function() {

                    var effect = 'slide';

                    // Set the options for the effect type chosen
                    var options = {
                        direction: "Down"
                    };

                    // Set the duration (default: 400 milliseconds)
                    var duration = 500;

                    $('#head-master').toggle(effect, options, duration);


                    //$("#head-master").animate("slide",{direction: "Down"},1000);
                    $("#hm-info").delay(1000).animate('slide', {
                        direction: 'Left'
                    }, 1000);
                });

            </script>
</body>

</html>
