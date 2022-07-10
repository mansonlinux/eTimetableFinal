<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTimetable</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Rainyz Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!--Icon -->
    <link rel="icon" href="img/Icon/calendar.png" type="image/png" sizes="16x16">
</head>

<body>

        <?php
        require('db.php');
        //include auth.php file on all secure pages
        include("auth.php");
        ?>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="#" target="_blank">
                    <strong class="blue-text">eTimetable</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                   <!-- Left -->
                   <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="home.php"><i class="fas fa-home"></i> Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="about.html" target="_blank"><i class="far fa-question-circle"></i> About</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="logout.php"><i class="fas fa-sign-out-alt"></i>  Logout</a>
                      </li>
                </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">


                    <li class="nav-item">
                    <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
                    </li>

                        <li class="nav-item">
                            <a href="https://www.instagram.com/mansonlinux/" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/mansonlinux" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <strong>eTimetable by Hisyam 2019</strong>
                    </h1>
                    <p>
                        <strong>Best Responsive Webview eTimetable & Mobile-First</strong>
                    </p>
                    <p class="mb-4">
                        <strong>The most comprehensive eTimetable. Coded with Love </strong>
                    </p>
                    <a target="_blank" href="studentTimetable.html" class="btn btn-outline-white btn-lg"> Click here to view your time table!
                        <i class="fas fa-graduation-cap ml-2"></i>
                    </a>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            <hr class="my-5">

            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                   <!-- No content -->


                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                    <!-- No content -->

                    </div>
                    <!--Grid column-->

                
                </div>
                <!--Grid row-->
                    
                </div>
                <!--Grid row-->

            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.instagram.com/mansonlinux/" target="_blank">
                <i class="fab fa-instagram mr-3"></i>
            </a>

            <a href="https://twitter.com/mansonlinux" target="_blank">
                <i class="fab fa-twitter mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2019 Copyright:
            <a href="#" target="_blank"> Hisyam.Dev </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>
