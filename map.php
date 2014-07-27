<?php require_once("includes/functions.php") ?>
<html>
<head>
	<title>TripKinsola | service</title>
		<?php $_GET['id'] = 10; ?>
		<?php require("includes/header.php"); ?>
		<div id="part2">
			<div id="part21">
				<h2>Site Map...</h2>
				<div id="part22">
					<ul class="baod">
						<li><a href="index.php">TripKinsola</a>
							<ul class="bader">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="service.php">Service</a>
									<ul class="bad">
										<li><a href="website-design.php">Web design</a></li>
										<li><a href="">Mobile site</a></li>
										<li><a href="web-programing.php">Programming</a></li>
										<li><a href="logodesign-solution.php">Logo</a></li>
									</ul>
								</li>
								<li><a href="price.php">Price</a></li>
								<li><a href="contact.php">Contact</a></li>
								<br />
								<br />
								<li>Resources
									<ul class="bad">
										<li><a href="http://www.php.net" target="_blank">Php</li></a>
										<li><a href="http://www.javascriptworld.com/index.html" target="_blank">JavaScript</li></a>
										<li><a href="http://www.w3schools.com/css" target="_blank">CSS</li></a>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div id="wel_two">
				<a href="index.php">Home</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<a href="contact.php?id=5">Contact</a>
			</div>
		</div>


		<?php 
		require("includes/services.php");
		echo clearFloat();
		 ?>
<?php include_once("includes/footer.php"); ?>

