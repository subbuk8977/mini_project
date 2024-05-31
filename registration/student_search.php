<?php
session_start();
if(!isset($_SESSION['uid'])){
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sem Results </title>

    
    <link href="images/results.png" rel="icon">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
     
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background:black;">

    <div class="main">

        <div class="container" id="search">
            <div class="signup-content">
                <form  id="signup-form" class="signup-form">
                    <h2>Student Result search </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="from" id="from" placeholder="Student Id" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="to" id="to" placeholder="Student Name" required/>
                    </div>
                      <div class="form-group">
                        <input type="date"  name="date" id="date" hidden />
                    </div>
                    <div class="form-group">
                      <a href="#" class="btn btn-success bussearch">Submit</a>
                    </div>
                </form>
            </div>
        </div>
       
<div class="container-fluid" id="result">
    <div class="card">
        <div class="card-header bg-success">
            <h2 class="text-center">Your Result</h2>
        </div>
        <div class="card-body">
           <div class="card-columns">
            <div id="results"></div>
            
              
            
               
           </div>
        </div>
    </div>
</div>
 <div class="container" id="booking">
        <div id="bookingres"></div>
          
        </div>


    </div>

 
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main1.js"></script>
</body>
</html>