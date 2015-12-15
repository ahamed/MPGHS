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

    <link rel="stylesheet" href="../bower_components/css/hover-min.css">
    <link rel="stylesheet" href="style.css">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
    <?php include "../resourses/menu.php"; ?>

        <script type="text/javascript">
            var d = document.getElementById("pref");
            d.className = "active";

        </script>

        <div class="container-fluid">
            <div class="row" id="getFixed">
                <div class="col-sm-6 col-xs-6">
                    <h1 class="">Classes</h1>
                </div>
                <div class="col-sm-6 col-xs-6" style="margin-top: 30px;">

                    <!-- checking nav start here-->

                    <nav class="navbar">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-left class-nav">
                                <li class="active"><a href="#class6">Class 6</a></li>
                                <li class=""><a href="#class7">Class 7</a></li>
                                <li><a href="#class8">Class 8</a></li>
                                <li><a href="#class9">Class 9</a></li>
                                <li><a href="#class10">Class 10</a></li>
                            </ul>
                        </div>


                    </nav>
                    <!-- Checking nav ends here -->



                </div>
            </div>
        </div>


        <div class="container">

            <div class="row row-content">
                <div class="col-sm-8 col-xs-12">

                    <div class="row row-content" id="class6">
                        <div class="col-sm-12 col-xs-12">
                            <ol class="breadcrumb">
                                <li class="active">Classes </li>
                                <li><a href="#class6">Class 6</a></li>
                            </ol>
                            <ul class="nav nav-tabs" role="tablists">
                                <li role="presentation" class="active">
                                    <a href="#class6A" role="tab" data-toggle="tab" id="sixA" aria-controls="sixA">Section Padma</a>
                                </li>
                                <li role="presentation">
                                    <a href="#class6B" data-toggle="tab" aria-contorls="sixB" role="tab">Section Meghna</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane in active" role="tabpanel" id="class6A">
                                    <div class="table-responsive">
                                        <?php 
                            require "../resourses/class.resultTable.inc";
                            require "../resourses/show_childrens.php";
                           // $table = new resultTable;
                        //    $table -> showTable();
                                        $table = new child;
                                        $table -> show("six","A");
                        ?>

                                    </div>
                                </div>


                                <div class="tab-pane fade" role="tabpanel" id="class6B">
                                    <div class="table-responsive">
                                        <?php 
                            
                                        $table = new child;
                                        $table -> show("six","B");
                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end class six -->



                    <p style="padding-top:100px;"></p>
                    <div class="row row-content" id="class7">
                        <div class="col-sm-12 col-xs-12">
                            <ol class="breadcrumb">
                                <li class="active">Classes </li>
                                <li><a href="#class7">Class 7</a></li>
                            </ol>
                            <ul class="nav nav-tabs" role="tablists">
                                <li role="presentation" class="active">
                                    <a href="#class7A" role="tab" data-toggle="tab" id="sevenA" aria-controls="sevenA">Section A</a>
                                </li>
                                <li role="presentation">
                                    <a href="#class7B" data-toggle="tab" aria-contorls="sevenB" role="tab">Section B</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane in active" role="tabpanel" id="class7A">
                                    <div class="table-responsive">
                                        <?php 
                            
                            $table = new child;
                                        $table -> show("seven","A");
                        ?>

                                    </div>
                                </div>


                                <div class="tab-pane fade" role="tabpanel" id="class7B">
                                    <div class="table-responsive">
                                        <?php 
                            
                           $table = new child;
                                        $table -> show("seven","B");
                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end class seven -->


                    <p style="padding-top:100px;"></p>
                    <div class="row row-content" id="class8">
                        <div class="col-sm-12 col-xs-12">
                            <ol class="breadcrumb">
                                <li class="active">Classes </li>
                                <li><a href="#class7">Class 8</a></li>
                            </ol>
                            <ul class="nav nav-tabs" role="tablists">
                                <li role="presentation" class="active">
                                    <a href="#class8A" role="tab" data-toggle="tab" id="sevenA" aria-controls="eightA">Section A</a>
                                </li>
                                <li role="presentation">
                                    <a href="#class8B" data-toggle="tab" aria-contorls="eightB" role="tab">Section B</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane in active" role="tabpanel" id="class8A">
                                    <div class="table-responsive">
                                        <?php 
                            
                            $table = new child;
                                        $table -> show("eight","A");
                        ?>

                                    </div>
                                </div>


                                <div class="tab-pane fade" role="tabpanel" id="class8B">
                                    <div class="table-responsive">
                                        <?php 
                            
                            $table = new child;
                                        $table -> show("eight","B");
                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end class eight -->

                    <p style="padding-top:100px;"></p>
                    <div class="row row-content" id="class9">
                        <div class="col-sm-12 col-xs-12">
                            <ol class="breadcrumb">
                                <li class="active">Classes </li>
                                <li><a href="#class7">Class 9</a></li>
                            </ol>
                            <ul class="nav nav-tabs" role="tablists">
                                <li role="presentation" class="active">
                                    <a href="#class9A" role="tab" data-toggle="tab" id="nineS" aria-controls="nineS">Science</a>
                                </li>
                                <li role="presentation">
                                    <a href="#class9B" data-toggle="tab" aria-contorls="nineA" role="tab">Arts</a>
                                </li>

                                <li role="presentation">
                                    <a href="#class9C" data-toggle="tab" aria-controls="nineC" role="tab">Commerce</a>
                                </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane in active" role="tabpanel" id="class9A">
                                    <div class="table-responsive">
                                        <?php 
                            
                            $table = new child;
                                        $table -> show("nine","science");
                        ?>

                                    </div>
                                </div>


                                <div class="tab-pane fade" role="tabpanel" id="class9B">
                                    <div class="table-responsive">
                                        <?php 
                            
                           $table = new child;
                                        $table -> show("nine","arts");
                        ?>

                                    </div>
                                </div>
                                <div class="tab-pane fade " role="tabpanel" id="class9C">
                                    <div class="table-responsive">
                                        <?php 
                            
                            $table = new child;
                                        $table -> show("nine","commerce");
                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end class nine -->



                    <div class="row row-content" id="class10">
                        <div class="col-sm-12 col-xs-12">
                            <ol class="breadcrumb">
                                <li class="active">Classes </li>
                                <li><a href="#class7">Class 10</a></li>
                            </ol>
                            <ul class="nav nav-tabs" role="tablists">
                                <li role="presentation" class="active">
                                    <a href="#class10A" role="tab" data-toggle="tab" id="tenS" aria-controls="tenS">Science</a>
                                </li>
                                <li role="presentation">
                                    <a href="#class10B" data-toggle="tab" aria-contorls="tenA" role="tab">Arts</a>
                                </li>

                                <li role="presentation">
                                    <a href="#class10C" data-toggle="tab" aria-controls="tenC" role="tab">Commerce</a>
                                </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane in active" role="tabpanel" id="class10A">
                                    <div class="table-responsive">
                                        <?php 
                            
                           $table = new child;
                                        $table -> show("ten","science");
                        ?>

                                    </div>
                                </div>


                                <div class="tab-pane fade" role="tabpanel" id="class10B">
                                    <div class="table-responsive">
                                        <?php 
                            
                           $table = new child;
                                        $table -> show("ten","arts");
                        ?>

                                    </div>
                                </div>
                                <div class="tab-pane fade" role="tabpanel" id="class10C">
                                    <div class="table-responsive">
                                        <?php 
                            
                            $table = new child;
                                        $table -> show("ten","commerce");
                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end class ten -->




                </div>


                <div class="col-sm-4 col-xs-12 right-side" id="fixed-to-top-position">
                    <div class="panel panel-danger">
                        <div class="panel-heading" id="pheading">
                            <h3 class="panel-title">Students info <small> (Click a name to show)</small></h3>
                        </div>
                        <div class="panel-body" id="pbody">
                            <dl class="dl-horizontal">

                            </dl>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- end container -->

        <?php include "../resourses/footer.php";?>

            <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <script type="text/javascript">
                jQuery(function($) {
                    function fixDiv() {
                        var $cache = $('#getFixed');
                        if ($(window).scrollTop() > 0)
                            $cache.css({
                                'position': 'fixed',
                                'top': '30px'
                            });
                        else
                            $cache.css({
                                'position': 'relative',
                                'top': 'auto'
                            });
                    }
                    $(window).scroll(fixDiv);
                    fixDiv();
                });

            </script>

            <script type="text/javascript">
                jQuery(function($) {
                    function fixDiv() {
                        var $cache = $('#fixed-to-top-position');
                        if ($(window).scrollTop() > 50)
                            $cache.css({
                                'position': 'fixed',
                                'top': '120px',
                                'left': '850px'
                            });
                        else
                            $cache.css({
                                'position': 'relative',
                                'top': 'auto',
                                'left': 'auto'
                            });
                    }
                    $(window).scroll(fixDiv);
                    fixDiv();
                });

            </script>


            <script>
                var values = [];
                var i = 0;
                var indicators = ["Roll", "Name", "Father's Name", "Mother's Name", "Gender", "Religion", "Guardian's Mobile", "Class", "Section"];
                //$(".right-side").text(""):
                $("#data tr").click(function() {

                    $(this).find("td").each(function(index) {
                        values[i] = $(this).text();
                        i++;
                    });
                    i = 0;

                    var phead = $("#panel-head");
                    var pbody = $("#pbody");

                    //$(".right-side").text(" ");
                    pbody.text(" ");

                    var adl = $('<dl>', {
                        class: 'dl-horizontal'
                    });





                    for (var x = 0; x < values.length; x++) {
                        //$(".right-side").append(indicators[x] + " : " + values[x] + "<br>");
                        //string += "<dt>" + indicators[x] + "</dt>";
                        //string += "<dd>" + values[x] + "</dd>";
                        adl.append("<dt>" + indicators[x] + " : " + "</dt>");
                        adl.append("<dd>" + values[x] + "</dd>");

                    }
                    /* var divi = $("<div>", {
                        id: 'wrap'
                    }).append(adl);
*/
                    adl.appendTo(pbody);




                });

            </script>


</body>

</html>
