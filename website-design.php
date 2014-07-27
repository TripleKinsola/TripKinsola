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
				<div class="web"><h3>Creative and customized Web Design</h3><br />
				<p>A website is an extremely important tool for success 
				in today's business world, and having one is like having 
				a one-stop shop where your potential customers from across 
				the world can come and explore your offerings, and contact 
				you for your services. Just like a beautifully decorated 
				and well-stocked shop attracts customers, a nicely designed
				 and easy-to-navigate site attracts visitors and turns them into your customers or clients.</p>
				 <br />
				 <h3>Website Design that's Aimed at 
            Growing Your Business on the Web</h3><br />
				<p>Opting for a Web Design is like building a shop that will
             always be open, even when you are asleep. <br />I can create for you just the website you need! <br />
             My expertise at building a Custom Web Design is guaranteed
              to help you build your unique brand identity. My 
              creations let you harness your business in the web world.
              <br />It helps:</p>
			    <div id="help">
					<div id="imgFloat"><img src="images/website-design-image.jpg" alt="webdesign-box-bottom"></div>
					<ul>
						<li>Expand your brand on the web</li>
						<li>Create and increase awareness about your products and/or services. </li>
						<li>Offer informative content that your visitors can benefit from </li>
						<li>Generate leads </li>
						<li>Generate sales </li>
					</ul>
				</div>
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

