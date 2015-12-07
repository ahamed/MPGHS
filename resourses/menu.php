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
            <a class="navbar-brand" href="index.php"><img src="../images/logo.png" alt="Mohangonj Pilot Govt. High School" width=100 height=30></a>
        </div>
        <!-- end navbar header-->

        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li id="home"><a href="../home/">Home</a></li>
                <li id="pref"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Preference <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="rar"><a href="#">Rules &amp; Regulations</a></li>
                        <li id="mb"><a href="#">Managing Board</a></li>
                        <li class="divider" role="separator"></li>
                        <li id="lb"><a href="#">Librery</a></li>
                    </ul>

                </li>
                <li class="" id="tsc"><a href="../TSC/"><span class="glyphicon glyphicon-education"></span> Teachers and Students Center</a></li>
                <li class="" id="gas"><a href="#"><span class="glyphicon glyphicon-screenshot"></span> Game and Sports</a></li>
                <li class="" id="bb"><a href="#"><span class="glyphicon glyphicon-tint"></span>Blood Bank</a></li>


            </ul>
            <?php 
                include "../resourses/checkSession.php";
                $cookie = new selectionLogin;
                if(!($cookie -> test())){
                    ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login/" id="login">Are you a formar or current student? Login here</a></li>
                </ul>

                <?php
                }else{
                    ?>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" id="login" class="dropdown-toggle" data-toggle="dropdown" aria-haspop="true" aria-expanden="false" role="button">Hello,  <?php echo $_SESSION['userName'];?> <span class="caret"></span>
                                
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="../resourses/logout.php"><span class="fa fa-sign-out"></span>  Logout</a></li>
                            </ul>
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
