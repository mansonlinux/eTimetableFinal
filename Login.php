
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="eTimetable for student">
  <meta name="keywords" content="eTimetable">
  <meta name="author" content="Hisyam">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>eTimetable Hisyam</title>
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

<?php
// Login PHP code

require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: home.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
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

    <!-- Material form login -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Sign in</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
      <!-- Form -->
      <form action="" method="post" name=login class="text-center" style="color: #757575;">
  
        <!-- Username -->
        <div class="md-form">
          <input type="text" name="username" id="materialLoginFormEmail" class="form-control">
          <label for="materialLoginFormEmail">Username</label>
        </div>
  
        <!-- Password -->
        <div class="md-form">
          <input type="password" name="password" id="materialLoginFormPassword" class="form-control">
          <label for="materialLoginFormPassword">Password</label>
        </div>
  
        <div class="d-flex justify-content-around">
          <div>
            
          </div>
          <div>
            
          </div>
        </div>
  
        <!-- Sign in button -->
        <button name="submit" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
  
        <!-- Register -->
        <p class="white-text">Not a member?
          <a href="register.php">Register</a>
        </p>

        <p class="white-text">
          <a class="text-white" href="admintimetable.html">Admin Access</a>
        </p>
  
        
  
      </form>
      <!-- Form -->
  
    </div>
  
  </div>
  <!-- Material form login -->
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
