<?php
$headercont = '';
$footercont = '';
require_once 'Integral/header.php';
require_once 'Integral/footer.php';
?>

<head>
	<title>TEST</title>
	<link rel="stylesheet" type="text/css" href="css\hefo.css">
</head>
<body>
	<!-- Background -->
	<!--
	<div id = "bg">
		<img id="background" 
				src="home\Background.jpg" 
						alt="Background picture">
	
	</div>
	-->
	
	
	
		<!-- Header -->
	<div id="header">

		<!-- Place for PHP-->
                <?php echo $headercont;?>
	</div>

<!-- Main -->
<div id ="content">
	<p>
	askfhpakghpag
	aga
	ha
	ah
	a djh
	adih
	aha
	dfpha
	dph
	apdiha
	dfih
	adihadfhg
	adifghoaerhg
	aogh
	aeorgiha
	rgh
	aiergha
	eirgh
	aehg
	</p>
        
        <?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>
        
</div>
	<!-- Footer -->
<hr/>
	<div id = "footer">
		<?php echo $footercont; ?>
	</div>

	
	
</body>	
