<DOCTYPE! html>

<head>
	<title>Account</title>
</head>
<body>
		<!-- Header -->
	<div id="header">

		<div id = "home">
			<a href="index.html" >
				ProB
			</a>
		</div>




		<div id="menu">
			<ul id="pages">
				<li>
					<a href="about.html" class="header">
						<div class="navig">
							About
						</div>
					</a>
				</li >
				<li>
					<a href="foundations.html" class="header">
						<div class="navig">
							Foundations
						</div>
					</a>
				</li>
				<li>
					<a href="learnMore.html" class="header">
						<div class="navig">
							Learn More
						</div>
					</a>
				</li>
				<li>
					<a href="articles.html" class="header">
						<div class="navig">
							Articles
						</div>
					</a>
				</li>
				<li>
					<a href="contribute.html" class="header">
						<div class="navig">
							Contribute
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>

<!-- Main -->
<div id="Personal_Details">
<h1>Personal Details</h1>
</div>
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
            <input autofocus="autofocus" class="form-control" required="required" type="number" name="phone" id="phone" />
          </div>
<form action="">
<input type="checkbox" name="Newsletter ProB" value="Newsletter ProB">I want to receive the Project Banana newsletter and emails about other Project Banana campaigns<br>
</form>
<form action="">
<input type="submit" value="Save Changes">
</form>
<hr>
<h1>Statistics</h1>
<div class="Statistics">
            <label for="your_donations">Your Donations</label>
            <input autofocus="autofocus" class="form-control" required="required" type="number" name="your_donation" id="your_donation" readonly/>
          </div>
<div class="Statistics">
            <label for="your_donations">Shares</label>
            <input autofocus="autofocus" class="form-control" required="required" type="number" name="shares" id="shares" readonly/>
          </div>
<div class="Statistics">
            <label for="your_donations">Total Donations</label>
            <input autofocus="autofocus" class="form-control" required="required" type="number" name="total_donations" id="total_donations" readonly/>
          </div>
<div class="Statistics">
            <label for="your_donations">Total Shares</label>
            <input autofocus="autofocus" class="form-control" required="required" type="number" name="total_shares" id="total_shares" readonly/>
          </div>
<hr>
<h1>Take Action</h1>
<img src="" alt="" style="width:400px;height:35px;"><h4>Support</h4><br>
<img src="" alt="" style="width:400px;height:35px;"><h4>Support</h4><br>
<img src="" alt="" style="width:400px;height:35px;"><h4>Support</h4><br>
<img src="" alt="" style="width:400px;height:35px;"><h4>Support</h4><br>
<img src="" alt="" style="width:400px;height:35px;"><h4>Support</h4><br>
<hr>
<div id="Donate">
<h1>Donate</h1>
</div>
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
<p>
<input type="submit" name="DONATE" value="DONATE" />
</p>
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
							<form action="signup.html" method="get">
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
					<div id="share_form" onclick="HideShare()">
					<!-- THE ACTION LINK IS JUST FOR AN EXAMPLE... -->
						<div class="closeform">
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
				<a href="default.html" >
				<img
					src="ImgContent\Default\Facebook.png"
						alt="FACEBOOK LINK">
				</a>
			</li>
			<li>
			<!-- FACEBOOK -->
				<a href="default.html" >
				<img
					src="ImgContent\Default\Twitter.png"
						alt="Twitter LINK">
				</a>
			</li>
			<li>
			<!-- FACEBOOK -->
				<a href="default.html" >
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
