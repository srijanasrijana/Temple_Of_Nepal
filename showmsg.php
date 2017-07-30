<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

.msg
{	background:#FFF;
min-height:500px;
	height:auto;
width:800px;
background-color:#FFF;
margin-top:200px;
margin-left:260px;
	
}



</style>



</head>

<body background="image/bg_pic1.jpg">
<div class="container">
<div class="msg">
<?php

include "connection.php";
$query="select * from mail";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{    

		echo "name:$row[2]<br>";
		echo "email:$row[3]<br><br><hr>";
				echo "message:$row[1]<br><br><br><br><br><br>";


}
?>


</div>
</div>
</body>
</html>