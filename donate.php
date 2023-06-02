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


	<title>Donate</title>
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
					<li class="nav-item">
						<a class="nav-link" href="index.html" >Home</a>
					</li>
				</ul>
			</div>
			<div class="find-btn dropdown">
				<a class="find-more btn btn-secondary" href="logout.php" role="button">Logout</a>
			</div>
		</div>
	</nav>



	<center>
		<h1 color="blue"><b>Donation</b>
			<h1>
	</center>
	<div>
		<div>
			<center>
				<h6>YOU WILL HELP ALOT OF PEOPLE JUST BY DONATING ANYTHING </h6>
			</center>
			<form class="volunteer" action="Donate_action.php" method="post" enctype="multipart/form-data">
				<header>
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<h3>BILLING ADDRESS</h3>
								<div class="mb-3">
									<label for="fullname" class="form-label">Full name</label>
									<input type="text" name="fullname" id="fullname" class="form-control"
										placeholder="Enter name" required>
								</div>
								<div class="mb-3">
									<label for="email" class="form-label">Email</label>
									<input type="email" name="email" id="email" class="form-control"
										placeholder="Enter email" required>
								</div>
								<div class="mb-3">
									<label for="address" class="form-label">Address</label>
									<input type="text" name="address" id="address" class="form-control"
										placeholder="Enter address" required>
								</div>
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="city" class="form-label">City</label>
										<input type="text" name="city" id="city" class="form-control"
											placeholder="Enter City" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="state" class="form-label">State</label>
										<select name="state" id="state" class="form-select" required>
											<option value="">Choose State..</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Haryana">Haryana</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h3>PAYMENT</h3>
								<div class="mb-3">
									<p>Accepted Card</p>
									<img src="images/card1.png" width="100" alt="Card 1">
									<img src="images/card2.png" width="50" alt="Card 2">
								</div>
								<div class="mb-3">
									<label for="cardnumber" class="form-label">Credit card number</label>
									<input type="text" name="cardnumber" id="cardnumber" class="form-control"
										placeholder="Enter card number" required>
								</div>
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="expmonth" class="form-label">Exp month</label>
										<input type="text" name="expmonth" id="expmonth" class="form-control"
											placeholder="Enter Month" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="expyear" class="form-label">Exp year</label>
										<select name="expyear" id="expyear" class="form-select" required>
											<option value="">Choose Year..</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
										</select>
									</div>
								</div>
								<div class="mb-3">
									<label for="cvv" class="form-label">CVV</label>
									<input type="number" name="cvv" id="cvv" class="form-control" placeholder="CVV" required>
								</div>
								<input type="submit" class="btn btn-primary" value="Proceed to Checkout">
							</div>
						</div>
					</div>
				</header>
			</form>

</body>

</html>