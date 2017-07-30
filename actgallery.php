<?php
include'connection.php';
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['name'];
	$select=$_POST['select'];
$Image=$_FILES['txtimage']['name'];
$image_tmp=$_FILES['txtimage']['tmp_name'];
$extension=pathinfo($Image,PATHINFO_EXTENSION);
$random=rand(0,999999);
$new_image_name=$random.".".$extension;

if($select=="basantapur")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into actgallery (Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}

else if($select=="patan")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into patan (Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}
else if($select=="pashupatinath")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into ppp (Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}
else if($select=="bhaktapur")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into bhaktapur (Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}


else if($select=="changunarayan")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into changunarayan (Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}
else if($select=="swayambhunath")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into swayambhu(Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}


else if($select=="bouddha")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into bouddha (Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}


else if($select=="sagarmatha")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into sagarmatha(Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}

else if($select=="chitwan")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into chitwan(Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}
else if($select=="lumbini")
	   {
if(move_uploaded_file($image_tmp,"image/".$new_image_name))
{
	$query="insert into lumbini(Image,name)values('$new_image_name','$name')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"Gallery Uploaded";
	}
	
}

	else
	{
		echo"Error";
		}
}

}
?>