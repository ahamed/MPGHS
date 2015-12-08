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
            <div class="row row-content">
                <div class="col-sm-8 col-xs-12 col-sm-offset-2">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1 class="panel-title"><strong>Sign Up</strong> <small style="font-family: 'exo2';font-size:15px;"> for formar students</small></h1>
                        </div>
                        <div class="panel-body">

                            <form class="" action="#" method="POST">
                                <dl class="dl-horizontal">
                                    <dt>
                                        <label for="fname" class="control-label"><span class="fa fa-asterisk "></span> Name : </label>
                                    </dt>
                                    <dd>
                                        <div class="form-group form-inline has-feedback has-success">
                                            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required>
                                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </dd>
                                    <dt>
                                        <label for="bdate"><strong class="fa fa-asterisk "></strong> Birth date : </label>
                                    </dt>
                                    <dd>
                                        <div class="form-group form-inline has-feedback has-success">
                                            <div class="input-group ">
                                                <input type="date" class="form-control" name="bdate" id="bdate" placeholder="Birth Date" required>
                                                <div class="input-group-addon" id="ageToShown"></div>
                                            </div>

                                        </div>
                                    </dd>
                                    <dt>
                                        <label for="gender" class="control-label"><strong class="fa fa-asterisk "></strong> Sex : </label>
                                    </dt>
                                    <dd>
                                        <div class="form-group has-feedback has-success">
                                            <select name="gender" id="gender" class="form-control has-success" required>
                                                <option class="has-success">&#xf183; Male</option>
                                                <option>&#xf182; Female</option>
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

                                                <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" class="form-control" required>
                                                <span class="form-control-feedback glyphicon glyphicon-phone"></span>
                                            </div>

                                        </div>
                                    </dd>
                                    <dt>
                                        <label for="email"><strong class="fa fa-asterisk "></strong> Email : </label>
                                    </dt>
                                    <dd>
                                        <div class="form-group has-feedback has-success">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email address" required>
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
                                                        str += "<option>";
                                                        str += year;
                                                        str += "</option>";
                                                        document.write(str);
                                                        str = "";
                                                    }

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
                                            <input type="text" class="form-control" name="graduation" id="graduation" placeholder="Institute name you were graduated from or studying...">

                                        </div>
                                    </dd>
                                    <dt>
                                        <label for="job">Current Job : </label>
                                    </dt>
                                    <dd>
                                        <div class="form-group has-feedback has-success">
                                            <input type="text" name="job" id="job" placeholder="Current Job" class="form-control">
                                            <span class="form-control-feedback glyphicon glyphicon-briefcase"></span>
                                        </div>
                                    </dd>


                                    <dd>
                                        <div class="form-group">
                                            <button type="button" name="submit" class="form-control btn btn-success" id="submit"><span class="fa fa-paper-plane"></span> Create the account</button>
                                        </div>
                                    </dd>
                                </dl>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end the outer row-->
        </div>
        <!-- end container class -->
        <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <?php include "../resourses/footer.php";?>
            <script>
                $(document).ready(function() {
                    $("#bdate").change(function() {
                        var age = 0;
                        var currentDate = new Date();
                        var birthOfDate = new Date($(this).val());
                        //var getYear = date.getFullYear();
                        //var getCurrentYear = currentDate.getFullYear();
                        var age = Math.floor((currentDate - birthOfDate) / (365.25 * 24 * 60 * 60 * 1000));
                        $("#ageToShown").text(age + " Years Old");

                    });
                });

            </script>


</body>

</html>
