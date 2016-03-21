<DOCTYPE! html>
<?php
$headercont = '';
$footercont = '';

require_once 'Integral/header.php';
require_once 'Integral/footer.php';

?>
    
<head>
	<title>ProB</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
	<link rel="stylesheet" type="text/css" href="css\signup.css">
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
		<!-- Place for PHP-->
                <?php echo $footercont;?>
	</div>
</body>
</html>