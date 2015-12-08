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
        <script>
            var tag = document.getElementById("login");
            tag.innerHTML = "";

        </script>

        <div class="container">
            <div class="row" id="main-login-row">
                <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="panel-title">Login</h2>
                        </div>
                        <div class="panel-body">
                            <form action="#" method="POST">
                                <!--<p style="padding-bottom: 120px;"></p>-->
                                <img src="../images/logo.png" class="img-circle" height="100" width="100">
                                <div class="form-group" id="not-matched-alert">
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                        <button class="close" type="button" id="close" aria-label="close"><i id="close-alert" class="fa fa-close" aria-hidden="true"></i></button> Password Not Matched!</div>


                                </div>

                                <div class="form-group has-feedback has-success">
                                    <input id="user" type="text" name="email" placeholder="Type your Email" class="form-control" style="margin-bottom:20px;">
                                    <span class="form-control-feedback glyphicon glyphicon-user right-bar-icon"></span>
                                </div>
                                <div class="form-group has-feedback has-success">
                                    <input id="pass" type="password" name="pass" placeholder="Type your password" autocomplete="on" class="form-control has-danger">
                                    <span class="form-control-feedback glyphicon glyphicon-lock"></span>
                                </div>

                                <hr>
                                <div class="form-group has-error">
                                    <label for="remember" class="checkbox-inline">
                                        <input type="checkbox" name="remember" id="remember"> <span> Keep me logged in</span>
                                    </label>
                                    <a class="btn btn-danger pull-right" href="../signup/"><i class="icon icon-book"></i> Create an account</a>
                                </div>
                                <p style="padding-bottom: 1px;"></p>
                                <button type="submit" name="login" id="access" class=" btn btn-info form-control"><i class="fa fa-sign-in"></i> Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../resourses/footer.php";?>
            <script src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



            <?php 
    session_start();
        include "../resourses/loginValidation.php";
        if( isset( $_POST['login'])){
            if( isset($_POST['email'])){
                $user = $_POST['email'];
            }    
            if(isset($_POST['pass'])){
                $pass = $_POST['pass'];
            }
            $log = new loginValidation($user,$pass);
           
            if(($user == $log -> user_ID())&& ($pass == $log -> user_password())){
                $session_name = "userName";
                $session_value = $log -> user_name();
                
                $_SESSION[$session_name]= $session_value;
                
    ?>
                <script>
                    window.location = "../home/";

                </script>
                <?php
            }else{
                ?>
                    <script>
                        $("#not-matched-alert").slideDown("slow");
                        $("#close").click(function() {
                            $("#not-matched-alert").slideUp("slow");
                        });

                    </script>
                    <?php 
            }   
        }
    ?>
</body>

</html>
