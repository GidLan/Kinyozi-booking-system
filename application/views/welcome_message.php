<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="assets/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
<form method="post" action="<?php echo site_url('Welcome/savingdata'); ?>">

<div id="booking" class="section">
	<div class="section-center">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-push-5">
					<div class="booking-cta">
						<h1>Master Shave</h1>
						<p>Book a shave to get to get the best shave and beauty services in town.
						</p>
					</div>
				</div>
				<div class="col-md-4 col-md-pull-7">
					<div class="booking-form">
						<form>
							<div class="form-group">
								<span class="form-label">Name</span>
								<input class="form-control" type="text" name="Name" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<span class="form-label">PhoneNumber</span>
								<input class="form-control" type="number" name="phone_number" placeholder="Enter your phone number">
							</div>


									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" name="check-in" type="date" required>
									</div>


							<div class="row">
									<div class="form-group">

										<span class="select-arrow"></span>
									</div>

							<div class="form-btn">
								<button class="submit-btn">Book A Shave</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

</html>
