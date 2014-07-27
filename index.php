<?php require_once("includes/functions.php"); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>TripKinsola</title>
		<?php $_GET['id'] = 1; ?>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
	<script type="text/javascript">
		function getCookie(c_name)
		{
		if (document.cookie.length>0)
		  {
		  c_start=document.cookie.indexOf(c_name + "=");
		  if (c_start!=-1)
			{ 
			c_start=c_start + c_name.length+1 ;
			c_end=document.cookie.indexOf(";",c_start);
			if (c_end==-1) c_end=document.cookie.length
			return unescape(document.cookie.substring(c_start,c_end));
			} 
		  }
		return ""
		}

		function setCookie(c_name,value,expiredays)
		{
		var exdate=new Date();
		exdate.setDate(exdate.getDate()+expiredays);
		document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : "; expires="+exdate.toGMTString());
		}

		function checkCookie()
		{
		username=getCookie('username');
		if (username!=null && username!="")
		  {
		  alert('Welcome again '+username+'!');
		  }
		else 
		  {
		  username=prompt('Please enter a name for greetings:',"");
		  if (username!=null && username!="")
			{
			setCookie('username',username,365);
			}
		  }
		}
	</script>
</head>
<body onLoad="checkCookie()">
	<div align="center">
		<div id="topper">
			<div id="wel">
				<?php 
					$date = date("H");
					$second = date("m");
				
					if (($date < 12) && ($second < 59)){
						echo "<b>Good Morning,</b>";
						echo  page();
					}elseif ($date < 17){
						echo "<b>Good Afternoon,</b>";
						echo  page();
					}else{
						echo "<b>Good Evening,</b>";
						echo  page();
					}
				?>	
			</div>
			<div id="wel_two">
				<a href="index.php?id=1">Home</a>
				<a href="service.php?id=2">Service</a>
				<a href="price.php?id=3">Price</a>
				<a href="about.php?id=4">About</a>
				<a href="contact.php?id=5">contact</a>				
			</div>
			<div id="conTi">
				Mobile Codes:
			</div>
			<div id="conT">
				<div id="wel_two"><a href="tel:+2347062671144" target="_self">+234-706-267-1144</a></div>
			</div>
		</div>

		<div id="big-wrapper">

			<div id="wider">
				<div id="header">
					<div id="float_head_img">	
						<img src="images/float.png" height="172px" width="200px" />
					</div>
					<div id="float_head_p">
						<p>I can do the work!</p>
						<h3>...and you, reap the <blink><strong>Rewards</strong></blink>!</h3>	
					</div>	
					<div id="searcher">
						<form action="search.php" method="post">
							Query search:<input type="text" value="" name="item" />
							<input type="submit" value=" Go! " onclick="confirm('Is that your search query?');" />
						</form>
					</div>
				</div>
			</div>
			<div id="clearer"></div>
			
			
			
			<div class="header-bottom">
				<div class="section-one">
					<p>
						<img src="images/we_design.jpg" alt="Website Design" height="108" width="251" border="0">
					</p>
					<p class="text">
						Creative and customized designs offering high user-flexibility... 
						<a href="website-design.php"><br />
							<strong>more</strong>
						</a>
					</p>
				</div>
				<div class="section-two">
					 <p>
						<img src="images/web_prog.jpg" alt="Web Programming" height="108" width="251" border="0">
					</p>

					<p class="text">
						Dynamic, user-friendly websites for enriched user-experience... 
						<a href="web-programing.php">
							<strong>more</strong>
						</a>
					</p>
				</div>
				<div class="section-three">
					<p>
						<img src="images/mobile-development.jpg" alt="Mobile Development" height="108" width="251" border="0">
					</p>
					<p class="text"> 
						Outstanding Mobile website and Apps development solutions...
					</p>
				</div>
				<div class="section-four">
					<p>
						<img src="images/logo_design.jpg" alt="Logo Design" height="108" width="243" border="0">
					</p>

					<p class="text">
						Imaginative and impactful corporate identities to seal your brand... 
						<a href="logodesign-solution.php">
							<strong>more</strong>
						</a>
					</p>
				</div>
			<div id="clearer"></div>	
				
				
				
				
			</div>
			<div id="part1">	
				<h2 class="bg-blues">Quick Links</h2>
				<ul type="square" class="bg-white">
					<li><a href="index.php">Home</a></li>
					<li><a href="service.php?id=2">Services</a>
					</li>
					<li><a href="about.php?id=4">About</a></li>
					<li><a href="price.php?id=3">Price</a>
					</li>
					<li><a href="contact.php?id=5">Contact</a>
					</li>
					<li><a href="index.php">Advantage</a></li>
					<li>Reference
						<ul class="inside">
							<li><a href="http://www.php.net" target="_blank">php</a></li>
							<li><a href="http://www.w3schools.com/css" target="_blank">CSS</a></li>
							<li><a href="http://javascriptworld.com/index.html" target="_blank">JavaScript</a></li>
						</ul>
					</li>
					<li><a href="map.php">Site map</a></li>
					<li><a href="#top">Move to top....</a></li>
				</ul>	
			</div>
			<div id="part2">
				<div id="part21">
					<h4>If you desire excellence, choose me;</h4>
					<h2>Because I provide...</h2>
				</div>
				<hr />
				<div id="part22">
					<div id="part221">
						<img src="images/high-end-customization.png" />
					</div>
					<h2>High End Customization</h2>
					<p>I am a website builder agency serving a global clientele, with tailor services at extremely affordable rates.</p>
				</div>
				<hr />
				<div id="part22">
					
					<div id="part221">
						<img src="images/adherence-quality-standard.png" />
					</div>
					<h2>Adherence to Quality Standards</h2>
					<p>I provide value for money and never compromise on quality. This enables me to strictly adhere to industry standards well as the  expectations of my clients</p>
				</div>
				<hr />
				<div id="part22">
					<div id="part221">
						<img src="images/guaranteed-satisfaction.png" />
					</div>
					<h2>Guaranteed Satisfaction</h2>
					<p>I cater to a large, satisfied clientele in Nigeria as well as overseas in USA, UK, Canada and many other countries, building long term relationships with each and every client.</p>
				</div>
				<hr />
				<div id="part22">
					<div id="part221">
						<img src="images/dedicated-professionals.png" />
					</div>
					<h2>Dedicated Professionals</h2>
					<p>My expert professionals are committed to excellence. For every project undertaken, distinctive strategies are built, based on the cliests' requirements, to deliver the right solutions.</p>
				</div>
				<hr />
				<div id="part22">
					<div id="part221">
						<img src="images/defined-turn.png" />
					</div>
					<h2>Defined Turnaround Time</h2>
					<p>My expertise enables me to deliver projects within a define turn around time.</p>
				</div>
				<hr />
				<div id="part22">
					<div id="part221">
						<img src="images/continuous-client.png" />
					</div>
					<h2>Continuous Client Interaction</h2>
					<p>I ensure continuous client interaction with short response time so that you can easily track project progress.</p>
				</div>
				<hr />
				<div id="part22">
					<div id="part221">
						<img src="images/technological-advancements.png" />
					</div>
					<h2>Technology Advancements</h2>
					<p>My futuristic outlook continues to inspire me to pursue excellence in whatever I do through efficient incorperation of latect technological advancements.</p>
				</div>
				<hr />
				<div id="part22">
					<div id="part221">
						<img src="images/strict-confidentiality.png" />
					</div>
					<h2>Strictly Confidentiality</h2>
					<p>I never share your project details with other clients but keet it strictly cofidetial.</p>
				</div>
				<hr />
			</div>
			<?php 
			require("includes/services.php");
			echo clearFloat();
			 ?>
	<?php require_once("includes/footer.php"); ?>

