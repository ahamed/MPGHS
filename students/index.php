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
    <link rel="stylesheet" href="../bower_components/css/hover-min.css">



    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body data-spy="scroll" data-target="#myScrollSpy" data-offset="100">
    <?php include "../resourses/menu.php";?>
        <script type="text/javascript">
            var d = document.getElementById("tsc");
            d.className = "active";

        </script>

        <header class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-xs-12 col-sm-8">
                        <h2>Students Panel <small>Mohangonj Pilot Govt. High School</small></h2>

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
            <div class="row row-content">
                <div class="col-xs-12 col-sm-12">
                    <div class="col-sm-12 col-xs-12" id="outer-row">
                        <!-- start inner row for partitioning the main area into two parts-->

                        <!-- start php code from here-->
                        <h1 class="media-title">Students</h1>

                    </div>
                    <!-- end main information point -->


                </div>
                <!-- end the whole left part-->
            </div>
            <!-- end the inner row-->


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
