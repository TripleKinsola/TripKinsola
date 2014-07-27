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
				<div class="web"><h3>Corporate Identity</h3>
				<p>Every business organization, whether small or big,
				 desires to cut a niche in the commercial market. 
				 Corporate identity design helps build brand image; 
				 a solid brand image successfully etches a company's 
				 product and services in the minds of its users and 
				 potential users.</p><br />
				<p>A strong corporate identity augments your company's 
				presence in the market. It differentiates your business
				 from other similar businesses and makes your 
				 competitors stand up and take notice. A company with
				  established corporate identity taps more target 
				  audience and creates longer-lasting impressions on 
				  consumers than companies without. </p><br />
				<p>I am a non-stop design developer specializing in logo design, envelope design,
				   letterhead design and business card design. I uphold
					your corporate culture and enhance your company's 
					public image through my various corporate identity
					 design services.</p><br />
				<p>If you are looking for affordable and quality 
				corporate identity designer, you've come to the right place! </p> <br />   
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

