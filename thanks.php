<?php
	if(isset($_POST['submit'])){

		$email = 'techyuvi@valueappz.com';
		$name = $_POST['name'];
		$user_email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: Valueappz <techyuvi@valueappz.com>' . "\r\n";
        $html = '<p>Person Name:'.$name.'<br>Email:'. $user_email. '<br>Subject: '.$subject. '<br>Message:'.$message.'<p>';
        mail($email, 'Message From'.$name , $html, $headers);
		}
?>




<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Thank You - Tech Yuvi</title>

	<!--  favicons	-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">


	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--	<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Quicksand" rel="stylesheet">-->
	<!--	<link href="https://fonts.googleapis.com/css?family=Fira+Mono" rel="stylesheet">-->
	<!--	<link href="https://fonts.googleapis.com/css?family=Fira+Mono|Slabo+27px" rel="stylesheet">-->
	<link href="https://fonts.googleapis.com/css?family=Fira+Mono|Inconsolata" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body id="page-top" class="index">

	<nav class="navbar navbar-inverse navbar-absolute-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<a class="navbar-brand" href="index.html">
					<img src="img/logo-white.png" width="200" alt="">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="contact.html" target="_blank" class="anim-top navbar-button marginright-20">
							Get a quote
						</a>
					</li>
					<li>
						<a href="index.html" class="anim-top" target="_blank">
							Home
						</a>
					</li>
					<li>
						<a href="#services" data-scroll="#services" class="anim-top" target="_blank">
							Services
						</a>
					</li>
					<li>
						<a href="about.html" class="anim-top" target="_blank">
							About Us
						</a>
					</li>
					<li>
						<a href="contact.html" class="anim-top" target="_blank">
							Contact Us
						</a>
					</li>
					<li>
						<a href="index.html#inld" class="anim-top">
							<img src="img/inld-logo.png" width="50" alt="">
						</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<section class="section intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center text-white">
					<h1 class="font-large">
						Thank You
					</h1>
					<h4>For getting in touch.</h4>
					<h5 class="font-light">
						We have received your message and we shall contact you soon.
					</h5>

					<div class="margintop-20">
						<a href="index.html" class="button button-outline-white">
							<i class="fa fa-home"></i> Home
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="overlay">
			<div class="overlay-image cover-background" style="background-image: url(img/contact-us.jpg); background-position: center center; background-attachment: fixed;"></div>
			<div class="overlay-color background-primary opacity-6"></div>
		</div>
	</section>

	<footer class="footer background-black text-center">
		<ul class="footer-links light">
			<li>Copyright &copy; 2016. All Rights Reserved</li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
		<div class="to-top">
			<a role="button" title="Back to top" data-scroll="#page-top"><i class="fa fa-arrow-up text-white"></i></a>
		</div>
	</footer>
	

	<!-- jQuery -->
	<script src="js/jquery-2.2.4.min.js"></script>

	<!-- jQuery form validation -->
	<script src="js/jquery.validate.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<script src="js/scrollreveal.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="js/script.js"></script>

</body>

</html>
