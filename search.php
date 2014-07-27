<?php require_once("includes/functions.php"); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>TripKinsola</title>
		<?php 
		$_GET['id'] = 1;
		require("includes/header.php"); 
		?>
		<div id="part2">
			<div id="part21">
				<h2>Your search result...</h2>
				<?php
					echo "<p>";
					$word = $_POST['item'];
					$sArray = array("triple a", "akinsola", "ademola", "akinseye", "tripkinsola", "triple","ade");
					if (
						$word == $sArray[0] OR $word == $sArray[1] OR
						$word == $sArray[2] OR $word == $sArray[3] OR
						$word == $sArray[4] OR $word == $sArray[5]
						OR $word == $sArray[6]
						){
						echo "Guess you are at the right place! Your search(<b>{$word}</b>) looks familiar.<br />";
						echo "Check throught the <a href=\"map.php\">site map</a><br />";
					}else{
						echo "Your search(<b>{$word}</b>) doesn't look familiar over here!<br />";
					}
				?>
			</div>
			<div id="part22">
				<?php
					$output = "You searched for: <b>{$word}</b><br /><br />";
					$output .= "<br /> Click on any of these links to make advance searches:";
					$output .= "<a href='https://www.google.com/search?q={$_POST['item']}'";
					$output .= "target=\"_blank\"> Google</a>,";
				?>
				<?php
					$output .= "<a href='https://www.bing.com/search?q={$_POST['item']}'";
					$output .= "target=\"_blank\"> Bing</a>,";
				?>
				<?php
					$output .= "<a href='https://www.yahoo.com/w/search=?p={$_POST['item']}'";
					$output .= "target=\"_blank\"> Yahoo</a>,";
					$output .= "<br />";
					$output .= "</p>";
					echo $output;
				?>
			</div>

		</div>
		<?php 
		require("includes/services.php");
		echo clearFloat();
		 ?>
<?php require_once("includes/footer.php"); ?>

