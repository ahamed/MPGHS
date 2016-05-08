<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Managing Board</title>

    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/bootstrap-social.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="../css/mystyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../bower_components/css/hover-min.css">



    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body data-spy="scroll" data-target="#myScrollSpy" data-offset="100">
    <?php include "../resourses/menu.php";?>
        <script type="text/javascript">
            var d = document.getElementById("pref");
            d.className = "active";

        </script>

        <header class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-xs-12 col-sm-8">
                        <h2>Managing Commette <small>Mohangonj Pilot Govt. High School</small></h2>

                        <p style="padding:40px;"></p>

                    </div>
                    <div class="col-xs-12 col-sm-4" style="border-left: 1px solid #ddd;">
                        <p style="padding-top: 0px;"></p>
                        <img class="img-responsive img-circle" src="../images/chairman.jpeg" id="head-master">
                        <div id="hm-info">
                            <h2>Chairman</h2>
                            <h4>Mr. ABC <small> Graduate in History </small></h4>
                        </div>


                    </div>

                </div>
            </div>
        </header>
        <!-- end jumbotron header-->



        <div class="container">
            <div class="row row-content">
                <div class="col-xs-12 col-sm-10">
                    <div class="col-sm-12 col-xs-12" id="outer-row">
                        <!-- start inner row for partitioning the main area into two parts-->

                        <!-- start php code from here-->
                        <h1 class="media-title">Members</h1>
                        <?php 
                    include "../resourses/init.php";
                    $sql = mysql_query("select * from teachers order by name DESC");
                    $inc = 0;
                    while($data = mysql_fetch_array($sql)){
                        
                        ?>

                            <div class="row row-content hvr-float-shadow" id="teacher<?php echo $inc;?>">
                                <div class="media grid">
                                    <div class="media-left media-middle">
                                        <img class="img-responsive media-object img-thumbnail" src="../images/teachers/<?php echo $data[8]?>" width="400" height="400">
                                    </div>

                                    <div class="media-body t-info ">
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




                    </div>
                    <!-- end main information point -->


                </div>
                <!-- end the whole left part-->
                <div class="col-xs-12 col-sm-2" id="right-panel">
                    <nav class="col-sm-2 hidden-xs" id="myScrollSpy">
                        <?php 
                                require "../resourses/class.resultTable.inc";
                                $rightAffix = new resultTable;
                                $rightAffix -> showRightAffix("Members");
                            ?>
                    </nav>

                </div>
                <!-- end right bar affix-->
            </div>
            <!-- end the inner row-->





        </div>

        <!-- end main container-->




        <?php include "../resourses/footer.php";?>

            <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../bower_components/jquery/dist/chart.min.js"></script>
            <script type="text/javascript" src="../js/passingGraph.js"></script>


    <?php
    require "../resourses/showNotification.inc";
    $noti = new showNotification();
    $noti -> show();
    ?>
</body>

</html>
