
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="eTimetable for student">
  <meta name="keywords" content="eTimetable">
  <meta name="author" content="Hisyam">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>eTimetable Register</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Rainyz Custom CSS -->
  <link href="css/style.css" rel="stylesheet">
  <!--Icon -->
  <link rel="icon" href="img/Icon/calendar.png" type="image/png" sizes="16x16">


   <!--Internal CSS -->
   <style>
    .intro-2 {
        background: url("img/kuptm.jpg")no-repeat center center;
        background-size: cover;
    }

    .card {
        background-color: rgba(229, 228, 255, 0.2);
    }

    .md-form label {
        color: #ffffff;
    }

    h6 {
        line-height: 1.7;
    }

    html,
    body,
    header,
    .view {
      height: 100vh;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 700px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view  {
        height: 650px;
      }
    }

    .card {
        margin-top: 30px;
        /*margin-bottom: -45px;*/
    }

    .md-form input[type=text]:focus:not([readonly]),
    .md-form input[type=password]:focus:not([readonly]) {
        border-bottom: 1px solid #00a2ff;
        box-shadow: 0 1px 0 0 #00b7ff;
    }

    .md-form input[type=text]:focus:not([readonly])+label,
    .md-form input[type=password]:focus:not([readonly])+label {
        color: #ffffff;
    }

    .md-form .form-control {
        color: #fff;
    }
</style>
</head>


<body class="creative-lp">

 <!-- PHP Register Script -->
    <?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
            // removes backslashes
      $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
      $username = mysqli_real_escape_string($con,$username); 
      $FullName = stripslashes($_REQUEST['FullName']);
      $FullName = mysqli_real_escape_string($con,$FullName);
      $StudentID = stripslashes($_REQUEST['StudentID']);
      $StudentID = mysqli_real_escape_string($con,$StudentID);  
      $email = stripslashes($_REQUEST['email']);
      $email = mysqli_real_escape_string($con,$email);
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($con,$password);
      $trn_date = date("Y-m-d H:i:s");

      $query = "INSERT into `users` (username, FullName, StudentID, password, email, trn_date)
      VALUES ('$username','$FullName','$StudentID', '".md5($password)."', '$email', '$trn_date')";

            $result = mysqli_query($con,$query);
            if($result){
                echo "<div class='form'>
    <h3>You are registered successfully.</h3>
    <br/>Click here to <a href='login.php'>Login</a></div>";
            }
        }else{
    ?>


   <!--Intro Section-->
   <section class="view intro-2">
    <div class="mask rgba-indigo-light h-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

    <!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #ffffff;">

            <div class="form-row">
                <div class="col">
                    <!-- Username-->
                    <div class="md-form">
                        <input type="text" name="username" id="materialRegisterFormFirstName" class="form-control" required/>
                        <label for="materialRegisterFormFirstName">Username</label>
                    </div>
                </div>
               
            </div>

            <!-- Full Name -->
            <div class="md-form">
                        <input type="text" name="FullName" id="materialRegisterFormFirstName" class="form-control" required/>
                        <label for="materialRegisterFormFirstName">Full Name</label>
            </div>

            <!-- Student ID -->
            <div class="md-form">
                        <input type="text" name="StudentID" id="materialRegisterFormFirstName" class="form-control" required/>
                        <label for="materialRegisterFormFirstName">Student ID</label>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" name="email" id="materialRegisterFormEmail" class="form-control" required/>
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" required/>
                <label for="materialRegisterFormPassword">Password</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-white mb-4">
                    At least 8 characters and 1 digit
                </small>
            </div>

          


            <!-- Sign up button -->
            <button class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
            <hr>

          
        </form>
        <a href="login.php" class="previous text-white">&laquo; Back to login page</a>

        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
                </div>
            </div>
        </div>
    </div>
</section>


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <?php } ?>

</body>


</html>
