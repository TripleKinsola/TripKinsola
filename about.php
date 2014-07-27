<?php require_once("includes/functions.php") ?>
<html>
<head>
	<title>TripKinsola | about</title>
		<?php $_GET['id'] = 4; ?>
		<?php require("includes/header.php"); ?>
		<div id="part2">
			<div id="part21">
				<h2>About</h2>
				<div id="part22">
					<p>I(Ademola Akinsola) provide a range of cost-effective services in the field of web design and development, graphics design, logo and corperate stationery design, mobile website and application development and search engine optimization and more...</p>
				</div>
			</div>
			<hr />
			<div id="wel_two"><a href="index.php">Home</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="contact.php?id=5">Contact</a></div>
		</div>


		<?php 
		require("includes/services.php");
		echo clearFloat();
		 ?>
<?php require_once("includes/footer.php"); ?>
