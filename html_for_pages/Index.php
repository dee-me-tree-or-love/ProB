<!DOCTYPE html>
<!--<?php
//$headercont = '';
//$footercont = '';
//require_once 'Integral/header.php';
//require_once 'Integral/footer.php';
//?>
-->
<head>
	
	<title>ProB</title>
	
	<link rel="stylesheet" type="text/css" href="css\BGimageHome.css">
	<link rel="stylesheet" type="text/css" href="css\Home.css">
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
		<script src="Javascript\hefo.js"></script>
	<link rel="icon" href="ImgContent\Default\favicon.ico">	
</head>
<body>
<!-- Background -->

	<div id = "bg">
		<img id="background" 
				src="ImgContent\home\Background.jpg" 
						alt="">
	
	</div>

	
	<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php require_once 'Integral/header.php';?>
                
	</div>

<!-- Main -->
	<div id="main">
		
		<div id="caption">
			<!--
			<img id="background" 
				src="ImgContent\home\Background.jpg" 
						alt="Background picture">
			-->
			<h1>Let's make it fair.</h1>			
		</div>
		<div id="scroll">
			<!--
			<img id="background" 
				src="ImgContent\home\Background.jpg" 
						alt="Background picture">
			-->
			<h1>Scroll down to find more</h1>			
		</div>
	</div>
	<div id="morestuff">
		
		<ul id = "mainoptions">
		<li id="wbf">
			<a href="foundations.php" >	
			<div class="optlink">
				<img 
					src="ImgContent\home\WBF.jpg" 
						alt="WBF Pic">
				<h5>WBF</h5>
			</div>
		</li>
		
		<li id="fairtrade">
			<a href="learnMoreProduction.php" >	
			<div class="optlink">
				<img 
					src="ImgContent\home\
						FairBananaFarmer.jpg" 
						alt="Production Pic">
				<h5>Production</h5>
			</div>
			</a>
		</li>
		
		<li id="mission">
			

			<a href="
				about.php" >	
			<div class="optlink">
				<img 
					src="ImgContent\home\
						girl1.jpg" 
						alt="WBF Pic">
				<h5>Our Mission</h5>
			</div>
			
			</a>
		</li>
		</ul>
		
		<div id="action">
		
			<div id="take">
				<a href="contribute.php">
					<h2>Take Action</h2>
				</a>
			</div>
		</div>
	</div>	
	
<!-- Footer -->
	<div id = "footer">
		<!-- Place for PHP-->
                <?php require_once 'Integral/footer.php';?>
	</div>
</body>
</html>


