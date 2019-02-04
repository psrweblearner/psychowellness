<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>
<body>
<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from slider where slider_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['slider_id'];
			$slider_text_1= $row['slider_text_1'];
		$image= $row['images'];
		
		$slider_text_2= $row['slider_text_2'];
		$image2= $row['images2'];
		
		$slider_text_3= $row['slider_text_3'];
		$image3= $row['images3'];
		
		$slider_text_4= $row['slider_text_4'];
		$image4= $row['images4'];
			



?>

<form method="post" action="edit.php?edit_form=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Changing Slider</h1></td>
			
			
		</tr>
		<tr>
			<td align="right">slider_text_1</td>
			<td><textarea name="slider_text_1" id="mytextarea"><?php echo $slider_text_1; ?></textarea></td>
		</tr>
		
		
		<tr>
			<td align="right">Slider Image</td>
			<td><input type="file" name="images" >
			<img src="images/<?php echo $image?>" width="60" height="60">
			</td>
		</tr>
		
		<tr>
			<td align="right">slider_text_2</td>
			<td><textarea name="slider_text_2" id="mytextarea1"><?php echo $slider_text_2; ?></textarea></td>
		</tr>
		
		
		<tr>
			<td align="right">Slider Image 2</td>
			<td><input type="file" name="images2" >
			<img src="images/<?php echo $image2?>" width="60" height="60">
			</td>
		</tr>
		
		<tr>
			<td align="right">slider_text_3</td>
			<td><textarea name="slider_text_3" id="mytextarea2"><?php echo $slider_text_3; ?></textarea></td>
		</tr>
		
		
		<tr>
			<td align="right">Slider Image 3</td>
			<td><input type="file" name="images3" >
			<img src="images/<?php echo $image3?>" width="60" height="60">
			</td>
		</tr>
		
		<tr>
			<td align="right">slider_text_1</td>
			<td><textarea name="slider_text_4" id="mytextarea3"><?php echo $slider_text_4; ?></textarea></td>
		</tr>
		
		
		<tr>
			<td align="right">Slider Image 4</td>
			<td><input type="file" name="images4" >
			<img src="images/<?php echo $image4?>" width="60" height="60">
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
	
	$update_id = $_GET['edit_form'];
	
	$slider_text_1= $_POST['slider_text_1'];
	$images= $_FILES['images']['name'];
	$temp_images= $_FILES['images']['tmp_name'];
	
	$slider_text_2= $_POST['slider_text_2'];
	$images2= $_FILES['images2']['name'];
	$temp_images2= $_FILES['images2']['tmp_name'];
	
	$slider_text_3= $_POST['slider_text_3'];
	$images3= $_FILES['images3']['name'];
	$temp_images3= $_FILES['images3']['tmp_name'];
	
	$slider_text_4= $_POST['slider_text_4'];
	$images4= $_FILES['images4']['name'];
	$temp_images4= $_FILES['images4']['tmp_name'];
	
	
	
	
		
		//uploading images to its folder
		move_uploaded_file($temp_images,"images/$images");
	    move_uploaded_file($temp_images2,"images/$images2");
	    move_uploaded_file($temp_images3,"images/$images3");
	    move_uploaded_file($temp_images4,"images/$images4");
		
		$update_query ="update slider set slider_text_1='$slider_text_1',images='$images', slider_text_2='$slider_text_2', images2='$images2', slider_text_3='$slider_text_3', images3='$images3', slider_text_4='$slider_text_4', images4='$images4' where slider_id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Slider has been published','_self')</script>";
	}
}





?>












