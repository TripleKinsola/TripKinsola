<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
</head>
<body>
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
					<a href="website-design.php">
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
				<br />
				<li><a href="service.php?id=2">Services</a>
				</li>
				<br />
				<li><a href="about.php?id=4">About</a></li>
				<br />
				<li><a href="price.php?id=3">Price</a>
				</li>
				<br />
				<li><a href="contact.php?id=5">Contact</a>
				</li>
				<br />
				<li><a href="index.php">Advantage</a></li>
				<br />
				<li>Reference
					<ul class="inside">
						<li><a href="http://www.php.net" target="_blank">php</a></li>
						<li><a href="http://www.w3schools.com/css" target="_blank">CSS</a></li>
						<li><a href="http://javascriptworld.com/index.html" target="_blank">JavaScript</a></li>
					</ul>
				</li>
				<br />
				<li><a href="map.php">Site map</a></li>
				<br />
				<li><a href="#top">Move to top....</a></li>
			</ul>	
		</div>
