<?php
include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_emp.css">
    <title> Login</title>

</head>

<body>
    <div class="box">
        <div class="container">

            <div class="top">

                <header>Login</header>
            </div>
            <form method="post" action="logIn_action.php">
                <div class="input-field usename-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="input" placeholder="Username" name="txtname" required>
                </div>
                <div class="input-field email-field">
                    <i class="far fa-envelope"></i>
                    <input type="text" class="input" placeholder="Email Address" name="txtemail" required>
                </div>
                <div class="input-field password-field">
                    <i class="fa-solid fa-lock"></i>

                    <input type="Password" class="input" placeholder="Password" name="txtpassword" required>
                </div>

                <div class="input-field">
                  <a>  <input type="submit" class="submit"  href="hr.php" value="Login"></a>
                    
                </div>


            </form>
        </div>
    </div>
</body>

</html>