
var d=new Date();
var time=d.getHours();

if(time<10)
{
	document.write("<center><b><h1>GOOD MORNING !!!</h1></b></center>");
}

else if(time>=10 && time<16)
{
	document.write("<center><b><h1>GOOD DAY !!!</h1></b></center>");
}

else
{
	document.write("<center><b><h1>Hello !!!!</h1></b></center>");
}




function enableButton()
{
	if(document.getElementById("remember").checked)
	{
		document.getElementById("button1").disabled=false;
		
	}
	
	else
	{
		document.getElementById("button1").disabled=true;
	}
}


function loadGiftDetails(details){
	if(details=="button1")
	{
	document.getElementById("img1").src="../image/gift1.jpg";
	document.getElementById("para").innerHTML="";
											
	}

	else if(details=="button2")
	{
	document.getElementById("img1").src="../image/gift2.png";
	document.getElementById("para").innerHTML="";
											
	}

	else if(details=="button3")
	{
	document.getElementById("img1").src="../image/gift3.jpg";
	document.getElementById("para").innerHTML="";
											
	}

	else if(details=="button4")
	{
	document.getElementById("img1").src="../images/01.png";
	document.getElementById("para").innerHTML="";
											
	}

	else if(details=="button4")
	{
	document.getElementById("img1").src="../images/01.png";
	document.getElementById("para").innerHTML="";
											
	}

	else if(details=="button5")
	{
	document.getElementById("img1").src="../images/01.png";
	document.getElementById("para").innerHTML="";
											
	}

	if(details=="button6")
	{
	document.getElementById("img1").src="../images/01.png";
	document.getElementById("para").innerHTML="";
											
	}

	else if(details=="button7")
	{
	document.getElementById("img1").src="../images/01.png";
	document.getElementById("para").innerHTML="";
											
	}

	
	
}