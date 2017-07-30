<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="js/style.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="lightbox.css">
    
    <div class="container">
    <?php
		include 'header.php';
	?>
<?php
include'connection.php';
if(isset($_GET['viewbhaktapur'])){
	$query = "select * from bhaktapur where sn>4";
$run = mysqli_query($con,$query);
 ?>
 <div class="bas">
<p >Bhaktapur</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php
}
?>
<?php
}
else if(isset($_GET['viewbasantapur'])){
	$query = "select * from actgallery where sn>4";
$run = mysqli_query($con,$query);
 ?>
 <div class="bas">
<p>Basantapur</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>

<?php

}
?>
<?php
}
else if(isset($_GET['viewpatan'])){
	$query = "select * from patan where sn>4";
$run = mysqli_query($con,$query);
 ?>
 <div class="bas">
<p >Patan</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>
<?php
}
?>

<?php
}
else if(isset($_GET['viewchangunarayan'])){
$query="select * from changunarayan where sn>4";
$run=mysqli_query($con,$query);	
	
?>
<div class="bas">
<p >Changunarayan</p>
</div>
<div class="background">
<?php while($value=mysqli_fetch_array($run)){?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo
$value['Image']?>"</a>
</div>
<div class="title">
<?php
echo $value['name']?></div>
<?php } ?>

<?php
}
else if(isset($_GET['viewswayambhu'])){
$query="select * from swayambhu where sn>4";
$run=mysqli_query($con,$query);	
	
?>
<div class="bas">
<p id=swayambu>Swayambhunath</p>
</div>
<div class="background">
<?php while($value=mysqli_fetch_array($run)){?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo
$value['Image']?>"</a>
</div>
<div class="title">
<?php
echo $value['name']?></div>
<?php } ?>

<?php } 
else if(isset($_GET['viewbouddha'])){
$query="select * from bouddha where sn>4";
$run=mysqli_query($con,$query);	
	
?>
<div class="bas">
<p id=bouddha>Bouddhanath</p>
</div>
<div class="background">
<?php while($value=mysqli_fetch_array($run)){?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo
$value['Image']?>"</a>
</div>
<div class="title">
<?php
echo $value['name']?></div>
<?php } ?>
<?php
}
else if(isset($_GET['viewpashupati'])){
	$query = "select * from ppp where sn>4";
$run = mysqli_query($con,$query);
 ?>
 <div class="bas">
<p id=pashu>Pashupatinath</p>
</div>
<div class="background">	
<?php while($value = mysqli_fetch_array($run)) { ?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo $value['Image']?>"</a>
</div>

<div class="title">
<?php echo $value['name']?></div>
<?php
}
?>

<?php
}
else if(isset($_GET['viewchitwan'])){
$query="select * from chitwan where sn>4";
$run=mysqli_query($con,$query);	
	
?>
<div class="bas">
<p id=chit>Chitwan national park</p>
</div>
<div class="background">
<?php while($value=mysqli_fetch_array($run)){?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo
$value['Image']?>"</a>
</div>
<div class="title">
<?php
echo $value['name']?></div>
<?php } ?>
<?php
}
else if(isset($_GET['viewsagarmatha'])){
$query="select * from sagarmatha where sn>4";
$run=mysqli_query($con,$query);	
	
?>
<div class="bas">
<p id=chit>Sagarmatha</p>
</div>
<div class="background">
<?php while($value=mysqli_fetch_array($run)){?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo
$value['Image']?>"</a>
</div>
<div class="title">
<?php
echo $value['name']?></div>
<?php } ?>
<?php
}
else if(isset($_GET['viewlumbini'])){
$query="select * from lumbini where sn>4";
$run=mysqli_query($con,$query);	
	
?>
<div class="bas">
<p id=lum>Lumbini</p>
</div>
<div class="background">
<?php while($value=mysqli_fetch_array($run)){?>
<div class="image">
<a href="image/<?php echo $value['Image']?>" data-lightbox="roadtrip"><img src="image/<?php echo
$value['Image']?>"</a>
</div>
<div class="title">
<?php
echo $value['name']?></div>
<?php } ?>
<?php }
 ?>
 
</div><!--container-->

<?php 

include 'footer.php';
?>