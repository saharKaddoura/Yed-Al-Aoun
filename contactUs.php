<?php
include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style1.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>
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
                        <a class="nav-link" href="BeAVolunteer.php" target="_blank">Be A Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php" target="_blank">About Us</a>
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

    <div>


        <h1 class="bb">Contact Us<h1>
                <h2 class="text-center contact-title">We're Happy To Hear From You</h2>
                <div class="container">
                    <div class="whole-con">
                        <div class="col-6 contact-con">
                            <div class="infoo"><i class="fa-solid fa-phone"> </i> + (961)70 736 883</div>
                            <div class="infoo"><i class="fa-solid fa-location-pin"></i> Lebanon, Saida, Ein El-Helwe
                                camp
                            </div>
                            <div class="infoo"> <i class="fa-solid fa-envelope"> </i><a
                                    href="https://mail.google.com/">yedaloun@gmail.com</a></div>
                        </div>

                        <div class="col-6 contact-form">



                            <form class="contactus" action="contactUs_action.php" method="post" onsubmit="showPopup();">

                                <input class="form-control mb-3 border-top-0 " type="text" placeholder="Enter Your Name"
                                    name="txtnamee" required>

                                <input class="form-control mb-3 border-top-0 " type="email"
                                    placeholder="Enter Your Email" name="txtemaill" required>
                                <input class="form-control mb-3 border-top-0" type="phone"
                                    placeholder="Enter Your phone number" name="txtphone" required>

                                <textarea class="form-control mb-3 border-top-0" rows="5"
                                    placeholder="Write Your Comment" name="txtcomment" required></textarea>
                                <input class="btn btn-primary submit-cont" type="submit" value="submit"> <input
                                    class="btn btn-primary reset-cont" type="reset" value="reset">


                            </form>
                            <div>

                            </div>
                        </div>









                    </div>
                    <p class="font-weight-light contact-thank"> THANKS FOR CONTACTING US </p>

                </div>




</body>

</html>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                Sent!!.

            </div>
        </div>
    </div>
</div>

<script>
    function showPopup() {
        setTimeout(function () {
            $('#myModal').modal('show'); // Show the modal programmatically
        }, 0);
    }
</script>