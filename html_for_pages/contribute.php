<DOCTYPE! html>

    
    
<head>
	<title>Contribute</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\contribute.css">
		<script src="Javascript\hefo.js"></script>
		<script src="Javascript\contribute.js"></script>
                  <link rel="icon" href="ImgContent\Default\favicon.ico">
</head>
<body>
		<!-- Header -->
	<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php require_once 'Integral/header.php';?>
                
	</div>

<!-- Main -->
<div id="content">
	<div id="together">
	<div class="recblock" id="Support">
		<h1>Support Project Banana</h1>

		<div id = "info_body">

		<p>Your contribution will help the Project Banana spread the knowledge about the fair and sustainable banana trades and the importance of implementing solutions together. Your donation is an act of solidarity that will make a real impact on the ground. </p>
							<form action="signup.php" method="get">
							<input type="submit" name="Register"
								value="Register" class="btn"/>
							</form>
		</div>
	</div>

	<div class="recblock" id="Donate">
		<h1>Donate</h1>
		<form id="keke" onsubmit="alert('Your donation was successful. We really appreciate it!')">
		<div id="inputs">
			<input type="button" name="contribute_amount" value="5"  class="btn amount" />
			<input type="button" name="contribute_amount" value="25" class="btn amount" />
			<input type="button" name="contribute_amount" value="50" class="btn amount" />
			<input type="button" name="contribute_amount" value="Other" class="btn other"/>
		</div>
		<div id="formamount">
					<h4 id="tit">Amount:</h4>
					<div>
					<label for="Your_amount">Your amount:</label>
					<input autofocus="autofocus" class="form-control" required="required" type="number" min="0" name="your_amount" id="your_amount" />
					<h4>EUR</h4>
					</div>
		</div>

		<hr/>

		<div class="form-group">
					<label for="first_name">First Name</label>
					<input autofocus="autofocus" class="form-control" required="required" type="text" name="first_name" id="first_name" />
				</div>
		<div class="form-group">
					<label for="last_name">Last Name</label>
					<input autofocus="autofocus" class="form-control" required="required" type="text" name="last_name" id="last_name" />
				</div>
		<div class="form-group">
					<label for="e_mail">E- Mail</label>
					<input autofocus="autofocus" class="form-control" required="required" type="email" name="e_mail" id="e_mail" />
				</div>
		<div class="form-group">
					<label for="phone">Phone</label>
					<input autofocus="autofocus" class="form-control" required="required" type="tel" name="phone" id="phone" />
				</div>
		<hr>
		<div class="form-group">
					<label for="">Card Holder's Name</label>
					<input autofocus="autofocus" class="form-control" required="required" type="text" name="card_holder's_name" id="card_holder's_name" />
				</div>
		<div class="form-group">
					<label for="">Credit Card's Number</label>
					<input autofocus="autofocus" class="form-control" required="required" type="text" name="credit_card_number" id="credit_card_number" />
				</div>
		<div class="form-group">
					<label for="">Card's CVV</label>
					<input autofocus="autofocus" class="form-control" required="required" type="text" name="card_CVV" id="card_CVV" />
				</div>
		<div class="form-group">
					<label for="">Card's Expiration Date</label>
					<input autofocus="autofocus" class="form-control" required="required" type="month" name="month" id="month" />
				</div>
		<hr>

		<input type="submit" name="DONATE" value="DONATE" class="btn" id="donate_btn"/>
</form>




		</div>
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