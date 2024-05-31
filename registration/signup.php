<?php 
include('../action.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <link href="images/login.png" rel="icon">
    <link href="images/login.png" rel="apple-touch-icon">
    
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background:black;">

    <div class="main" >

        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" onsubmit="isValidate()">
                    <h2> Sign Up </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="nname" placeholder="Your Name"/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="uname" id="name" placeholder="Username" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="age" id="age" placeholder="Age"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="pno" id="email" placeholder="Phone No." required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="aidno" id="email" placeholder="Adhar No."/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="email id" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="psw" id="password" placeholder="Password" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="signup" id="submit" class="form-submit submit" value="Sign up"/>
                        <a href="login.php" class="submit-link submit">Log In</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    
    <script>
        function isValidate()
        {
            let uname=document.getElementById('name').value;

            let pattern = /^r19\d{4}$/g;

            if(pattern.test(uname)==false)
            {
                alert("UserName should be valid");  
            }

            let psw=document.getElementById('password').value;

            let pattern1 = /^19\d{8}$/g;

            if(pattern1.test(psw)==false)
            {
                alert("Password should be as Hall-Ticket No..");  
            }
        }
    </script>
    <script src="js/main.js"></script>
</body>
</html>