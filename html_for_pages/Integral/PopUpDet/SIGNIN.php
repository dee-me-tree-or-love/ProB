					<!-- THE ACTION LINK IS JUST FOR AN EXAMPLE... -->
									<!-- SHOWN WHEN THE USER HAS NOT LOGGED IN -->
					<div class="closeform" onclick="HideAccountEnter()">
								<p>X</p>
							</div>
				<form action="PHPFUNC/LOGIN.php" method="post">
							
                                                        <p>E-Mail:
								<input type="text" name="e-mail" size="15"
								maxlength="30" />
							</p>
							<p>Password:
								<input type="password" name="password" size="15"
								maxlength="30" />
							</p>
							
							<input class="bttn" type="submit" name="sign_in"
								value="Sign In" />
							<!-- A way to make the button act like a link-->
							
                                                            <input class="bttn" type="button" name="sign_up"
								value="Sign Up" onclick="window.location='signup.php';" />
							
				</form>			

