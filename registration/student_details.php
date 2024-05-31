<?php 
include('../action.php');
 if(!isset($_SESSION['aname'])){
   header('location:admin.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semester Result Data</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background:black;">

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" onsubmit="isValidate()">
                    <h2>Student details </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="from" id="iname" placeholder="Student Id" required/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="to" id="name" placeholder="Student Name" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="bname" id="name" placeholder="WT" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="bno" id="name" placeholder="DSP" required/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="time" id="name" placeholder="COA" required/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="sno" id="name" placeholder="OR" required/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="fare" id="name" placeholder="CD" required/>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="form-input" name="rad" id="name" value=Male />Male
                         <input type="radio" class="form-input" name="rad" id="name" value="Female" />Female
                    </div>
                    <div class="form-group">
                        <input type="submit" name="bus" id="submit" class="form-submit submit" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script>
        function isValidate()
        {
            let uname=document.getElementById('iname').value;

            let pattern = /^r19\d{4}$/g;

            if(pattern.test(uname)==false)
            {
                alert("Please Enter Valid UserName");
            }
        }
    </script>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>