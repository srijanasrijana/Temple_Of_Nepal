<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Heritage</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="icon" type="image/jpg" href="image/logo.jpg"/>
<script type="text/javascript" src="js/style.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

<script src="sliderengine1/jquery.js"></script>
    <script src="sliderengine1/amazingslider.js"></script>
    <script src="sliderengine1/initslider-1.js"></script>
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
	$('.inner').hide();
	$('.Heritage1').click(function(){
	$('.inner').slideToggle(500);
	
	
	});
	
});

</script>-->
<script>
$(document).ready(function(){
$('.inner').hide();
	$('.Heritage1').click(function(){
	$('.inner').slideToggle(500);
	
	
	});
});

</script>

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
<div class="right">
<div style="margin:30px auto;max-width:820px;">
    
    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 56px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="images/basantapur.jpeg" alt="basantapur" /></li>
            <li><img src="images/bhaktapur.jpg" alt="bhaktapur" /></li>
            <li><img src="images/bouddhanath.jpg" alt="bouddhanath" /></li>
            <li><img src="images/changunarayan.jpg" alt="changunarayan" /></li>
            <li><img src="images/chitwan.jpg" alt="chitwan" /></li>
            <li><img src="images/lumbini.jpg" alt="lumbini" /></li>
            <li><img src="images/pashupatinath.jpg" alt="pashupatinath" /></li>
            <li><img src="images/patan.jpg" alt="patan" /></li>
            <li><img src="images/sagarmatha-np.jpg" alt="sagarmatha-np" /></li>
            <li><img src="images/swayambhunath.jpg" alt="swayambhunath" /></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            <li><img src="images/basantapur-tn.jpeg" /></li>
            <li><img src="images/bhaktapur-tn.jpg" /></li>
            <li><img src="images/bouddhanath-tn.jpg" /></li>
            <li><img src="images/changunarayan-tn.jpg" /></li>
            <li><img src="images/chitwan-tn.jpg" /></li>
            <li><img src="images/lumbini-tn.jpg" /></li>
            <li><img src="images/pashupatinath-tn.jpg" /></li>
            <li><img src="images/patan-tn.jpg" /></li>
            <li><img src="images/sagarmatha-np-tn.jpg" /></li>
            <li><img src="images/swayambhunath-tn.jpg" /></li>
        </ul>
        <div class="amazingslider-engine" style="display:none;"><a href="http://amazingslider.com">jQuery Slider</a></div>
    </div>
</div>
</div>
<div class="downcont">
 <p id="para">The small mountain kingdom of Nepal is blessed with such astonishing and unique sites that within the area of 140,800 sq km Nepal holds a considerably high number of places recongnised by UNESCO (United Nations Educational Scientific Cultural Organisation) as 'World Heritage Sites'. There are altogether ten World Heritage Sites in Nepal, seven of which are in Kathmandu itself. The list includes both natural as well as cultural sites.<br /><br /><br />
 
<h2>Cultural Sites</h2>
   <p id="para"> The cultural heritage of the Kathmandu Valley is illustrated by seven groups of monuments and buildings which display the full range of historic and artistic achievements for which the Kathmandu Valley is world famous. The seven sites include the Durbar Squares of Hanuman Dhoka (Kathmandu), Patan and Bhaktapur, the Buddhist stupas of Swayambhu and Bauddhanath, and the Hindu temples of Pashupati and Changu Narayan. <br /><br />
Kathmandu Durbar Square<br />
Patan Durbar Square<br />
Bhaktapur Durbar Square<br />
Changu Narayan Temple<br />
Swayambhunath Stupa<br />
Pashupatinath Temple<br />
Lumbini<br />
Bouddhanath Stupa<br /></p><br />


<h2>Natural Sites</h2>
<p id="para">Chitwan National Park<br />
Sagarmatha National Park</p><br />

<h2>UNESCO World Heritage Sites</h2>
<p id="para">
The World Heritage List includes 830 properties forming part of the cultural and natural heritage which the World Heritage Committee considers as having outstanding universal value.These include 644 cultural, 162 natural and 24 mixed properties. Out of these 10 sites are from Nepal itself. Seven out of these are cultural and two natural.</p>
 
 
 </div>



</div><!--container-->
<?php
include"footer.php";

?>
</body>
</html>