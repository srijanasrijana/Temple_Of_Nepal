<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mail</title>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="style.js"></script>
<style>


body, div, h1,h2, form, fieldset, input, textarea, footer,p {
	margin: 0; padding: 0; border: 0; outline: none;
}


body { color: #7c7873;}
p {text-shadow:0 1px 0 #fff; font-size:24px;}
#wrap {width:530px; margin:20px auto 0; margin-left:400px; height:1000px;}
h1 {margin-bottom:20px; text-align:center;font-size:48px; text-shadow:0 1px 0 #ede8d9; }


	#form_wrap { overflow:hidden; height:446px; position:relative; top:0px;
		-webkit-transition: all 1s ease-in-out .3s;
		-moz-transition: all 1s ease-in-out .3s;
		-o-transition: all 1s ease-in-out .3s;
		transition: all 1s ease-in-out .3s;}
	
	#form_wrap:before {content:"";
		position:absolute;
		bottom:128px;left:0px;
		background:url('images/before.png');
		width:530px;height: 316px;
		margin-left:60px;}
	
	#form_wrap:after {content:"";position:absolute;
		bottom:0px;left:0;
		background:url('images/after.png');
		width:530px;height: 260px;
		margin-left:60px; }

	#form_wrap.hide:after, #form_wrap.hide:before {display:none; }
	#form_wrap:hover {height:776px;top:-200px;}


	form {background:#f7f2ec url('images/letter_bg.png'); 
		position:relative;top:200px;overflow:hidden;
		height:200px;width:400px;margin:0px auto;padding:20px; 
		border: 1px solid #fff;
		margin-left:100px;
		border-radius: 3px; 
		-moz-border-radius: 3px; -webkit-border-radius: 3px;
		box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
		-moz-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 14px #fff;
		-webkit-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
		-webkit-transition: all 1s ease-in-out .3s;
		-moz-transition: all 1s ease-in-out .3s;
		-o-transition: all 1s ease-in-out .3s;
		transition: all 1s ease-in-out .3s;}


		#form_wrap:hover form {height:530px;}

		label {
			margin: 11px 20px 0 0; 
			font-size: 16px; color: #b3aba1;
			text-transform: uppercase; 
			text-shadow: 0px 1px 0px #fff;
		}

		input[type=text], textarea {
			font: 14px normal normal uppercase helvetica, arial, serif;
			color: #7c7873;background:none;
			width: 380px; height: 36px; padding: 0px 10px; margin: 0 0 10px 0;
			border:1px solid #f8f5f1;
			-moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px;
			-moz-box-shadow: inset 0px 0px 1px #726959;
			-webkit-box-shadow:  inset 0px 0px 1px #b3a895; 
			box-shadow:  inset 0px 0px 1px #b3a895;
		}	

		textarea { height: 80px; padding-top:14px;}

		textarea:focus, input[type=text]:focus {background:rgba(255,255,255,.35);}

		#form_wrap input[type=submit] {
			position:relative;font-family: 'YanoneKaffeesatzRegular'; 
			font-size:24px; color: #7c7873;text-shadow:0 1px 0 #fff;
			width:100%; text-align:center;opacity:0;
			background:none;
			cursor: pointer;
			-moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; 
			-webkit-transition: opacity .6s ease-in-out 0s;
			-moz-transition: opacity .6s ease-in-out 0s;
			-o-transition: opacity .6s ease-in-out 0s;
			transition: opacity .6s ease-in-out 0s;
		}

		#form_wrap:hover input[type=submit] {z-index:1;opacity:1;
			-webkit-transition: opacity .5s ease-in-out 1.3s;
			-moz-transition: opacity .5s ease-in-out 1.3s;
			-o-transition: opacity .5s ease-in-out 1.3s;
			transition: opacity .5s ease-in-out 1.3s;}

			#form_wrap:hover input:hover[type=submit] {color:#435c70;}

</style>
</head>

<body>

<div class="container">
<?php
include"header.php";
?>
<div class="left">
<div class="Heritage">
 <p id="heri">HERITAGE SITES OF NEPAL</p>
 </div>
 <ul>
<li><a href="details.php?kathmandu">Kathmandu Durbar Square</a></li>
<li><a href="details.php?patan">Patan Durbar Square</a></li>
<li><a href="details.php?bhaktapur">Bhaktapur Durbar Square</a></li>
<li><a href="details.php?changu">Changu Narayan Temple</a></li>
<li><a href="details.php?swayambhu">Swayambhunath Stupa</a></li>
<li><a href="details.php?cid=6">Pashupatinath Temple</a></li>
<li><a href="details.php?cid=7">Lumbini</a></li>
<li><a href="details.php?cid=8">Bouddhanath stupa</a></li>
<li><a href="details.php?cid=9">Chitwan National Park</a></li>
<li><a href="details.php?cid=10">Sagarmatha National Park</a></li>
</ul>
<div class="Heritage1">
 <p id="heri">Other Heritage Of Nepal</p>
 </div>
 <div class="inner">
 <ul>
 <li><a href="details.php?muktinath">Muktinath</a></li>
<li><a href="details.php?barakshetra">Baraha kshetra</a></li>
<li><a href="details.php?gosaikunda">Gosaikunda</a></li>
<li><a href="details.php?manakamana">Manakamana</a></li>
 </ul>
 </div>
</div>
<!--leftdiv-->
<div class="right">
	
		<p class="mailp">Send a message</p>
		<div id='form_wrap'>
        <?php
include "connection.php";


if(isset($_POST['submit11']))
{
	$message=$_POST['message'];
	$name= $_POST['name'];
	$email=$_POST['email'];
	$insert="insert into mail(message,name,email) values('$message','$name','$email')";
	mysqli_query($con,$insert);
}

?>
			<form method="post">
			
				<label for="email">Your Message : </label>
				<textarea  name="message" value="Your Message" id="message" ></textarea>
				<p>Best,</p>	
				<label for="name">Name: </label>
				<input type="text" name="name" value="" id="name" />
				<label for="email">Email: </label>
				<input type="text" name="email" value="" id="email" />
				<input type="submit" name ="submit11" value="Now, I send, thanks!" />
			</form>
            
		</div>
        <p id="log"><a href="logout.php">logout</a></p><br /><br />
        <p id="cont"><b>CONTACT US</b></p>
        <h2 >Heritage Nepal Pvt. Ltd</h2>
       <p>  Kathmandu , Nepal</p>
<p>Tel:-+977-1-4445882, 016222558</p>
<p>Fax:-+977-1-4432746</p>
<p>Mobile Numbers: +977-9851056569, 9751056569</p>
<p>Website:   www.heritagenepal.com , www.Heritage.com</p>
<p>Email :heritage@yahoo.com , HNepal@gmail.com</p>
<p>Contact Person:R C Panta</p>

	
    
   </div><!--right-->
    
   <?php
include"footer.php";
?> 
</div><!--container-->
</body>
</html>