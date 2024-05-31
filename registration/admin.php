<?php 
include('../action.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In </title>

    <link href="images/admin.png" rel="icon">
    <link href="images/admin.png" rel="apple-touch-icon">

    
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background:black;">

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form">
                    <h2>Admin </h2>
                     <div class="form-group">
                        <input type="text" class="form-input" name="uname" id="name" placeholder="Username" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="psw" id="password" placeholder="Password" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="alogin" id="submit" class="form-submit submit" value="Log In"/>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="js/main.js"></script>
</body>
</html>