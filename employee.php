<?php

session_start();
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'employee') {
    header("location: login.php");
    exit();
}


?>
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
    <title>Employee</title>
</head>

<body>


    <!-- this page i will do it later, it will include the scheduale of the employee, the updates projectd and activities, meetings calender-->
    <div>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <img src="images/LOGO.jpg" class="rounded-pill" style="width:50px;" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
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
                <div class="find-btn dropdown">
                    <a class="find-more btn btn-secondary " href="logout.php" role="button">Logout</a>
                </div>
            </div>
        </nav>
      
        <h1 class="bb"><b>Scheduale</b>
        
        </h1>
        <?php

echo "you are logged in as : " . $_SESSION['user'] ?>
    </div>
    <div class="container">
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Event</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>09:00 AM</td>
                    <td>Meeting</td>
                </tr>
                <tr>
                    <td>10:00 AM</td>
                    <td>Workshop</td>
                </tr>
                <tr>
                    <td>11:00 AM</td>
                    <td>Lunch</td>
                </tr>
                <tr>
                    <td>01:00 PM</td>
                    <td>Presentation</td>
                </tr>
                <tr>
                    <td>03:00 PM</td>
                    <td>Coffee Break</td>
                </tr>
                <tr>
                    <td>04:00 PM</td>
                    <td>Networking</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>