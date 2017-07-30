<form action="actgallery.php" method="post" enctype="multipart/form-data">
select an category:<br /><select name="select">
    	 <option disabled="disabled" selected="selected">choose the category</option>
    	 <option value="basantapur">basantapur</option>
  		 <option value="patan">patan</option>
         <option value="bhaktapur">bhaktapur</option>
         <option value="pashupatinath">Pashupatinath</option>
         <option value="changunarayan">Changunarayan</option>
         <option value="swayambhunath">Swayambhunath</option>
         
         <option value="bouddha">Bouddhanath</option>
         <option value="sagarmatha">Sagarmatha</option>
         <option value="chitwan">Chitwan</option>
         <option value="lumbini">Lumbini</option>
    </select><br /><br />
Image:<br /><input type="file" required name="txtimage" /><br /><br />
Name:<input type="text" placeholder="name of the image" name="name"/>
<input type="submit" name="btnsubmit" value="add" />
</form>