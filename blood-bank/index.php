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
        <script type="text/javascript">
            var d = document.getElementById("bb");
            d.className = "active";

        </script>
        <div class="container">
            <div class="row header-title">
                <div class="col-sm-12 col-xs-12">
                    <h1><span class="fa fa-tint fa-3x"></span> <strong>S</strong>earching for <strong>B</strong>lood<strong>?</strong></h1>
                </div>

            </div>
            <div class="row row-content">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="well bl-select">
                        <form action="search-blood.php" method="post" name="myform">
                            <div class="form-group has-error">
                                <select name="blood-grp" class="form-control" id="mySelect">
                                    <option value="" selected>Select a <strong>B</strong>lood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="well">
                        <blockquote>
                            <h4><span class="fa fa-quote-left"> </span><span class="d"> D</span>onate <strong>B</strong>lood. Your <strong>B</strong>lood may be a life. <span class="fa fa-quote-right"> </span></h4>
                            <footer>
                                <cite title="source">Your <strong>B</strong>lood is replaced or recreated every 4 months.</cite>
                            </footer>
                        </blockquote>
                        <blockquote>
                            <h4><span class="fa fa-quote-left"> </span> You don't need to be a doctor to save a life. Just <span class="d">D</span>onate <strong>B</strong>lood <span class="fa fa-quote-right"> </span></h4>
                            <footer>
                                <cite title="source"><strong>B</strong>lood donation is the greatest work in the world.</cite>
                            </footer>

                        </blockquote>
                        <blockquote>
                            <h4><span class="fa fa-quote-left"> </span> A few drops of your <strong>B</strong>lood can help a life to bloom. <span class="fa fa-quote-right"> </span></h4>
                            <footer>
                                <cite title="source"><span class="d">D</span>onate <strong>B</strong>lood for tomorrow.</cite>
                            </footer>

                        </blockquote>


                    </div>

                </div>


            </div>
        </div>


        <?php include "../resourses/footer.php";?>
            <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#mySelect').change(function() {
                        myform.submit();
                    });
                });

            </script>

</body>

</html>
