//for all// JavaScript Document
function check()
{
	var location,msg,col;
if(document.getElementById('name').value=="")
{
	location="errname";
	msg="*";
	col="red";
	validation(location,msg,col);
	return false;
}

else if(document.getElementById('email').value=="")
{
	location="erremail";
	msg="*";
	col="red";
	validation(location,msg,col);
	return false;
}
else if(document.getElementById('pass').value=="")
{
	location="errpass";
	msg="*";
	col="red";
	validation(location,msg,col);
	return false;
}
else if(document.getElementById('cpass').value=="")
{
	location="errcpass";
	msg="*";
	col="red";
	validation(location,msg,col);
	return false;
}
else
{
	return true;
}

}
//for validation
function validation(location,msg,col)
{
	document.getElementById(location).innerHTML=msg;
	document.getElementById(location).style.color=col;
	document.getElementById(location).style.borderColor=col;
	document.getElementById(location).style.borderBottomWidth='1px';
}
//for name
function chknam()
{
	var location,msg,col;
	var nam=document.getElementById('name');
	if(nam.value=="")
	{
	location="errname";
	msg="*";
	col="red";
	validation(location,msg,col);
	return false;	
	}
	
	else if(!nam.value.match(/^[a-zA-Z0-9._\-\ ]{8,}$/))
	{
	location="errname";
	msg="enter your name";
	col="blue";
	validation(location,msg,col);
	return false;	
		
	}
	else
	{
	location="errname";
	msg="valid";
	col="green";
	validation(location,msg,col);
	return true;
		
	}
		
	
}

//for email
function chkemail()
{
	var location,msg,col;
	var emal=document.getElementById('email');
	if(emal.value=="")
	{
	location="erremail";
	msg="*";
	col="red";
	validation(location,msg,col);
	return false;	
	}
	
	else if(!emal.value.match(/^[a-zA-Z0-9._\-]+[@]+[yahoo|gmail]+[.]+[com|in]{2,3}$/))
	{
	location="erremail";
	msg="enter your email in correct format// abcd@yahoo.com";
	col="blue";
	validation(location,msg,col);
	return false;	
		
	}
	else
	{
	location="erremail";
	msg="valid";
	col="green";
	validation(location,msg,col);
	return true;	
		
		
	}

}
//for password
function chkpass()
{
	var location,msg,col;
	var pas=document.getElementById('pass');
	if(pas.value=="")
	{
	location="errpass";
	msg="*";
	col="red";
	validation(location,msg,col);
	return false;	
	}
	
	else if(!pas.value.match(/^[a-zA-Z0-9._\-]{8,}$/))
	{
	location="errpass";
	msg="enter your password of atleast 8 character";
	col="blue";
	validation(location,msg,col);
	return false;	
		
	}
	else
	{
	location="errpass";
	msg="valid";
	col="green";
	validation(location,msg,col);
	return true;	
		
		
	}

}
//for confirmation password
function chkcpass()
{
	
	var location,msg,col;
	var cpas=document.getElementById('cpass');
	
	if(cpas.value=="")
	{
		location="errcpass";
		msg="*";
		col="red";
		validation(location,msg,col);
		return false;	
	}
	
	else if(cpas.value==document.getElementById('pass').value)
	{
		location="errcpass";
		msg="matched";
		col="green";
		validation(location,msg,col);
		return true;	
		
	}
	else
	{
		location="errcpass";
		msg="not matched";
		col="blue";
		validation(location,msg,col);
		return false;
	}
	

}