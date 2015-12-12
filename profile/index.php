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

                        <div class="media">
                            <div class="media media-middle media-left">

                                <?php
                                    $getImage = mysql_query("select * from picture where id =".$data[5]."");
                                    $img = mysql_fetch_array($getImage);
                    
                    ?>
                                    <div id="img_avater">

                                        <img id="" src="<?php echo $img[1];?>" class="img-responsive img-thumbnail" width=400 height=400>
                                    </div>
                                    <?php
                                ?>


                                        <button class="btn btn-link pull-left edit-picture" type="button" id="p<?php echo $data[5];?>" data-toggle="modal" data-target="#picture-<?php echo $data[5];?>" data-toggle="tooltip" data-placement="right" title="Edit picture"><span class="fa fa-pencil fa-2x"></span></button>
                            </div>
                            <div class="media-body">
                                <button class="btn btn-link pull-right edit" type="button" id="<?php echo $data[5];?>" data-toggle="modal" data-target="#m<?php echo $data[5];?>" data-toggle="tooltip" data-placement="right" title="Edit Account Information"><span class="fa fa-pencil fa-2x"></span></button>

                                <!--<dl class="dl-horizontal">
                                    <dt><h4 class="control-label">Name : </h4></dt>
                                    <dd>
                                        <h4 class=""><?php echo $data[0]." ".$data[1];?></h4>
                                    </dd>

                                    <dt><h4>Birth Date :</dt>
                                    <dd>
                                        <h4 id="bdate"><?php echo $data[2];?></h4>
                                    </dd>


                                    <dt><h4>Sex : </h4> </dt>
                                    <dd>
                                        <h4 id="sex"><?php echo $data[3];?></h4>
                                    </dd>

                                    <dt><h4>Blood Group : </h4></dt>
                                    <dd>
                                        <h4 id="blood"><?php echo $data[4];?></h4>
                                    </dd>

                                    <dt><h4>Mobile : </h4></dt>
                                    <dd>
                                        <h4 id="mobile"><?php echo "+880 ".$data[5];?></h4>
                                    </dd>

                                    <dt><h4>Email : </h4></dt>
                                    <dd>
                                        <h4 id="email"><?php echo $data[6];?></h4>
                                    </dd>


                                    <dt><h4>Passing Year : </h4></dt>
                                    <dd>
                                        <h4 id="year"><?php echo $data[8];?></h4>
                                    </dd>

                                    <dt><h4>Graduated From : </h4></dt>
                                    <dd>
                                        <h4 id="uni"><?php echo $data[9];?></h4>
                                    </dd>

                                    <dt><h4>Job : </h4></dt>
                                    <dd>
                                        <h4 id="job"><?php echo $data[10];?></h4>
                                    </dd>
                                </dl>-->


                                <div class="pull-left info">
                                    <h2><?php echo $data[0]." ".$data[1];?></h2>
                                    <a id="pop" class="btn btn-link" type="button" role="button" data-toggle="popover" data-trigger="focus" title="University" data-placement="right" data-content="Graduated from or studying in <?php echo $data[9];?>">
                                        <div>

                                            <h4><span class="fa fa-university"></span>  <?php echo $data[9];?></h4>
                                        </div>
                                    </a>
                                    <br>

                                    <a class="btn btn-link" type="button" role="button">
                                        <div>

                                            <h4><span class="fa fa-briefcase"></span>  <?php echo $data[10];?></h4>
                                        </div>
                                    </a>

                                    <br>

                                    <a class="btn btn-link">
                                        <div>
                                            <?php 
                                                if( $data[3] == "male"){
                                                    ?>
                                                <h4><span class="fa fa-mars"></span>  <?php echo $data[3];?></h4>
                                                <?php
                                                }else{
                                                    ?>
                                                    <h4><span class="fa fa-venus"></span>  <?php echo $data[3];?></h4>

                                                    <?php
                                                    
                                                }
                                            ?>

                                        </div>
                                    </a>
                                    <br>
                                    <a class="btn btn-link" type="button" role="button">
                                        <div>

                                            <h4><span class="fa fa-birthday-cake"></span>  <?php echo date('F j,Y',strtotime($data[2]));?></h4>
                                        </div>
                                    </a>
                                    <br>

                                    <a class="btn btn-link" type="button" role="button">
                                        <div>

                                            <h4><span class="fa fa-tint"></span>  <?php echo $data[4];?></h4>
                                        </div>
                                    </a>
                                    <br>
                                    <a class="btn btn-link" type="button" role="button">
                                        <div>

                                            <h4><span class="fa fa-mobile"></span>  +880 <?php echo $data[5];?></h4>
                                        </div>
                                    </a>

                                    <br>
                                    <a class="btn btn-link" type="button" role="button">
                                        <div>

                                            <h4><span class="fa fa-envelope"></span>  <?php echo $data[6];?></h4>
                                        </div>
                                    </a>



                                    <br>
                                    <a class="btn btn-link" type="button" role="button">
                                        <div>

                                            <h4><span class="glyphicon glyphicon-education"></span>  <?php echo $data[8];?></h4>
                                        </div>
                                    </a>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" role="dialog" id="m<?php echo $data[5] ;?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit and Update Information</h4>
                            </div>
                            <div class="modal-body">
                                <!-- add form here-->
                                <form class="" action="#" method="POST" autocomplete="off">
                                    <dl class="dl-horizontal">
                                        <dt>
                                        <label for="fname" class="control-label"><span class="fa fa-asterisk "></span> First Name : </label>
                                    </dt>
                                        <dd>
                                            <div class="form-group has-feedback has-success">
                                                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" value="
