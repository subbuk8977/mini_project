<?php
session_start();
if(!isset($_SESSION['uid'])){
  header('location:registration/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Exam Result</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/user.png" rel="icon">
  <link href="img/user.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet"> 
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  
</head>

<body id="body">
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:chinnodu9087@gmail.com"><?php echo $_SESSION['uname'];?>@rguktrkv.ac.in</a>
        <i class="fa fa-phone"></i> +91 8003649945
      </div>
    </div>
  </section>

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Sem<span>Result</span></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#"><?php echo $_SESSION['uname'];?></a></li>
          <li><a href="registration/logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="intro">

    <div class="intro-content">
      <h2>Lighten <span>your</span><br>DREAMS ! &#9889;</h2>
      <div>
        <a href="registration/student_search.php" class="btn-get-started scrollto">Check Results</a>
      </div>
    </div>

  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
