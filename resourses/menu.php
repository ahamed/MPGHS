<!--start nav bar-->

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- start navbar container-->
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false" data-target="#navbar">
                <span class="sr-only">Toggle Navigation</span>
                <li class="icon-bar"></li>
                <li class="icon-bar"></li>
                <li class="icon-bar"></li>
                <li class="icon-bar"></li>
            </button>
            <a class="navbar-brand" href="index.php"><img id="logo" src="../images/logo.png" alt="Mohangonj Pilot Govt. High School" width=100 height=30></a>
        </div>
        <!-- end navbar header-->

        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li id="home"><a href="../home/"><i class="fa fa-home"></i> Home</a></li>
                <li id="pref"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fa fa-bars"></i> Preference <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="classes"><a href="../classes/">Classes</a></li>
                        <li id="rar"><a href="#">Rules &amp; Regulations</a></li>
                        <li id="mb"><a href="#">Managing Board</a></li>
                        <li class="divider" role="separator"></li>
                        <li id="lb"><a href="#">Librery</a></li>
                    </ul>

                </li>
                <li data-toggle="tooltip" data-placement="top" title="Teachers and Students Center" id="tsc"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href=""><span class="fa fa-university"></span> TSC <i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../teachers/"><i class="fa fa-tree"></i> Teachers</a>
                        </li>
                        <li><a href="../students/"><i class="fa fa-leaf"></i> Students</a></li>

                    </ul>

                </li>
                <li id="game"><a href="../game-and-sport/"><span class="glyphicon glyphicon-screenshot"></span> Game and Sports</a></li>
                <li class="" id="bb"><a id="blood" href="../blood-bank/"><span class="glyphicon glyphicon-tint"></span>Blood Bank</a></li>


            </ul>
            <?php
            session_start();
                include "../resourses/checkSession.php";
                $cookie = new selectionLogin;
                
                if(!$cookie -> check_session() && !$cookie -> check_cookie()){
                    ?>
                <ul class="nav navbar-nav navbar-right" id="right-ul">
                    <li data-toggle="tooltip" data-target="focus" data-placement="bottom" title="If you are a formar student of MPGHS then login here." id="lin"><a href="../login/" id="login"><i class="fa fa-sign-in"></i> Login here</a></li>
                </ul>

                <?php
                }else{
                    
                    if( $cookie -> check_cookie()){
                        $name = $_COOKIE['user_name'];
                    }
                    
                    else if( $cookie -> check_session()){
                        $name = $_SESSION['userName'];
                    }
                    
                    ?>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" id="login" class="dropdown-toggle" data-toggle="dropdown" aria-haspop="true" aria-expanden="false" role="button"><i class="fa fa-user"></i> HELLO,  <?php echo strtoupper($name);?> <span class="caret"></span>
                                
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="../profile/"><span class="fa fa-cogs"></span>  Profile</a></li>
                                <li><a href="../notification/"><span class="fa fa-bell"></span>  Notificationa</a></li>
                                <li><a href="../resourses/logout.php"><span class="fa fa-sign-out"></span>  Logout</a></li>

                            </ul>
                        </li>
                        <li id="show" style="display: none;">
                            <a href="../notification/" type="button" id="notify"><span class="label label-success"><?php echo $_SESSION['notify'];?></span></a>
                        </li>
                    </ul>

                    <?php
                    
                }
            ?>


        </div>
        <!-- end div for id navbar-->
    </div>
    <!-- end navbar container-->
</nav>
