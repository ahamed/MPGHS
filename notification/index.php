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

    <script>
        $(document).ready(function() {
            $("#ck").val("hello world");
        });

    </script>

</head>

<body>

    <?php include "../resourses/menu.php";?>


        <div class="container">
            <div class="row row-content">
                <div class="col-sm-12">

                    <form class="" method="POST" action="#">
                        <?php
                        session_start();
                    include "../resourses/init.php";
                        $notification = 'notify';
                    $table = "noti".$_SESSION['mobile'];
                    $inc = 0;
                    $getNotification = mysql_query("select * from {$table}");
                    
                    $rows = mysql_num_rows($getNotification);
                        if($rows > 0){
                            $_SESSION[$notification] = $rows;
                    while($data = mysql_fetch_array($getNotification)){
                        $getNamePic = mysql_fetch_array(mysql_query("select * from students as s, picture as p, {$table} as n where s.mobile = p.id and s.mobile = n.whosends and n.whosends = '{$data[0]}'")); 
                        
                        
                    ?>

                            <div class="media">
                                <div class="media-left media-middle">
                                    <img src="<?php echo $getNamePic[13];?>" width="100" height="120">
                                </div>
                                <div class="media-body">
                                    <h3><?php echo $getNamePic[0]." ".$getNamePic[1]; ?></h3>
                                    <h4>Do you know him/her?</h4>

                                    <div class="form-inline">
                                        <a class="btn btn-success" type="button" href="../resourses/approval.php?id=<?php echo $data[0];?>">Approve</a>
                                        <a class="btn btn-danger" type="button" href="../resourses/delete.php?id=<?php echo $data[0];?>">I cannot recognize him/her</a>
                                    </div>



                                </div>

                            </div>

                            <?php
                      
                        
                    }
                        }else{
                            echo "<h1>There are no approval request for you.</h1>";
                        }
                   
                    
                    
                    ?>
                    </form>
                </div>
            </div>
        </div>

        <script src="../bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#notify").click(function() {
                    $(this).hide();
                });
            });

        </script>


</body>

</html>
