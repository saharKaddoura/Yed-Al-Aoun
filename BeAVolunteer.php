<?php
include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/style1.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <title>Be A Volunteer</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <img src="images/LOGO.jpg" class="rounded-pill" style="width:50px;" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">

                    
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php" target="_blank">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" class="log" target="_blank">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html" target="_blank">Home</a>
                    </li>
                </ul>
            </div>

        </div>
        </div>
    </nav>


    <h1 class="bb vol-title"><b>Be A Volunteer</b>
        <h1>
            <div>
            <span class="vol-span">We are very glad that you will be a part of our team. Let's go</span>

                <div class="vol-con">
                    <form class="volunteer" action="BeAVolunteer_action.php" method="post"
                        enctype="multipart/form-data">

                        <input type="name" class="vol-input" placeholder="Enter Your name" name="urname">
                        <input type="email" class="vol-input" placeholder="E-mail" name="uremail">

                        <input type="phone" class="vol-input" placeholder="phone number" name="urphone" required>
                        <input type="name" class="vol-input" placeholder="Address" name="uraddress" required>
                        <input type="name" class="vol-input" placeholder="Your major" name="urmajor" required>
                        <input type="name" class="vol-input" placeholder="Nationality" name="urnati" required>

                        <input type="date" class="vol-input" name="urage" required>

                        <input type="file" class="vol-input file-input" name="imagefile">
                        <span class="cv-span">please attach your CV</span>
                        <input class="btn vol-submit btn-primary" type="submit" value="submit">
                    </form>




                </div>

            </div>






</body>

</html>