<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="js/style.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<style>
fieldset
{
	width:300px;
	height:300px;
	background:#CCC;
}
input
{
	width:200px;
	height:30px;
	border-radius:5px;
	margin:20px 40px;
}


</style>
</head>

<body>
<div class="container">
	<?php
		include "header.php";	
	
	?>
    <div class="main">
    <fieldset>
    <legend>Login</legend>
    	<form method="post" action="loginaction.php">
        	<input type="text"  placeholder="User name" name="username"/>
            <input type="password" placeholder="password" name="password"/>
            <input type="checkbox"  style="width:20px; height:20px;"name="check"  />Remember me
            <input type="submit" style="width:100px" value="login" name="submit" />
        
        
        </form>
    </fieldset>
    
    </div>
    
    <?php
		include "footer.php";
	?>
</div>
</body>
</html>