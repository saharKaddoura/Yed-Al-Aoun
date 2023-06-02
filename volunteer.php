<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'volunteer') {
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
    <link rel="stylesheet" type="text/css" href="CSS/style1.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Page</title>
</head>

<body>
    <!-- Navigation bar -->
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
            <div class="find-btn dropdown">
                <a class="find-more btn btn-secondary" href="logout.php" role="button">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Volunteer Information -->
    <div class="container">
        <h1 class="mt-5">Welcome,
            <?php echo $_SESSION['user']; ?>
        </h1>
        <p class="lead">Thank you for volunteering with us!</p>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Upcoming Events</h5>
                <ul class="list-group">
                    <li class="list-group-item">Event 1 - Date: <span class=" event-span font-weight-bold">June 10, 2023</span></li>
                    <li class="list-group-item">Event 2 - Date: <span class=" event-span font-weight-bold">June 15, 2023</span></li>
                    <li class="list-group-item">Event 3 - Date: <span class="event-span font-weight-bold">June 20, 2023</span></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Volunteer Resources</h5>
                <p class="card-text">Here are some resources to help you in your volunteering activities:</p>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Volunteer Handbook</a></li>
                    <li class="list-group-item"><a href="#">Training Materials</a></li>
                    <li class="list-group-item"><a href="#">Volunteer Handbook</a></li>
                    <li class="list-group-item"><a href="#">Training Materials</a></li>
                    <li class="list-group-item"><a href="#">Volunteer Policies</a></li>
                    <li class="list-group-item"><a href="#">Volunteer FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>