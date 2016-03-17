<DOCTYPE! html>

<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\about.css">
		<script src="Javascript\hefo.js"></script>
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
<div id="Content">
			<div id="Buttons">
					<a class="section" href="about.php">Who are we?</a>
					<a class="section" href="aboutOurMission.php">Our mission</a>
			</div>
						<div id = "info_body">
							<p style="clear:both">
<p> Project Banana works for fair and equitable production and trade in bananas based on environmental, social and economic sustainability.
</p>

<h4> Our vision is a banana world where:</h4>
<ul>
<li>Every worker in the chain receives a living wage and is able to exercise all her/his individual and collective rights in the workplace.</li>
<li>All economic stakeholders along the chain pay a decent wage and respect all relevant international labour standards.</li>
<li>Small-scale and family farmers make a decent living from selling to international banana markets.</li>
<li>Consumers can buy good quality bananas and understand the need for pricing that will guarantee decent livelihoods for producers and workers.</li>
<li>The negative impacts of banana production on the natural environment are understood and addressed.</li>
</ul>
<ul>
<h4> Our values:</h4>
<li>Impartiality and rigour in the collection and analysis of information and evidence.</li>
<li>Openness and inclusivity towards all players in the chain who seek equitable and sustainable solutions.</li>
<li>Independence from governmental and business interests.</li>
<li>Highest standards of ethical conduct: integrity, transparency and accountability.</li>
</ul>
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
					<div id="share_form">
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
