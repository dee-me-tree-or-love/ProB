<div id='accountOut' style="text-align: center; font-family: Copperplate Gothic Light;">
    <p style="margin-top: 4pt; margin-bottom: 2pt; 
       margin-left: 4pt; margin-left: 4pt;
       font-size: 12pt;">Hello, <?php echo $_SESSION['username']?>!</p>
    <a href = 'account.php' style="margin-top: 4pt; 
       margin-bottom: 2pt;
       text-decoration: none;
       color: #FFFBF0;
       font-size: 10pt;
       ">Your Account</a>
    <br>

    <!-- WHERE XXXX IS THE USER'S NAME  -->
    <input class="bttn" type="submit" name="sign_out"
            value="Sign Out" 
        style="margin-top: 4pt; margin-bottom: 2pt;
        font-family: Copperplate Gothic bold;
	font-size : 85%;
	color : #828282;
	color : rgb(130, 130, 130);
	background : #F0C64F;
	background :  rgba(255, 251, 240,1);
	border: none;
	padding-left:1pt;
	padding-right:1pt;
	width:auto;
	height: 5%;
	margin-bottom:2%;"/>
</div>    