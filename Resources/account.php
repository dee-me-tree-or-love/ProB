<?php 
require_once 'phpfunc/checksessionperm.php';
$checkbox = '';

?>


<DOCTYPE! html>


<head>
	<title>Account</title>
      	<link rel="stylesheet" type="text/css" href="css\hefo.css">
        <link rel="stylesheet" type="text/css" href="css\account.css">
	<script src="Javascript\hefo.js"></script>
</head>
<body>
	<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php require_once 'Integral/header.php';?>
	</div>


<!-- Main -->
<div id="Content">

    
<div id="DetStats" class="horizontal">    
    <div id="Personal_Details" class="sect left">
        <h1>Personal Details</h1>
        <form role="form" method="post" action="phpfunc/UPDNAMEMAIL.php">
        <div class="form-group">
                    <span title="Here you can change your name, but email and password are needed for verification">
                        <label for="first_name">Name</label>
                    </span>
                    <input class="form-control" required="required" 
                           type="text" name="username" id="first_name" 
                           placeholder="<?php echo $_SESSION['username']; ?>"/>
                  </div>
        <div class="form-group">
                    <label for="e_mail">E- Mail</label>
                    <input class="form-control" required="required" 
                           type="email" name="email" id="e_mail" 
                           placeholder="<?php echo $_SESSION['email']; ?>"/>
                  </div>
        <div class="form-group">
                    <label for="phone">Password</label>
                    <input class="form-control" required="required" 
                           type="password" name="password" id="phone" 
                           placeholder="To confirm changes"/>
                   
                  </div>
        <div>
<!--        <input type="checkbox" name="subscription" value="yes">
            I want to receive the Project Banana newsletter and emails <br>about 
            other Project Banana campaigns<br>-->
            <?php 
                //echo "<script type='text/javascript'> alert('{$_SESSION['subs']}');</script>";
                if($_SESSION['subs'] == 1)
                {
                    // subscription active
                    $checkbox = '<input type="checkbox" name="subscription" value="yes" checked>
                        I want to receive the Project Banana newsletter and emails <br>about 
                        other Project Banana campaigns<br>';
                }
                else
                {
                    // no subs
                    $checkbox = '<input type="checkbox" name="subscription" value="yes">
                        I want to receive the Project Banana newsletter and emails <br>about 
                        other Project Banana campaigns<br>';
                }
            echo $checkbox
                    ?>
        </div>
        
        <input type="submit" value="Save Changes" class="btn" id="save_btn"/>
        </form>
       
    </div>

    <div id="stats" class="sect right">
            <h1>Statistics</h1>
        <div class="Statistics">
                <label for="your_donations">Your Donations</label>
                <input  class="form-control" type="number" name="your_donation" id="your_donation" readonly value="<?php echo $_SESSION['dons']; ?>"/>
              </div>
        <div class="Statistics">
                <label for="your_donations">Your Shares</label>
                <input class="form-control" type="number" name="shares" id="shares" readonly value="<?php echo $_SESSION['shares']; ?>"/>
              </div>
        <div class="Statistics">
                <label for="your_donations">Total Donations</label>
                <input  class="form-control" type="number" name="total_donations" id="total_donations" readonly value="<?php include 'PHPFUNC/GETTOTALDONS.php' ?>"/>
              </div>
        <div class="Statistics">
                <label for="your_donations">Total Shares</label>
                <input class="form-control" type="number" name="total_shares" id="total_shares" readonly value="<?php include 'PHPFUNC/GETTOTALSHARES.php'  ?>"/>
              </div>
        <form role="form" method="post" action="phpfunc/LOGOUT.php">
        <input class="btn" type="submit" name="logout"
                        value="Log Out" />
        </form>
    </div>
</div>

    
    
<div id="ActionDonate" class="horizontal">
    <div id="afilVid" class="sect left">
        <h1>Take Action</h1>
            <?php require_once 'account/affilVideo.php';?>
    
    </div>
    <div id="Donate" class="sect right" >
        
        <h1>Donate</h1>
        <form role="form"  method="post" action="PHPFUNC/DONATE.php" >
            <div>
                <label for="Your_amount">Your amount:</label>
                <input autofocus="autofocus" class="form-control" required="required" type="number" min="0" name="your_amount" id="your_amount" />
                <h4>EUR</h4>
            </div>
        <div class="form-group">
                    <label for="">Card Holder's Name</label>
                    <input autofocus="autofocus" class="form-control" required="required" type="text" name="card_holder's_name" autocomplete="off" id="card_holder's_name" />
                  </div>
        <div class="form-group">
                    <label for="">Credit Card's Number</label>
                    <input autofocus="autofocus" class="form-control" required="required" type="text" name="credit_card_number" autocomplete="off" id="credit_card_number" />
                  </div>
        <div class="form-group">
                    <label for="">Card's CVV</label>
                    <input autofocus="autofocus" class="form-control" required="required" type="text" name="card_CVV" autocomplete="off" id="card_CVV" />
                  </div>
        <div class="form-group">
                    <label for="">Card's Expiration Date</label>
                    <input autofocus="autofocus" class="form-control" required="required" type="month" name="month" autocomplete="off" id="month" min="2016-05">
                  </div>
        <p>
        <input type="submit" name="DONATE" value="DONATE" class="btn" id="donate_btn"/>
        </p>
        </FORM>
    </div>
</div>



</div>
<!-- end contents -->

<!-- Footer -->
	<div id = "footer">
		<!-- Place for PHP-->
                <?php require_once 'Integral/footer.php';?>
	</div>
</body>
</html>
