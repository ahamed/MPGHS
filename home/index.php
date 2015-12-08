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

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="../bower_components/jsImgSlider/themes/2/js-image-slider.js"></script>
    <script src="../bower_components/jsImgSlider/flux.min.js"></script>
</head>

<body data-spy="scroll" data-target="#myScrollSpy" data-offset="100">

    <div class="sk-cube-grid_main">
        <?php include "resourses/loading.php";?>
    </div>


    <!-- include the menu bar-->
    <?php include "../resourses/menu.php"; ?>

        <script type="text/javascript">
            var d = document.getElementById("home");
            d.className = "active";

        </script>

        <?php include "../resourses/carousel.php";?>


            <hr>
            <!-- start container-->
            <div class="container">

                <!-- start very outer row-->
                <div class="row row-content">
                    <div class="col-xs-12 col-sm-10" id="outer-row">
                        <!-- start first inner  row-->
                        <div class="row row-content" id="history">
                            <div class="col-xs-12 col-sm-12">
                                <div class="media">
                                    <div class="media media-left media-middle">

                                    </div>
                                    <div class="media-body">
                                        <h2 class="media-heading">History</h2>
                                        <p style="padding: 5px;"></p>
                                        <p style="margin-left: 20px;">The university has a history that started in 1858 when Dhaka Brahma School was founded in 1858 by Dinanath Sen, Prabhaticharan Roy, Anathbandhu Mallik and Brajasundar Kaitra. The name Jagannath school was given by Kishorilal Chowdhury, the Zamindar of Baliati in Manikganj, who took over the school in 1872 and renamed it after his father. In 1884, it was raised to a second grade college. Law was one of the first courses introduced. A common management committee administered the school and college until 1887, when the school section was separated to form the independent Kishore Jubilee School. It is now known as K L Jubilee School. The administration of the college was transferred to a board of trustees in 1907. In the following year, it became a first grade college. The college started with 48 students and in five years, the roll raised to 396. In 1910, Raja Manmath Roy Chowdhury, the zamindar of Santosh, Tangail, affiliated the Pramath-Manmath College of Tangail with Jagannath College. With the establishment of University of Dhaka in 1921, it stopped admission to degree courses and was renamed Jagannath Intermediate College. This status was changed after 28 years in 1949, when it reopened degree classes. The college was taken over by the government in 1968. Jagannath College opened honours and masters programmes in 1975. That year the government once again took over the college and upgraded it into a postgraduate college. In 1982, the college closed its programmes at intermediate level. The college introduced evening shifts in 1992. It was transformed into Jagannath University in 2005 by passing a bill named Jagannath University Act-2005 in the national parliament.[3]</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- end frist inner row history-->


                        <!-- start of nav-tab of table and graph-->
                        <div class="row row-content" id="achivements">

                            <div class="col-xs-12 col-sm-12">
                                <h1 class="media-heading media-object">Annual Statistics</h1>
                                <p style="padding: 5px"></p>
                                <ul class="nav nav-tabs" role="tablists">
                                    <li role="presentation" class="active">
                                        <a href="#graph" role="tab" data-toggle="tab" id="logGraph" aria-controls="graph">
                                            <i class="fa fa-line-chart"></i> Result State Graph
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#table" data-toggle="tab" aria-contorls="table" role="tab">
                                            <i class="icon icon-table"></i> Result State Table
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content tab-area">
                                    <div class="tab-pane fade " role="tabpanel" id="table">
                                        <div class="media">
                                            <div class="media-right media-middle">

                                            </div>
                                            <div class="table-responsive">
                                                <?php 
                                                    require "../resourses/class.resultTable.inc";
                                                    $table = new resultTable;
                                                    $table -> showTable();
                                                ?>



                                            </div>
                                            <!-- end table responsive class-->

                                        </div>
                                    </div>
                                    <div class="tab-pane  in active" role="tabpanel" id="graph">

                                        <!-- start of graph row-->
                                        <div class="row row-content">
                                            <div class="col-xs-12 col-sm-9">
                                                <canvas id="resultGraph" height="200px" style="width: 100%;"></canvas>
                                            </div>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="media" style="padding: 20px;">
                                                    <div class="media media-left media-middle">
                                                        <div class="media-object indicator-color1"></div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-headding">Pass %</h4>

                                                    </div>
                                                    <br>
                                                    <div class="media media-left media-middle">
                                                        <div class="media-object indicator-color2"></div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-headding">A+</h4>
                                                    </div>
                                                    <br>
                                                    <div class="media media-left media-middle">
                                                        <div class="media-object indicator-color3"></div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-headding">Golden A+</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end graph row-->


                                    </div>
                                </div>
                                <!-- end tab-contents div-->


                            </div>
                            <!-- end col 12-->

                        </div>
                        <!-- end of nav tab of table and graph row-->



                        <div class="row row-content" id="uniform">

                            <div class="col-sm-12 col-xs-12">
                                <div class="media">
                                    <div class="media media-left media-middle">

                                    </div>
                                    <div class="media-body">
                                        <h1 class="media-heading">Uniform</h1>
                                        <div class="row row-content">
                                            <div class="col-sm-6 col-xs-12 boys">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="../images/boys.jpeg" alt="boys uniform" class="img-responsive img-thumbnail media-object" width="200" height="400">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><i class="icon icon-male"></i> Boys</h4>
                                                        <ul class="uniform-ul" style="list-style-type:none;">
                                                            <li><span class="glyphicon glyphicon-record"></span> White Shirt</li>
                                                            <li><span class="glyphicon glyphicon-record"></span> Yellow Pant</li>
                                                            <li><span class="glyphicon glyphicon-record"></span> White Cads</li>
                                                        </ul>
                                                    </div>
                                                    <!-- end boys uniform media body-->
                                                </div>
                                            </div>
                                            <!-- end boys uniform part-->

                                            <div class="col-sm-6 col-xs-12 girls">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="../images/girls.jpg" alt="girls uniform" class="img-responsive img-thumbnail media-object" width="200" height="400">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><i class="icon icon-female"></i> Girls</h4>
                                                        <ul style="list-style-type:none" class="uniform-ul">
                                                            <li><span class="glyphicon glyphicon-record"></span> Green Frock</li>
                                                            <li><span class="glyphicon glyphicon-record"></span> white Pajama</li>
                                                            <li><span class="glyphicon glyphicon-record"></span> white Orna</li>
                                                            <li><span class="glyphicon glyphicon-record"></span> white Belt</li>
                                                            <li><span class="glyphicon glyphicon-record"></span> White Cads</li>
                                                        </ul>
                                                    </div>
                                                    <!-- end girls uniform media body-->
                                                </div>
                                            </div>
                                            <!-- end girls uniform part-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end col-sm-12 for uniform-->


                        </div>
                        <!-- end uniform row-->

                        <!-- start location div-->

                        <div class="row row-content" id="location">
                            <h1 class="media-heading">Address and Location</h1>

                            <div class="col-sm-3 col-xs-12 col-sm-offset-1" style="padding: 20px;">

                                <div class="media">
                                    <div class="media-body">
                                        <address>
                                      Station road<br>
                                      Mohangonj Upozilla, Mohangonj<br>
                                      Netrakona, Bangladesh<br>
                                      <i class="fa fa-phone"></i>: +852 1234 5678<br>
                                      <i class="fa fa-fax"></i>: +852 8765 4321<br>
                                      <i class="fa fa-envelope"></i>: 
                                        <a href="mailto:mpghs@scl.gov">mpghs@scl.gov</a>
                                   </address>
                                    </div>
                                </div>

                            </div>
                            <!-- end address -->
                            <div class="col-sm-8 col-xs-12">
                                <div id="map-container">

                                </div>
                            </div>
                            <!-- end location map-->
                        </div>
                        <!-- end row of location-->



                    </div>
                    <!-- end outer col-sm-8-->




                    <div class="col-xs-2 col-sm-2">

                        <nav class="col-sm-2 hidden-xs" id="myScrollSpy">
                            <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="400">
                                <li><a href="#history">History</a></li>
                                <li><a href="#achivements">Annual Report</a></li>
                                <li><a href="#uniform">Uniform</a></li>
                                <li><a href="#location">Location</a></li>

                            </ul>
                        </nav>


                    </div>
                    <!-- end right side panel-->
                </div>
                <!-- end very outer row-->

            </div>
            <!--end main container-->
            <?php include "../resourses/footer.php";?>



                <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
                <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                <script type="text/javascript" src="../bower_components/jquery/dist/chart.min.js"></script>
                <script type="text/javascript" src="../js/passingGraph.js"></script>
                <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>



                <script>
                    function initialize() {

                        var myLatLng = {
                            lat: 24.872218,
                            lng: 90.973143
                        };

                        var mapProp = {
                            center: new google.maps.LatLng(24.872218, 90.973143),
                            zoom: 18,
                            mapTypeId: google.maps.MapTypeId.SATELLITE,
                            scrollwheel: false,

                        };
                        var marker = new google.maps.Marker({
                            map: mapProp,
                            position: myLatLng,
                            title: 'Mohangonj Pilot Govt high School'
                        });


                        var map = new google.maps.Map(document.getElementById("map-container"), mapProp);
                    }
                    google.maps.event.addDomListener(window, 'load', initialize);

                </script>

                <script type="text/javascript">
                    $(window).load(function() {
                        $(".sk-cube-grid_main").fadeOut("slow");
                    });
                    $('[data-toggle="popover"]').popover();

                </script>

</body>






</html>
