<?php
	$string = file_get_contents("trading/aws.json");
	$aws = json_decode($string, true);

	$bucketName = $aws['bucketName'];
	$IAM_KEY = $aws['IAM_KEY'];
	$IAM_SECRET =  $aws['IAM_SECRET'];
	$region = $aws['region'];


?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Arcadia Finance - Config Page</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">

		<!-- Template CSS Files  -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="js/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">

		

	</head>
	<body>
	<!-- Top Bar Starts -->
		<div class="top-bar">
		<!-- Nested Container Starts -->
			<div class="container clearfix text-xs-center text-sm-center text-md-left pl-sm-0 pr-sm-0">
				<ul class="list-unstyled list-inline float-md-left mb-0 animation">
					<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
				</ul>
				<p class="float-md-right mb-0 text-xs-center text-sm-center text-md-right text-weight-light">
					Welcome to Arcadia Finance website, we have expertise in managing your finances!!!
				</p>
			</div>
		<!-- Nested Container Ends -->
		</div>
	<!-- Top Bar Ends -->
	<!-- Header Starts -->
		<header class="main-header">
		<!-- Nested Container Starts -->
			<div class="container text-xs-center pl-sm-0 pr-sm-0">
			<!-- Nested Row Starts -->
				<div class="row">
				<!-- Logo Starts -->
					<div class="col-lg-3 col-md-4 col-sm-12 text-xs-center text-sm-center text-md-left">
						<a href="index.html"><img src="images/logo0.png" alt="Fin Adviser" class="img-fluid img-center-xs logo"></a>
					</div>
				<!-- Logo Ends -->
				<!-- Opening Hours Starts -->
					<div class="col-md-4 col-sm-12 offset-lg-1 d-xs-none d-sm-none d-md-block">
						<div class="clearfix">
							<i class="fa fa-clock-o float-md-left rounded-circle"></i>
							<h6 class="text-spl-color text-weight-medium">Opening Hours</h6>
							<p class="text-weight-light"><em>Mon–Fri: 9am–6pm, Sun: 10am–1pm</em></p>
						</div>
					</div>
				<!-- Opening Hours Ends -->
				<!-- Contact Number Starts -->
					<div class="col-lg-3 col-md-4 col-sm-12 d-xs-none d-sm-none d-md-block">
						<div class="clearfix">
							<i class="fa fa-phone float-md-left rounded-circle"></i>
							<h6 class="text-spl-color text-weight-medium">Contact Number</h6>
							<p class="text-weight-light"><em>888–123–2323, 555–123–2323</em></p>
						</div>
					</div>
				<!-- Contact Number Ends -->
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</header>
	<!-- Header Ends -->
	<!-- Main Menu Starts -->
		<nav id="nav" class="main-menu navbar navbar-expand-md rounded-0">
		<!-- Nested Container Starts -->
			<div class="container pl-sm-0 pr-sm-0">
			<!-- Navbar Toggler Starts -->
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".navbar-cat-collapse" aria-controls=".navbar-cat-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa fa-bars"></span>
				</button>
			<!-- Navbar Toggler Ends -->
			<!-- Navbar Cat collapse Starts -->
				<div class="collapse navbar-collapse navbar-cat-collapse animation">
				<!-- Nav Links Starts -->
					<ul class="nav navbar-nav text-weight-bold">
						<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
						<li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
						<li class="nav-item active"><a href="contact.html" class="nav-link">Contact Us</a></li>
					</ul>
				<!-- Nav Links Ends -->
				<!-- Search Form Starts -->					
					<div class="form-inline ml-auto d-xs-none d-sm-none d-md-block" _lpchecked="1">
						  <a href="trading/login.php" class="nav-link btn btn-1 animation text-weight-medium" style="background-color: #007cb5; color: white; text-align: center; padding: 5px 15px; float: right; ">Login</a>
					</div>
				<!-- Search Form Ends -->
				</div>
			<!-- Navbar Cat collapse Ends -->
			</div>
		<!-- Nested Container Ends -->
		</nav>
	<!-- Main Menu Ends -->
	<!-- Main Banner Starts -->
		<section class="main-banner text-xs-center text-sm-center text-md-left">
		<!-- Nested Container Starts -->
			<div class="container text-lite-color pl-sm-0 pr-sm-0">
				<h2 class="text-weight-medium">Contact Us</h2>
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->

	<!-- Breadcrumb Ends -->
	<!-- Main Container Starts -->
		<div class="main-container container pl-sm-0 pr-sm-0">
		<!-- Nested Row Starts -->
		<div class="row text-xs-center text-sm-center text-md-left">
			<!-- Mainarea Starts -->
				<div class="col-md-12 col-sm-12">

				<!-- Contact Form Wrap Starts -->
					<div class="contact-form-wrap">
						<h5 class="sub-heading-1 text-xs-center text-sm-center text-md-left">Config Form</h5>
					<!-- Contact Form Starts -->
						<div class="status alert alert-success contact-status"></div>
						<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="trading/update_aws.php" role="form">
						<!-- Nested Row Starts -->
							<div class="row">
							<!-- First Name Filed Starts -->
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label for="region"><b>Region: </b></label>
										<input type="text" class="form-control flat" name="region" id="region" required="required" placeholder="Region" value="<?php echo $region; ?>">
									</div>
								</div>
							<!-- First Name Filed Ends -->
							<!-- Last Name Filed Starts -->
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label for="bucketName"><b>Bucket Name: </b></label>
										<input type="text" class="form-control flat" name="bucketName" id="bucketName" required="required" placeholder="BucketName" value="<?php echo $bucketName; ?>">
									</div>
								</div>
							<!-- Last Name Filed Ends -->
							<!-- E-mail Filed Starts -->
								<div class="col-sm-12">
									<div class="form-group">
										<label for="IAM_KEY"><b>IAM Key: </b></label>
										<input type="text" class="form-control flat" name="IAM_KEY" id="IAM_KEY" required="required" placeholder="IAM_KEY" value="<?php echo $IAM_KEY; ?>">
									</div>
								</div>
							<!-- E-mail Filed Ends -->
							<!-- Message Filed Starts -->
								<div class="col-sm-12">
									<div class="form-group">
										<label for="IAM_SECRET"><b>IAM Secret:</b></b></b></label>
										<input type="text" class="form-control flat" name="IAM_SECRET" id="IAM_SECRET" required="required" placeholder="IAM_SECRET" value="<?php echo $IAM_SECRET; ?>">
									</div>
								</div>
							<!-- Message Filed Ends -->
							<!-- Send Button Starts -->
								<div class="col-sm-12">
									<input  type="submit" class="btn btn-1 btn-big animation" value="Update Values">
								</div>
							<!-- Send Button Ends -->
							</div>
						<!-- Nested Row Ends -->
						</form>
					<!-- Contact Form Ends -->
					</div>
				<!-- Contact Form Wrap Ends -->
				</div>
			<!-- Mainarea Ends -->
			<!-- Spacer For Extra Small Screen Starts -->
				<div class="w-100 d-xs-block d-sm-block d-md-none">
					<p class="spacer-small"></p>
				</div>
			<!-- Spacer For Extra Small Screen Ends -->
			</div>
		<!-- Nested Row Ends -->
		</div>
	<!-- Main Container Ends -->
	<!-- Map Starts -->

	<!-- Map Ends -->

	<!-- Footer Top Section Starts -->
		<section class="footer-top">
		<!-- Nested Container Starts -->
			<div class="container pl-sm-0 pr-sm-0 text-xs-center text-sm-center text-md-left text-lite-color">
			<!-- Nested Row Starts -->
				<div class="row">
				<!-- Foot Col #1 Starts -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="foot-info">
							<p>
								<img src="images/foot-brand.png" alt="Fin Adviser" class="img-fluid img-center-xs">
							</p>
							<br>
							<p class="text-weight-light">
								<em>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</em>
							</p>
							<ul class="list-unstyled list-inline foot-sm-links">
								<li class="list-inline-item text-weight-medium">Follow Us:</li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook animation"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter animation"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus animation"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-instagram animation"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p animation"></i></a></li>
							</ul>
						</div>
					</div>
				<!-- Foot Col #1 Ends -->
				<!-- Foot Col #2 Starts -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h5>Contact Us</h5>
						<ul class="list-unstyled foot-address-list text-weight-light">
							<li class="clearfix">
								<i class="fa fa-map-marker"></i> 
								<span>
									<strong>#781, Shah Ali Banda, </strong><br>
									Chairminar, Hyd- 505
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-phone"></i> 
								<span class="text-weight-bold">(123) 45678910</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-envelope"></i> 
								<span><a href="mailto:support@demosite.com">support@demosite.com</a></span>
							</li>
							<li class="clearfix">
								<i class="fa fa-clock-o"></i> 
								<span>
									Mon - Fri : 10:00 - 18:00 <br>
									Sat - Sun Holiday
								</span>
							</li>
						</ul>
					</div>
				<!-- Foot Col #2 Ends -->
				<!-- Divider Starts -->
					<div class="w-100 d-md-block d-lg-none">
						<p><br><br></p>
					</div>
				<!-- Divider Ends -->
				<!-- Foot Col #3 Starts -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h5>Financial Planning</h5>
						<ul class="list-unstyled foot-list-style-1 text-weight-light">
							<li>Investment Management</li>
							<li>Retirement Planning</li>
							<li>Long Term Care</li>
							<li>Estate Planning</li>
							<li>Social Security</li>
						</ul>
					</div>
				<!-- Foot Col #3 Ends -->
				<!-- Foot Col #4 Starts -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<h5>Investment Planning</h5>
						<ul class="list-unstyled foot-list-style-1 text-weight-light">
							<li>Wealth Management</li>
							<li>Retirement &amp; College</li>
							<li>Savings Business Owners</li>
							<li>Insurance &amp; Annuities</li>
							<li>Cash &amp; Credit</li>
							<li>Stocks, Bonds &amp; Mutual Funds</li>
						</ul>
					</div>
				<!-- Foot Col #4 Ends -->
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Footer Top Section Ends -->

	
	<!-- Copyright Starts -->
	<!-- Copyright Ends	-->
	<!-- Template JS Files -->

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/backstretch/jquery.backstretch.min.js"></script>
	<script src="js/plugins/shuffle/jquery.shuffle.modernizr.min.js"></script>
	<script src="js/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

	<script src="js/custom.js"></script>	
	</body>
</html>
