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
			<td colspan="2" align="center">Insert Service 2</td>
		</tr>
		<tr><td> Service Image</td>
		<td><input type="file" name="image_service"></td></tr>
		
		<tr><td> title</td>
		<td><input size="40" type="text" name="title"</td></tr>
		
		<tr><td> text</td>
		<td><textarea cols="20" rows="5" name="text"></textarea></td></tr>
		
			<tr><td> title2</td>
		<td><input size="40" type="text" name="title1"</td></tr>
		
		<tr><td> text2</td>
		<td><textarea cols="20" rows="5" name="text1"></textarea></td></tr>
		
			<tr><td> title3</td>
		<td><input size="40" type="text" name="title2"</td></tr>
		
		<tr><td> text3</td>
		<td><textarea cols="20" rows="5" name="text2"></textarea></td></tr>
		
			<tr><td> title4</td>
		<td><input size="40" type="text" name="title3"</td></tr>
		
		<tr><td> text4</td>
		<td><textarea cols="20" rows="5" name="text3"></textarea></td></tr>
		
		
		<tr><td> Image2</td>
		<td><input type="file" name="image"></td></tr>
		
		
		<tr><td> Image3</td>
		<td><input type="file" name="image1"></td></tr>
		
		
		<tr><td> Image4</td>
		<td><input type="file" name="image2"></td></tr>
		
		<tr><td> Image5</td>
		<td><input type="file" name="image3"></td></tr>
		
	<tr><td colspan="2" align="center"><input type="submit" name="insert" value="Insert"></td></tr>
		
		
	</table>
</form>

</body>
</html>
<?php
if(isset($_POST['insert'])){
	//text data variables////////////////////////////////////////
	$image_service= $_FILES['image_service']['name'];
	$temp_images= $_FILES['image_service']['tmp_name'];
	
	$title= $_POST['title'];
	$text= $_POST['text'];
	
	$title1= $_POST['title1'];
	$text1= $_POST['text1'];
	
	$title2= $_POST['title2'];
	$text2= $_POST['text2'];
	
	$title3= $_POST['title3'];
	$text3= $_POST['text3'];
	
	$image0= $_FILES['image']['name'];
	$temp_images0= $_FILES['image']['tmp_name'];
	
	
	$image1= $_FILES['image1']['name'];
	$temp_images1= $_FILES['image1']['tmp_name'];
	
	$image2= $_FILES['image2']['name'];
	$temp_images2= $_FILES['image2']['tmp_name'];
	
	$image3= $_FILES['image3']['name'];
	$temp_images3= $_FILES['image3']['tmp_name'];
	
	
	
	if ($image_service=="" or $title=="" or $text=="" or $image0==""){
		
	echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	{
		
		//uploading images to its folder
		move_uploaded_file($temp_images,"images/$image_service");
	move_uploaded_file($temp_images0,"images/$image0");
	move_uploaded_file($temp_images1,"images/$image1");
	move_uploaded_file($temp_images2,"images/$image2");
	move_uploaded_file($temp_images3,"images/$image3");
	   
		
	
	
	
	
	$insert ="insert into service1(image_service,title,text,title1,text1,title2,text2,title3,text3,image,image1,image2,image3) values ('$image_service','$title','$text','$title1','$text1','$title2','$text2','$title3','$text3','$image0','$image1','$image2','$image3')";
	
	
		
		$run = mysqli_query($con, $insert);
		if($run){
			
			
			echo"<script language='javascript'>alert('service inserted successfilly')</script>";
		}
		
		
	
	}
	
	
}


?>

