// The following functions change the attributes of the 'more' boxes for each foundation.
// It would've been very nice if we could use one instead with passing the element's id as argument of the fucntion
// But we didn't manage to find out how to do this.
// For WBF
function DisplayMore1()
{
	document.getElementById("ed1").style.background =  "rgba(240, 198, 79, 0.7)";
	document.getElementById("ed1").style.overflow = "visible";
	document.getElementById("ed1").style.height = "auto";
}
function HideMore1()
{
	document.getElementById("ed1").style.height = "0.2%";
		document.getElementById("ed1").style.background =  "rgba(240, 198, 79, 0)";
	document.getElementById("ed1").style.overflow = "hidden";
	
}
// For FT
function DisplayMore2()
{
	document.getElementById("extra_FAIRTRADE").style.background =  "rgba(240, 198, 79, 0.7)";
	document.getElementById("extra_FAIRTRADE").style.overflow = "visible";
	document.getElementById("extra_FAIRTRADE").style.height = "auto";
}
function HideMore2()
{
	document.getElementById("extra_FAIRTRADE").style.height = "0.2%";
		document.getElementById("extra_FAIRTRADE").style.background =  "rgba(240, 198, 79, 0)";
	document.getElementById("extra_FAIRTRADE").style.overflow = "hidden";
	
}
// For Corbana
function DisplayMore3()
{
	document.getElementById("ed3").style.background =  "rgba(240, 198, 79, 0.7)";
	document.getElementById("ed3").style.overflow = "visible";
	document.getElementById("ed3").style.height = "auto";
}
function HideMore3()
{
	document.getElementById("ed3").style.height = "0.2%";
	document.getElementById("ed3").style.background =  "rgba(240, 198, 79, 0)";
	document.getElementById("ed3").style.overflow = "hidden";
	
}
// For BI
function DisplayMore4()
{
	document.getElementById("ed4").style.background =  "rgba(240, 198, 79, 0.7)";
	document.getElementById("ed4").style.overflow = "visible";
	document.getElementById("ed4").style.height = "auto";
}
function HideMore4()
{
	document.getElementById("ed4").style.height = "0.2%";
	document.getElementById("ed4").style.background =  "rgba(240, 198, 79, 0)";
	document.getElementById("ed4").style.overflow = "hidden";
	
}
// For
function DisplayMore5()
{
	document.getElementById("ed5").style.background =  "rgba(240, 198, 79, 0.7)";
	document.getElementById("ed5").style.overflow = "visible";
	document.getElementById("ed5").style.height = "auto";
}
function HideMore5()
{
	document.getElementById("ed5").style.height = "0.2%";
	document.getElementById("ed5").style.background =  "rgba(240, 198, 79, 0)";
	document.getElementById("ed5").style.overflow = "hidden";
	
}
//




/* TEST
function Alerted()
{

window.alert(5 + 6);

}
*/