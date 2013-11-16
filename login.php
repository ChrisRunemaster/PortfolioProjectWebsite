<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en" >
	<!--<![endif]-->
	<!-- Name: Chris Rooney
	Filename: index.html
	Website Name: Houraisan Softworks
	Description: This is the index/home page.
	-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Houraisan | Home</title>

		<link rel="stylesheet" href="css/foundation.css">
		<script src="js/detectmobilebrowser.js"></script>
		<script src="js/vendor/custom.modernizr.js"></script>

	</head>
	<body>
		<?php
		require_once (connectvars . php);
		?>
		<div class="row">
			<div class="large-12 columns">

				<!-- Navigation -->
				<nav class="top-bar">
					<ul class="title-area">
						<!-- Title Area -->
						<li class="name">
							<h1><a href="index.html"> <img src="img/logo.png" alt="Houraisan Productions" > </a></h1>
						</li>
						<li class="toggle-topbar menu-icon">
							<a href="#"><span>menu</span></a>
						</li>
					</ul>

					<section class="top-bar-section">
						<ul class="left">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="About-Me.html">About Me</a>
							</li>
							<li>
								<a href="Projects.html">Projects</a>
							</li>
							<li>
								<a href="Services.html">Services</a>
							</li>
							<li>
								<a href="https://github.com/ChrisRunemaster">Github</a>
							</li>
							<li>
								<a href="Contact-Me.html">Contact Me</a>
							</li>
						</ul>

						<!--<ul class="right">
						<li class="search">
						<form>
						<input type="search">
						</form>
						</li>

						<li class="has-button">
						<a class="small button" href="#">Search</a>
						</li>
						</ul>-->
					</section>
				</nav>

				<!-- End Navigation -->

				<!-- Main Content. Log in stuff will go right here! -->

				<div class="row">
					<div class="large-8 columns">
						<h4>Personal Business Contacts</h4>
						<p>
							Here is a password protected form in which one can look at my personal business contacts. No peeking!
						</p>

						<form name="loginform" method="post" action="checklogin.php">
							<p>
								Username:
							</p>
							<input name="username" type="text" id="username">

							<p>
								Password:
							</p>
							<input name="password" type="password" id="password">

							<input type="submit" name="submit" value="submit">

						</form>

						
					</div>

				</div>

				<!-- Footer -->

				<footer class="row">
					<div class="large-12 columns">
						<hr>
						<div class="row">
							<div class="large-6 columns">
								<p>
									&copy; Copyright Chris Rooney 2013
								</p>
							</div>
							<div class="large-6 columns">
								<ul class="inline-list right">
									<li>
										<a href="#top">Back to Top</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>

				<script>
					document.write('<script src=' + ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') + '.js><\/script>');
				</script>

				<script src="js/foundation.min.js"></script>

				<script src="js/foundation/foundation.js"></script>

				<script src="js/foundation/foundation.interchange.js"></script>

				<script src="js/foundation/foundation.abide.js"></script>

				<script src="js/foundation/foundation.dropdown.js"></script>

				<script src="js/foundation/foundation.placeholder.js"></script>

				<script src="js/foundation/foundation.forms.js"></script>

				<script src="js/foundation/foundation.alerts.js"></script>

				<script src="js/foundation/foundation.magellan.js"></script>

				<script src="js/foundation/foundation.reveal.js"></script>

				<script src="js/foundation/foundation.tooltips.js"></script>

				<script src="js/foundation/foundation.clearing.js"></script>

				<script src="js/foundation/foundation.cookie.js"></script>

				<script src="js/foundation/foundation.joyride.js"></script>

				<script src="js/foundation/foundation.orbit.js"></script>

				<script src="js/foundation/foundation.section.js"></script>

				<script src="js/foundation/foundation.topbar.js"></script>

				<script>
					$(document).foundation();
				</script>
	</body>
</html>