<?php
include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style_emp.css">
    <link rel="stylesheet" type="text/css" href="CSS/style1.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Thank You</title>
</head>

<body>


    <!-- this page i will do it later, it will include the scheduale of the employee, the updates projectd and activities, meetings calender-->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <img src="images/LOGO.jpg" class="rounded-pill" style="width:50px;" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="BeAVolunteer.php" target="_blank">Be A Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php" target="_blank">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="con">
        <div class="thank-you-card">
            <h2>Thank You!</h2>
            <p>Your donation has been submitted successfully.</p>
            <a href="start.php" class="btn btn-primary">Back to Homepage</a>
        </div>
    </div>

</body>

</html>
<style>
    .thank-you-card {
        max-width: 400px;
        padding: 30px;
        text-align: center;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .thank-you-card h2 {
        margin-top: 0;
    }
</style>