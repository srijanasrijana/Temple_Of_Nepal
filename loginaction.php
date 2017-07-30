<?php
include "connection.php";
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['username'];
	$pass=sha1($_POST['password']);
	$query="select * from login where username='$name' and password='$pass'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_row($result);
	if($row>0)
	{
		
		$_SESSION['user']=$row[1];
		$_SESSION['pass']=$row[2];
		$_SESSION['status']=$row[5];
		if(isset($_POST['check']))
		{
			setcookie("user","$name",time()+3600);
				setcookie("pass","$pass",time()+3600);
					setcookie("status","$row[5]",time()+3600);
		}
		header('location:adminpanel.php');
		
		
	}
	else
	{
		echo "unsucessfull";
	}

	}



?>