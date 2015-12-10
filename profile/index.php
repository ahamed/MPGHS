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

    <?php include "../resourses/menu.php";?>
        <script>
            var parent = document.getElementById("right-ul");
            var child = document.getElementById("lin");
            parent.removeChild(child);

        </script>

        <!-- start container from here-->

        <div class="container">
            <?php
            session_start();
                include "../resourses/init.php";
                if(isset($_SESSION["email"])){
                    $email = $_SESSION["email"];    
                }else{
                    $email = "";
                }
            
                $sql = mysql_query("select * from students where email = '$email'") or die("err"+mysql_error());
                while( $data = mysql_fetch_array($sql)){
                    ?>

                <div class="row row-content">
                    <div class="col-xs-12 col-sm-10">

                        <div class="media media-default">
                            <div class="media-heading media-left">
                                <img src="../images/boys.jpeg" class="img-responsive media-object img-thumbnail" width="400" height="400">
                            </div>
                            <div class="media-body">
                                <a class="btn btn-link pull-right" href="#"><span class="fa fa-pencil"></span></a>
                                <h2 class="media-title"><?php echo $data[0]." ".$data[1];?></h2>
                                <h4 id="bdate"><?php echo $data[2];?></h4>
                                <h4 id="sex"><?php echo $data[3];?></h4>
                                <h4 id="blood"><?php echo $data[4];?></h4>
                                <h4 id="mobile"><?php echo "+880 ".$data[5];?></h4>
                                <h4 id="email"><?php echo $data[6];?></h4>
                                <h4 id="year"><?php echo $data[8];?></h4>
                                <h4 id="uni"><?php echo $data[9];?></h4>
                                <h4 id="job"><?php echo $data[10];?></h4>
                            </div>
                        </div>
                    </div>
                </div>



                <?php
                    
                }
                
            ?>


        </div>


        <!-- end container here-->



        <?php include "../resourses/footer.php";?>
            <script src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
