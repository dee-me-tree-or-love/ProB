<DOCTYPE! html>
<?php
$headercont = '';
$footercont = '';
require_once 'Integral/header.php';
require_once 'Integral/footer.php';
?>
    
<head>
	<title>Account</title>
</head>
<body>
	<!-- Header -->
	<div id="header">
<!-- Place for PHP-->
                <?php echo $headercont;?>
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
		<!-- Place for PHP-->
                <?php echo $footercont;?>
	</div>

</body>
</html>
