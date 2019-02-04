<?php
include("db/db.php");



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">
	<table align="center" border="1px solid black" width="900px;">
		<tr>
			<td colspan="2" align="center">Insert slider Image from here</td>
		</tr>
		<tr><td>title</td>
		<td><input type="text" name="title"></td></tr>
		<tr><td>Image</td>
		<td><input type="file" name="images"></td></tr>
		<tr><td>text</td>
		<td><textarea cols="20" rows="5" name="slider_text_2"></textarea></td></tr>
		
	
		
		<tr><td colspan="2" align="center"><input type="submit" name="insert_slider" value="insert_slider"></td></tr>
		
		
	</table>
</form>

</body>
</html>
<?php
if(isset($_POST['insert_slider'])){
	//text data variables////////////////////////////////////////
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
	
	$slider_text_5= $_POST['slider_text_5'];
	$images5= $_FILES['images5']['name'];
	$temp_images5= $_FILES['images5']['tmp_name'];
	
	$slider_text_6= $_POST['slider_text_6'];
	$images6= $_FILES['images6']['name'];
	$temp_images6= $_FILES['images6']['tmp_name'];
	
	if ($slider_text_1=="" or $images==""){
		
		
		
		echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	{
		
		//uploading images to its folder
		move_uploaded_file($temp_images,"images/$images");
	    move_uploaded_file($temp_images2,"images/$images2");
	move_uploaded_file($temp_images3,"images/$images3");
	move_uploaded_file($temp_images4,"images/$images4");
	move_uploaded_file($temp_images6,"images/$images5");
	move_uploaded_file($temp_images5,"images/$images6");
		
	
	
	
	
	$insert_images ="insert into slider2(slider_text_1,images,slider_text_2,images2,slider_text_3,images3,slider_text_4,images4,slider_text_5,images5,slider_text_6,images6) values ('$slider_text_1','$images','$slider_text_2','$images2','$slider_text_3','$images3','$slider_text_4','$images4','$slider_text_5','$images5','$slider_text_6','$images6')";
	
	
		
		$run_images = mysqli_query($con, $insert_images);
		if($run_images){
			
			
			echo"<script language='javascript'>alert('Slider inserted successfilly')</script>";
		}
		
		
	
	}
	
	
}


?>

