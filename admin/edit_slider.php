<html>
	<body>


<?php

include("db/db.php");

$edit_id = @$_GET['edit_slide'];
$query = "select * from slider2 where slider2_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['slider2_id'];
			
		$image= $row['images'];
		
		
		$image2= $row['images2'];
		
		
		$image3= $row['images3'];
		
	
		$image4= $row['images4'];
	
	$image5= $row['images5'];
		
	
		$image6= $row['images6'];
			



?>

<form method="post" action="edit_slider.php?edit_form_s=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Changing Slider</h1></td>
			
			
		</tr>
		<tr>
			<td align="right">Slider Image</td>
			<td><input type="file" name="images" >
			<img src="images/<?php echo $image?>" width="60" height="60">
			</td>
		</tr>
		<tr>
			<td align="right">Slider Image 2</td>
			<td><input type="file" name="images2" >
			<img src="images/<?php echo $image2?>" width="60" height="60">
			</td>
		</tr>
		<tr>
			<td align="right">Slider Image 3</td>
			<td><input type="file" name="images3" >
			<img src="images/<?php echo $image3?>" width="60" height="60">
			</td>
		</tr>
		<tr>
			<td align="right">Slider Image4</td>
			<td><input type="file" name="images4" >
			<img src="images/<?php echo $image4?>" width="60" height="60">
			</td>
		</tr>
		
			<tr>
			<td align="right">Slider Image 5</td>
			<td><input type="file" name="images5" >
			<img src="images/<?php echo $image5?>" width="60" height="60">
			</td>
		</tr>
		<tr>
			<td align="right">Slider Image 6</td>
			<td><input type="file" name="images6" >
			<img src="images/<?php echo $image6?>" width="60" height="60">
			</td>
		</tr>
		
		
		<tr>
			
			<td align="center" colspan="5"><input type="submit" name="update" value="Update Now"></td>
		</tr>
		
		
		<?php } ?>
	</table>
	
	
	
</form>

</body>
</html>

<?php
if(isset($_POST['update'])){
	
	$update_id = $_GET['edit_form_s'];
	
	$images= $_FILES['images']['name'];
	$temp_images= $_FILES['images']['tmp_name'];
	
	
	$images2= $_FILES['images2']['name'];
	$temp_images2= $_FILES['images2']['tmp_name'];
	
	$images3= $_FILES['images3']['name'];
	$temp_images3= $_FILES['images3']['tmp_name'];
	
	$images4= $_FILES['images4']['name'];
	$temp_images4= $_FILES['images4']['tmp_name'];
		
	$images5= $_FILES['images5']['name'];
	$temp_images5= $_FILES['images5']['tmp_name'];
	
	$images6= $_FILES['images6']['name'];
	$temp_images6= $_FILES['images6']['tmp_name'];
	
	
	
	
		
		//uploading images to its folder
		move_uploaded_file($temp_images,"images/$images");
	    move_uploaded_file($temp_images2,"images/$images2");
	    move_uploaded_file($temp_images3,"images/$images3");
	    move_uploaded_file($temp_images4,"images/$images4");
	 move_uploaded_file($temp_images5,"images/$images5");
	    move_uploaded_file($temp_images6,"images/$images6");
		
		$update_query ="update slider2 set images='$images',  images2='$images2',  images3='$images3',  images4='$images4', images5='$images5',  images6='$images6' where slider2_id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Slider has been published','_self')</script>";
	}
}





?>












