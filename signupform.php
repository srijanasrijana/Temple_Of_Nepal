<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/style.js"></script>
<script src="js/jquery.js"></script>
<script src="js/valid.js"></script>
</head>
<!--<script>
$(document).ready(function(){
	$('.menubar1').hide();
	$(window).scroll(function(){
			if($(window).scrollTop()>=200)
			{
				$('.menubar1').slideDown(100);
			
			}
			else
			{
				$('.menubar1').hide();
			}	
	
});
$('.s2').hide();
$('.s1').click(function(){
	$('.s2').slideToggle(500);
	
	
	});
	
});</script>-->

<body>
 <div class="container">
<?php
include"header.php";


?>
<div class="form1">
<form action="signupaction.php" method="post" enctype="multipart/form-data">
	<p id="uname">User Name:<input type="text"id="name" name="UserName" placeholder="UserName" onkeyup="return chknam()"><span id="errname"></span></p><br><br>
   <p id="uname"> Email Id:<input type="email"id="name" name="Email" placeholder="Email ID" onkeyup="return chkemail()"><span id="erremail"></span></p><br><br>
    <p id="uname">Password:<input type="password"id="name" name="Password" placeholder="Password" onkeyup="return chkpass()"/><span id="errpass"></span></p><br><br>
    <p id="uname">Confirm Password:<input type="name"id="name" name="Cpassword" placeholder="Confirm-Password" onkeyup="return chkcpass()"/><span id="errcpass"></span></p><br><br>
     <?php
	session_start();


	?>
    </p>
    <input type="submit" value="signup" name="submit" id="name" onclick="return check()">
</form>
</div>
</div>
<?php
include"footer.php";
?>
</body>
</html>