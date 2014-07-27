<?php require_once("includes/functions.php") ?>
<html>
<head>
	<title>TripKinsola | web design</title>
		<?php 
		$_GET['id'] = 7;
		require("includes/header.php"); 
		?>
		<div id="part2">
			<div id="part21">
				<div class="web">
					<h3>Web Programming</h3>
					<p>If you are searching for quality web programming
					 services, I am here to help you.
					</p><br />
					<h3>My Web Programming Specialty</h3>
					<p>I specialize in a wide array of web programming 
					services.</p><br />
					<p>I have a team of skilled experts who are proficient in the
					 latest web development technologies and provides 
					 the best quality web-support to our clients. We 
					 offer multiple affordable and customized website 
					 programming packages designed to suit your budget
					  and business requirements perfectly. Our web 
					  programming services promise to make your website 
					  stand out from among its crowd of competitors</p>
					<br />
					<p>I strike the perfect balance between aesteticism
					 and professionalism to deliver brilliant results.</p>
					<p>From client enquiry to final delivery, we work in
					 tandem with each client to deliver seamless web 
					 programming solutions.</p>



				<?php echo clearFloat();  ?>
				</div>
				<div id="wel_two"><a href="index.php">Home</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="contact.php?id=5">Contact</a></div>
				<?php echo clearFloat();  ?>
			</div>
			<hr />
		</div>


		<?php 
		require("includes/services.php");
		echo clearFloat();
		 ?>
<?php include_once("includes/footer.php"); ?>

