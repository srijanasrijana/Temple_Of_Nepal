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
	$('.inner').hide();
	$('.Heritage1').click(function(){
		$('.inner').slideToggle(500);
		});
	
});