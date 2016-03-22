<DOCTYPE! html>

    
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="css\hefo_1.css">
	<link rel="stylesheet" type="text/css" href="css\about.css">
		<script src="Javascript\hefo.js"></script>
                <script src="Javascript\about.js"></script>
</head>
<body>
		<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php require_once 'Integral/header.php';?>
	</div>
<!-- Main -->

<div id="Content">
	<div id="Buttons">
			<p class="section" onclick=SwapCont("we")>Who are we?</p>
			<p class="section" onclick=SwapCont("miss")>Our mission</p>
	</div>
						<div id = "info_body">
                                                <div id="weare">    
							<?php require_once 'about/WhoWeAre_1.php';?>
                                                </div>
                                                <div id="miss">
                                                        <?php require_once 'about/Mission_1.php';?>
                                                </div>
                                                </div>
</div>

<!-- Footer -->
	<div id = "footer">
		<!-- Place for PHP-->
                <?php require_once 'Integral/footer_1.php';?>
	</div>
</body>
</html>