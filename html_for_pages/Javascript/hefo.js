// Only the entry boxes currently are shown, since authorizations is not yet implemented
function ShowAccountEnter(){
	document.getElementById("account_form_in").style.display = "block"
	document.getElementById("account_form_out").style.display = "none"
	document.getElementById("share_form").style.display = "none"
	document.getElementById("contact_us_form").style.display = "none"
}
function ShowShare(){
	document.getElementById("account_form_in").style.display = "none"
	document.getElementById("account_form_out").style.display = "none"
	document.getElementById("share_form").style.display = "block"
	document.getElementById("contact_us_form").style.display = "none"
}
function ShowContactUs(){
	document.getElementById("account_form_in").style.display = "none"
	document.getElementById("account_form_out").style.display = "none"
	document.getElementById("share_form").style.display = "none"
	document.getElementById("contact_us_form").style.display = "block"
}
/* In development
function ShowAccountInfo(){
	document.getElementById("account_form_in").style.display = "none"
	document.getElementById("account_form_out").style.display = "block"
	document.getElementById("share_form").style.display = "none"
	document.getElementById("contact_us_form").style.display = "none"
}
*/