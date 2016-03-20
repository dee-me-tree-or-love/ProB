<DOCTYPE! html>

<head>
	<title>Contribute</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\contribute.css">
		<script src="Javascript\hefo.js"></script>
		<script src="Javascript\contribute.js"></script>
</head>
<body>
		<!-- Header -->
	<div id="header">

		<div id = "home">
			<a href="index.php" >
				ProB
			</a>
		</div>




		<div id="menu">
			<ul id="pages">
				<li>
					<a href="about.php" class="header">
						<div class="navig">
							About
						</div>
					</a>
				</li >
				<li>
					<a href="foundations.php" class="header">
						<div class="navig">
							Foundations
						</div>
					</a>
				</li>
				<li>
					<a href="learnMore.php" class="header">
						<div class="navig">
							Learn More
						</div>
					</a>
				</li>
				<li>
					<a href="articles.php" class="header">
						<div class="navig">
							Articles
						</div>
					</a>
				</li>
				<li>
					<a href="contribute.php" class="header">
						<div class="navig">
							Contribute
						</div>
					</a>
				</li>
			</ul>
		</div>
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
							</form>		</div>
	</div>

	<div class="recblock" id="Donate">
		<h1>Donate</h1>
		<form id="keke" onsubmit="alert('Your donation was successful. We really appreciate it!')">
		<div id="inputs">
			<input type="button" name="contribute_amount" value="5"  class="btn amount" onclick="SetAmount()"/>
			<input type="button" name="contribute_amount" value="25" class="btn amount" onclick="SetAmount()"/>
			<input type="button" name="contribute_amount" value="50" class="btn amount" onclick="SetAmount()"/>
			<input type="button" name="contribute_amount" value="Other" class="btn other"/>
		</div>
		<div id="formamount">
					<h4 id="tit">Amount:</h4>
					<div>
					<label for="Your_amount">Your amount:</label>
					<input autofocus="autofocus" class="form-control" required="required" type="number" name="your_amount" id="your_amount" />
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

		<input type="submit" name="DONATE" value="DONATE" class="btn" id="donate_btn"/></form>




		</div>
	</div>
	</div>
</div>
<!-- Footer -->
	<div id = "footer">

		<!-- to enter -->
		<div id="account_form_in">

					<!-- THE ACTION LINK IS JUST FOR AN EXAMPLE... -->
									<!-- SHOWN WHEN THE USER HAS NOT LOGGED IN -->
					<div class="closeform" onclick="HideAccountEnter()">
								<p>X</p>
							</div>
				<form action="http://www.example.com/login.php">
							<p>E-Mail:
								<input type="text" name="e-mail" size="15"
								maxlength="30" />
							</p>
							<p>Password:
								<input type="password" name="password" size="15"
								maxlength="30" />
							</p>
							</form>
							<input class="bttn" type="submit" name="sign_in"
								value="Sign In" />
							<!-- A way to make the button act like a link-->
							<form action="signup.php" method="get">
							<input class="bttn" type="submit" name="sign_up"
								value="Sign Up" />
							</form>

					</div>

		<!-- SHOWN WHEN THE USER HAS LOGGED IN -->

					<div id="account_form_out">
							<p>Hello, XXXX</p>
							<!-- WHERE XXXX IS THE USER'S NAME  -->
							<input class="bttn" type="submit" name="sign_out"
								value="Sign Out" />
					</div>


		<!-- A FORM SHOWN ON CLICK SENDER'S NAME IS OPTIONAL -->
					<div id="share_form" >
					<!-- THE ACTION LINK IS JUST FOR AN EXAMPLE... -->
						<div class="closeform" onclick="HideShare()">
								<p>X</p>
							</div>
						<form action="http://www.example.com/login.php">
							<p>Recipient*:
								<input type="text" name="rec_name" size="15"
								maxlength="30" />
							</p>
							<p>E-Mail*:
								<input type="text" name="e-mail" size="15"
								maxlength="30" />
							</p>
							<hr/>
							<p>Sender:
								<input type="text" name="send_name" size="15"
								maxlength="30" />
							</p>
							</form>
							<input class="bttn" type="submit" name="send_to_friend"
								value="Send" />

					</div>



		<!-- to send us messages -->
		<div id="contact_us_form">
				<!-- THE ACTION LINK IS JUST FOR AN EXAMPLE... -->
					<div class="closeform" onclick="HideContactUs()">
							<p>X</p>
						</div>
					<form action="http://www.example.com/login.php">
						<p>Sender*:
							<input type="text" name="rec_name" size="15"
							maxlength="30" />
						</p>
						<p>E-Mail*:
							<input type="text" name="e-mail" size="15"
							maxlength="30" />
						</p>
						<hr/>
							<textarea name="comments" cols="20" rows="4"></textarea>
						</p>
					</form>
						<input class="bttn" type="submit" name="send_to_friend"
							value="Send" />

				</div>


<!--					DIVISION							-->
		<div class="footermenu">
			<ul class="footermenu">
			<li>
				<div>
					<h5 onclick="ShowAccountEnter()">ACCOUNT</h5>
				</div>
			</li>

			<li>
				<div>
					<h5 onclick="ShowShare()">SHARE WITH A FRIEND</h5>

				</div>
			</li>
			<li>
				<div>
					<h5 onclick="ShowContactUs()">CONTACT US</h5>


				</div>
			</li>
			</li>
		</div>
		<div id="noover">
		<div id="Contacts">
			<h5 class = "NormalCharacterStyle1">Project Banana</h5>
			<p class = "NormalCharacterStyle">Rachelsmolen</p>
			<p class = "NormalCharacterStyle">5612 MA</p>
			<p class = "NormalCharacterStyle">Eindhoven</p>
			<p class = "NormalCharacterStyle">Nederland</p>
		</div>
		<div id="social">
			<ul>
			<li>
			<!-- FACEBOOK -->
				<a href="default.php" >
				<img
					src="ImgContent\Default\Facebook.png"
						alt="FACEBOOK LINK">
				</a>
			</li>
			<li>
			<!-- FACEBOOK -->
				<a href="default.php" >
				<img
					src="ImgContent\Default\Twitter.png"
						alt="Twitter LINK">
				</a>
			</li>
			<li>
			<!-- FACEBOOK -->
				<a href="default.php" >
				<img
					src="ImgContent\Default\Google.png"
						alt="GOOGLE LINK">
				</a>
			</li>
			</li>
		</div>
		</div>
	</div>

</body>
</html>
