<?php
$footercont = '';
require_once 'Integral/header.php';
include 'phpfunc/checkSessionMeth.php';
$sessionInd;
$sessionInd = isStarted();

?>



<!--                         FOOTER GENERAL TEMPLATE                                        -->
		<!-- to enter -->
		<div id="account_form_in">
                    <!-- SHOWN WHEN THE USER HAS LOGGED IN -->
                    <?php 
                        
                        
                        if($sessionInd == 1){
                            require_once 'PopUpDet/LOGOUTpop.php';
                        }else{
                            require_once 'PopUpDet/SIGNINpop.php';
                        }
                    
                    ?>
		</div>

		
                <!-- needed present because of the js -->
					<div id="account_form_out">
                                            
					</div>


		<!-- A FORM SHOWN ON CLICK SENDERS NAME IS OPTIONAL -->
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



<!--		  to send us messages 
		 <div id="contact_us_form">
		 		 THE ACTION LINK IS JUST FOR AN EXAMPLE... 
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
		
				</div>-->


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
					<h5 onclick="ContactUs()">CONTACT US</h5>

<script>
function ContactUs()
{
    window.open("mailto:ddeivis2012@gmail.com");
}
</script>

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
