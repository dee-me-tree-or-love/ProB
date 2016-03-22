<DOCTYPE! html>
<?php
$headercont = '';
$footercont = '';
$wearecont = '';
$misscont = '';
require_once 'Integral/header.php';
require_once 'Integral/footer.php';
require_once 'about/Mission.php';
require_once 'about/WhoWeAre.php';
?>
    
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\about.css">
		<script src="Javascript\hefo.js"></script>
                <script src="Javascript\about.js"></script>
</head>
<body>
		<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php echo $headercont;?>
	</div>
<!-- Main -->

<div id="Content">
	<div id="Buttons">
			<p class="section" onclick=SwapCont("we")>Who are we?</p>
			<p class="section" onclick=SwapCont("miss")>Our mission</p>
	</div>
						<div id = "info_body">
                                                <div id="weare">    
							<?php echo $wearecont?>
                                                </div>
                                                <div id="miss">
                                                        <?php echo $misscont?>
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