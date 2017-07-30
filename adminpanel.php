<?php
session_start();
if((isset($_COOKIE['user']) and isset($_COOKIE['pass']))||(isset($_SESSION['user']) and isset($_SESSION['pass'])))
{
?>
<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="js/style.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>
<div class="container">
	
<?php
include "header.php";
echo "<div class=\"main\">";

if(isset($_SESSION['status'])||isset($_COOKIE['status']))
{
	if($_COOKIE['status']=="admin"||$_SESSION['status']=="admin")
	{
		echo "<a href=\"addimage.php\">Add image</a>";
		echo"<br>";
		echo "<a href=\"showmsg.php\">show message</a>";
	}
	if($_COOKIE['status']==""||$_SESSION['status']=="")
	{
		header('location:index.php');	
	}
}
	?>
<a href="logout.php">logout</a>

</div>
<?php
include "footer.php";

?>
</div>
</body>
</html>
<?php
}
else
{
	header('location:login.php');
}

?>