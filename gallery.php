<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="js/style.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="lightbox.css"/>
<script type="text/javascript" src="js/lightbox.min.js"></script>

<!--<script>
// JavaScript Document
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
	
});
</script>-->
</head>

<body>
<div class="container">
<?php
include"header.php";
?>


 <?php
include 'connection.php';

$query = "select * from actgallery where sn<5";
$run = mysqli_query($con,$query);
?><div class="bas">
<p>Basantapur</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php } ?>
<a href="viewmore.php?viewbasantapur"><div class="viewmore1">View more</div></a>
</div>

<div class="patan">
<?php

$query = "select * from patan where sn<5";
$run = mysqli_query($con,$query);
?><div class="bas">
<p >Patan</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php } ?>
</div>
<a href="viewmore.php?viewpatan"><div class="viewmore2">View more</div></a>
</div><!---patan-->



<div class="bhaktapur">
<?php

$query = "select * from bhaktapur where sn<5";
$run = mysqli_query($con,$query);
?><div class="bas">
<p >Bhaktapur</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php } ?>
</div>
<a href="viewmore.php?viewbhaktapur"><div class="viewmore">View more</div></a>
</div><!---bhaktapur-->

<div class="changunarayan">
<?php
$query="select * from changunarayan where sn<5";
$run=mysqli_query($con,$query);?><div class="bas">
<p >Changunarayan</p>
</div>
<div class="background">
<?php
while($value=mysqli_fetch_array($run)){?>
<div class="image">
<a href="image/<?php echo $value['Image']?>"data-lightbox="roadtrip"><img src="image/<?php echo
$value['Image']?>"</a></div>
<div class="title">
<?php 
echo $value['name']?></div>

<?php } ?>
</div>
<a href="viewmore.php?viewchangunarayan"><div class="viewmore">view more</div></a>
</div><!--changunarayan-->

<div class="swayambhunath">
<?php

$query = "select * from swayambhu where sn<5";
$run = mysqli_query($con,$query);
?><div class="bas">
<p>Swayambhunath</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php } ?>
</div>
<a href="viewmore.php?viewswayambhu"><div class="viewmore">View more</div></a>
</div><!---swayambhunath-->


<div class="bouddhanath">
<?php

$query = "select * from bouddha where sn<5";
$run = mysqli_query($con,$query);
?><div class="bas">
<p >Bouddhanath</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php } ?>
</div>
<a href="viewmore.php?viewbouddha"><div class="viewmore">View more</div></a>
</div><!---bouddhanath-->
<div class="pashupatinath">
<?php

$query = "select * from ppp where sn<5";
$run = mysqli_query($con,$query);
?><div class="bas">
<p >Pashupatinath</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php } ?>
</div>
<a href="viewmore.php?viewpashupati"><div class="viewmore">View more</div></a>
</div>
<!--pashupatinath-->
<div class="sagarmatha">
<?php
$query = "select * from sagarmatha where sn<5";
$run = mysqli_query($con,$query);
?><div class="bas">
<p >Sagarmatha</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php } ?>
</div>
<a href="viewmore.php?viewsagarmatha"><div class="viewmore">View more</div></a>
</div><!---sagarmatha-->
<div class="chitwan">
<?php
$query = "select * from chitwan where sn<5";
$run = mysqli_query($con,$query);
?><div class="bas">
<p >Chitwan </p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php } ?>
</div>
<a href="viewmore.php?viewchitwan"><div class="viewmore">View more</div></a>
</div><!---chitwan-->
<div class="lumbini">
<?php
$query = "select * from lumbini where sn<5";
$run = mysqli_query($con,$query);
?><div class="bas">
<p >Lumbini</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php } ?>
</div>
<a href="viewmore.php?viewlumbini"><div class="viewmore">View more</div></a>
</div><!---lumbini-->
</div><!--container-->

<?php
include"footer.php";
?>
</body>
</html>