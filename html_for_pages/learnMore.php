<DOCTYPE! html>
<?php
$headercont = '';
$footercont = '';

require_once 'Integral/header.php';
require_once 'Integral/footer.php';

?>
    
    
<head>
	<title>LEARN MORE</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\learnmore.css">
		<script src="Javascript\hefo.js"></script>
               <link rel="icon" href="ImgContent\Default\favicon.ico">	  
</head>
<body>
	<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php echo $headercont;?>
	</div>

<!-- Main -->
<div id="content">
	
		
			<div class = "cont" id="left">
				<img src = "ImgContent\learnmore\yellow.jpg" width= "340pt", height= "538pt" >
				<a href = "learnmoreYellowFruit.php">
					<div class ="text">
						<h1 class="caption">YELLOW FRUIT</h1>
					</div>
				</a>
			</div>
	
		
			<div class = "cont" id="mid">
				<img src = "ImgContent\learnmore\production.jpg">
				<a href = "learnmoreProduction.php">
					<div class ="text"  id = "middle">
						<h1 class="caption">PRODUCTION</h1>
					</div>
				</a>
			</div>
	
		
			<div class = "cont" id="right">
				<img src = "ImgContent\learnmore\problems.jpg"width= "340pt", height= "538pt">
				<a href = "learnmoreProblems.php">
					<div class ="text">
						<h1 class="caption">PROBLEMS</h1>
					</div>
				</a>
			</div>
	

	</ul>
</div>
</table>



<!-- Footer -->
	<div id = "footer">
		<!-- Place for PHP-->
                <?php echo $footercont;?>
	</div>
</body>
</html>