<?php echo $data[0];?>" required>

                                            </div>
                                        </dd>

                                        <dt>
                                        <label for="fname" class="control-label"><span class="fa fa-asterisk "></span> Last Name : </label>
                                    </dt>
                                        <dd>
                                            <div class="form-group has-feedback has-success">

                                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" value="<?php echo $data[1];?>" required>
                                            </div>
                                        </dd>

                                        <dt>
                                        <label for="bdate"><strong class="fa fa-asterisk "></strong> Birth date : </label>
                                    </dt>
                                        <dd>
                                            <div class="form-group has-feedback has-success">

                                                <input type="date" class="form-control" name="bdate" id="bdate" placeholder="Birth Date (mm/dd/yyyy)" value="<?php echo $data[2];?>" required>



                                            </div>
                                        </dd>
                                        <dt>
                                        <label for="gender" class="control-label"><strong class="fa fa-asterisk "></strong> Sex : </label>
                                    </dt>
                                        <dd>
                                            <div class="form-group has-feedback has-success">
                                                <select name="sex" id="gender" class="form-control has-success" required>
                                                    <?php 
                                                    if($data[3] == "male"){
                                                    ?>
                                                        <option class="has-success" value="male" selected>&#xf183; Male</option>
                                                        <option value="female">&#xf182; Female</option>
                                                        <?php
                                                        
                                                    }else {
                                                        ?>
                                                            <option class="has-success" value="male">&#xf183; Male</option>
                                                            <option value="female" selected>&#xf182; Female</option>

                                                            <?php 
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </dd>
                                        <dt>
                                        <label for="blood" class="control-form"><strong class="fa fa-asterisk "></strong> Blood Group : </label>
                                    </dt>
                                        <dd>
                                            <div class="form-group has-feedback has-success">
                                                <select class="form-control" name="blood" id="blood">
                                                    <option id="ini" value="sbg">Select blood group</option>
                                                    <option id="A+" value="A+">A+</option>
                                                    <option id="A-" value="A-">A-</option>
                                                    <option id="B+" value="B+">B+</option>
                                                    <option id="B-" value="B-">B-</option>
                                                    <option id="AB+" value="AB+">AB+</option>
                                                    <option id="AB-" value="AB-">AB-</option>
                                                    <option id="O+" value="O+">O+</option>
                                                    <option id="O-" value="O-">O-</option>
                                                    <script>
                                                        window.addEventListener('load', function() {
                                                            var bg = document.getElementById('<?php echo $data[4];?>');
                                                            bg.setAttribute('selected', 'selected');
                                                        }, false);

                                                    </script>
                                                </select>
                                            </div>
                                        </dd>


                                        <dt>
                                        <label for="mobile"><strong class="fa fa-asterisk "></strong> Mobile : </label>
                                    </dt>
                                        <dd>
                                            <div class="form-group">
                                                <div class="input-group has-feedback has-success">
                                                    <div class="input-group-addon">+880</div>

                                                    <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" class="form-control" value="<?php echo $data[5];?>" required>
                                                    <span class="form-control-feedback glyphicon glyphicon-phone"></span>
                                                </div>

                                            </div>
                                        </dd>
                                        <dt>
                                        <label for="email"><strong class="fa fa-asterisk "></strong> Email : </label>
                                    </dt>
                                        <dd data-toggle="tooltip" data-placement="right" title="Insert a valid email">
                                            <div class="form-group has-feedback has-success">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email address" value="<?php echo $data[6];?>" required>
                                                <span class="form-control-feedback glyphicon glyphicon-envelope"></span>
                                            </div>
                                        </dd>


                                        <dt>
                                        <label for="year"><strong class="fa fa-asterisk "></strong> Passing Year : </label>
                                    </dt>
                                        <dd>
                                            <div class="form-group  has-feedback has-success">
                                                <select name="year" class="form-control" required>
                                                    <script>
                                                        var date = new Date();
                                                        var yr = date.getFullYear();
                                                        var str = "";
                                                        for (var year = yr; year >= (yr - 25); year--) {
                                                            str += "<option id=" + year + " value=" + year + ">";
                                                            str += year;
                                                            str += "</option>";
                                                            document.write(str);
                                                            str = "";
                                                        }

                                                    </script>

                                                    <script>
                                                        window.addEventListener('load', function() {
                                                            var bg = document.getElementById('<?php echo $data[8];?>');
                                                            bg.setAttribute('selected', 'selected');
                                                        }, false);

                                                    </script>
                                                </select>
                                            </div>
                                        </dd>

                                        <dt>
                                        <label for="graduation">Graduation From : </label>
                                    </dt>
                                        <dd>
                                            <div class="form-group has-feedback has-success">
                                                <span class="form-control-feedback glyphicon glyphicon-education"></span>
                                                <input type="text" class="form-control" name="graduation" id="graduation" value=" <?php echo $data[9];?>" placeholder="Institute  name you were graduated from or studying...">

                                            </div>
                                        </dd>
                                        <dt>
                                        <label for="job">Current Job : </label>
                                    </dt>
                                        <dd>
                                            <div class="form-group has-feedback has-success">
                                                <input type="text" name="job" id="job" placeholder="Current Job" class="form-control" value="<?php echo $data[10];?>">
                                                <span class="form-control-feedback glyphicon glyphicon-briefcase"></span>
                                            </div>
                                        </dd>


                                        <dd>
                                            <div class="form-group">
                                                <button type="submit" name="update" class="form-control btn btn-success" id="up"><span class="fa fa-paper-plane-o"></span> Update</button>
                                            </div>
                                        </dd>
                                    </dl>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end information edit modal-->


                <!-- start image/avater edit modal-->


                <div class="modal fade" role="dialog" id="picture-<?php echo $data[5];?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Upload Image</h4>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <div class="form-group form-inline">
                                        <input type="file" name="avater" id="avater" placeholder="Browse Image" class="">
                                        <p style="padding: 10px;"></p>
                                        <div id="imageSettings">
                                            <img class="img-responsive img-thumbnail" src="../images/addAvater.png" width="200" height="200" id="preview">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block" name="upload" id="upload"><span class="fa fa-paper-plane-o"></span> Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end image edit modal-->





        </div>


        <!-- end container here-->



        <?php include "../resourses/footer.php";?>
            <script src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <script>
                $(".edit").tooltip();
                //$("#pop").click(function() {
                $('[data-toggle="popover"]').popover();
                //});

            </script>


            <!--preview image script -->
            <script>
                function readURL(input) {

                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#preview').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#avater").change(function() {
                    readURL(this);
                });

            </script>

            <?php
                    
                }
                
            ?>

                <?php
        include "../resourses/edit_info.php";
         if ( isset($_POST['update'])){
               
        
        if(isset($_POST['fname'])){
                $fname = $_POST['fname'];
            }

        if(isset($_POST['lname'])){
                $lname = $_POST['lname'];
            }
        if(isset($_POST['bdate'])){
                $bdate = $_POST['bdate'];
            }
        if(isset($_POST['sex'])){
                $sex = $_POST['sex'];
            }
        if(isset($_POST['blood'])){
                $blood = $_POST['blood'];
            }
        if(isset($_POST['mobile'])){
                $mobile = $_POST['mobile'];
            }

        if(isset($_POST['email'])){
                $email = $_POST['email'];
            }

     
        if(isset($_POST['year'])){
                $year = $_POST['year'];
            }
        if(isset($_POST['graduation'])){
                $uni = $_POST['graduation'];
            }
        if(isset($_POST['job'])){
                $job = $_POST['job'];
            }

             $pass = 'null';
        $update = new edit($fname, $lname, $bdate, $sex, $blood, $mobile,$email, $year, $uni, $job);
            //$signup = new signup('sajeeb','ahamed','12/2/2012','Male','AB+','234','sa@je.eb','321','2009','jnu','st');
           // $signup = new signup();
        
        }
   
    
    
    ?>

                    <?php
         include "../resourses/upload_image.php";
        if( isset($_POST['upload'])){
            $obj = new up;
            
        }
    ?>



</body>

</html>
