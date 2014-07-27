<?php require_once("includes/functions.php") ?>
<html>
<head>
	<title>TripKinsola | contact</title>
		<?php $_GET['id'] = 5; ?>
		<?php require("includes/header.php"); ?>
		<div id="part2">
			<div id="part21">
				<h4>Contact</h4>
				<div class="web"><h3>Mobile codes @...</h3>
					<div id="cornner">
						<div id="wel_two"><a href="tel:+2347062671144" target="_self">+234-706-267-1144</a></div>
						<div id="wel_two"><a href="tel:+2348182367632" target="_self">+234-818-236-7632</a></div>
					</div>
				<?php echo clearFloat();  ?>
				</div>

				<div class="web"><h3>Follow socially @...</h3>
					<div id="soLink">
						<a href="facebook.com/akinsola.triplea" target="_blank"><img src="images/social/facebook-icon.png" alt="FaceBook" />facebook</a>
						<a href="www.google.com/" target="_blank"><img src="images/social/gplus-32.png" alt="Google+" />gPlus</a>
						<a href="www.linedin.com/" target="_blank"><img src="images/social/linkedin-icon.png" alt="LinkedIn" />LinkedIn</a><br />
						<a href="www.pinterest.com/" target="_blank"><img src="images/social/pinterest.png" alt="pinterest" />pinterest</a>
						<a href="www.twitter.com/" target="_blank"><img src="images/social/twitter-icon.png" alt="twitter" />twitter</a>
						<a href="www.youtube.com/" target="_blank"><img src="images/social/youtube-icon.png" alt="youtube" />youtube</a>
					</div>
				<?php echo clearFloat();  ?>
				</div>

				<div class="web"><h3>Message....</h3>

					<FORM METHOD=POST ACTION="mailto:TripKinsola@gmail.com" ENCTYPE="application/x-www-form-urlencoded">
						Name:<input type="text">
						Country:<input type="text"><br /><br />
						State:<input type="text">
						Mobile contact:<input type="text"><br /><br />
						E_mail Address:<input type="text">
						Date:<input type="text" value='<?php echo date("Y"); ?>'><br /><br />
						Message:<br /><textarea style="width: 450px; height: 90px;" name="COMMENTS" rows="7" cols="54">
								</textarea><br />
						<input type="reset">
						<input type="submit">
					</FORM>

				<?php echo clearFloat();  ?>
				</div>

				<div class="web"><br /><h3>Quick mail message...</h3>
				<p>Click on this 
					<div id="cornner">
						<div id="wel_two">
							<a href="mailto:TripleKinsola@gmail.com" target="_blank">link...</a>
						</div>
					</div>
				</p>
				<?php echo clearFloat();  ?>
				</div>
				
				
				<div id="wel_two">
					<a href="index.php">Home</a> 
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="mailto:TripleKinsola@gmail.com" target="_blank">Contact</a>
				</div>
				<?php echo clearFloat();  ?>
			</div>
			<hr />
		</div>


		<?php 
		require("includes/services.php");
		echo clearFloat();
		 ?>
<?php require_once("includes/footer.php"); ?>
