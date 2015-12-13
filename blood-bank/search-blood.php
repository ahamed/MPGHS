<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mohangonj Pilot Govt. High School</title>

    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap-social.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../bower_components/jsImgSlider/themes/2/js-image-slider.css">
    <link rel="stylesheet" href="../css/mystyle.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="../bower_components/jsImgSlider/themes/2/js-image-slider.js"></script>
    <script src="../bower_components/jsImgSlider/flux.min.js"></script>
</head>

<body>

    <?php
    include "../resourses/menu.php";
    ?>
        <script type="text/javascript">
            var d = document.getElementById("bb");
            d.className = "active";

        </script>

        <div class="container">
            <div class="row row-content">

                <?php include "../resourses/init.php"; 
                $blood_gp=$_POST[ 'blood-grp']; 
                $getinfo_bl=mysql_query( "select * from students where blood = '{$blood_gp}'"); 
                $num_of_rows=mysql_num_rows($getinfo_bl);
                if($num_of_rows <=0 ){
                    ?>
                    <div class="col-sm-4 col-xs-12 col-sm-offset-4 b-n-f">
                        <h1><strong>Sorry</strong> no <strong>B</strong>lood found<strong>!</strong></h1>
                    </div>

                    <?php
}else{ while( $data=mysql_fetch_array($getinfo_bl)){ ?>



                        <div class="col-sm-4 col-xs-12">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3><?php echo $data[0]." ".$data[1];?></h3>

                                    <h5 id="email"><span class="fa fa-mobile fa-2x"> 0<?php echo $data[5];?></span> </h5>
                                    <h5 id="mobile"><a href="mailto:<?php echo $data[6];?>"><span class="fa fa-envelope"> <?php echo $data[6];?></span> </a></h5>
                                    <h5><span class="glyphicon glyphicon-education"></span> <?php echo $data[8];?> Batch</h5>
                                </div>
                            </div>
                        </div>






                        <?php 
    }
    }
    ?>


            </div>
        </div>


        <?php
    include "../resourses/footer.php";
    ?>


            <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
