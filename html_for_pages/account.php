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
        <input type="checkbox" name="Newsletter ProB" value="Newsletter ProB">
            I want to receive the Project Banana newsletter and emails about 
            other Project Banana campaigns<br>
        </form>
        <form action="">
        <input type="submit" value="Save Changes" class="btn" id="save_btn"/>
        </form>
    </div>

    <div id="stats" class="sect right">
            <h1>Statistics</h1>
        <div class="Statistics">
                <label for="your_donations">Your Donations</label>
                <input autofocus="autofocus" class="form-control" required="required" type="number" name="your_donation" id="your_donation" readonly/>
              </div>
        <div class="Statistics">
                <label for="your_donations">Video Views</label>
                <input autofocus="autofocus" class="form-control" required="required" type="number" name="shares" id="shares" readonly/>
              </div>
        <div class="Statistics">
                <label for="your_donations">Total Donations</label>
                <input autofocus="autofocus" class="form-control" required="required" type="number" name="total_donations" id="total_donations" readonly/>
              </div>
        <div class="Statistics">
                <label for="your_donations">Total Video Views</label>
                <input autofocus="autofocus" class="form-control" required="required" type="number" name="total_shares" id="total_shares" readonly/>
              </div>
    </div>
</div>

    
    
<div id="ActionDonate" class="horizontal">
    <div id="afilVid" class="sect left">
        <h1>Take Action</h1>
            <?php require_once 'account/affilVideo.php';?>
    
    </div>
    <div id="Donate" class="sect right">
        <h1>Donate</h1>

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
        <input type="submit" name="DONATE" value="DONATE" class="btn" id="donate_btn"/>
        </p>

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
