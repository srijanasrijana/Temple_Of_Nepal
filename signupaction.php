<?php
session_start();
include "connection.php";
if(isset($_POST['submit']))
{
	$name=$_POST['UserName'];
	$email=$_POST['Email'];
	$pass=sha1($_POST['Password']);
	$cpass=sha1($_POST['Cpassword']);
	$query="select email from login where email='$email'";
	$result=mysqli_query($con,$query);
	if(mysql_fetch_row($result)>0)
	{
		$_SESSION['msg']="Invalid Email";
		header('location:signupform.php');
	}
	else if($pass!=$cpass)
	{
		$_SESSION['msg']="password Mismatch";
		header('location:signupform.php');
	}
	else
	{
	$query1="insert into login(username,password,confpassword,email) values('$name','$pass','$cpass','$email')";
	mysqli_query($con,$query1);
	echo"Sucessfull";
	header ('location:signupform.php');
	}
}

?>