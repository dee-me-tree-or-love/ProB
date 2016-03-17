<DOCTYPE! html>

<head>
	<title>ProB</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\signup.css">
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
<div id="bg">
<img src="ImgContent\signup\signupbackground.jpg"
					alt="">
				</div>
<div id="Box">
	<div id="Content">
		<h1>Sign up</h1>


	<div id="WithoutSignUp">
          <div class="form_group">
            <label for="user_email">Email</label>
            <input autofocus="autofocus" class="form-control" required="required" type="email" name="user[email]" id="user_email" />
          </div>
          <div class="form_group">
            <label for="user_password">Password</label>
            <input class="form-control" required="required" type="password" name="user[password]" id="user_password" />
          </div>
          <div class="form_group">
            <label for="user_password_confirmation">Password confirmation</label>
            <input class="form-control" required="required" type="password" name="user[password_confirmation]" id="user_password_confirmation" />
          </div>
			<div id="subscribe">
			<p>I
            <input type="radio" value="true" checked="checked" name="user[subscribe]" id="user_subscribe_true" />            <label class="radio-inline" for="user_subscribe_true">want</label>
            <input type="radio" value="false" name="user[subscribe]" id="user_subscribe_false" />            <label class="radio-inline" for="user_subscribe_false">do not want</label>
            to receive the Project Banana newsletter and emails about other Project Banana campaigns.
			</p>
			</div>
				<div id="SignUpButton">
	<input type="submit" name="SignUp" value="Sign Up" class="btn">
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
