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
			<td colspan="2" align="center">Insert Service 3</td>
		</tr>
		<tr><td> Service Image</td>
		<td><input type="file" name="image"></td></tr>
		
		<tr><td> title</td>
		<td><input size="40" type="text" name="title"</td></tr>
		
		<tr><td> text</td>
		<td><textarea cols="20" rows="5" name="text"></textarea></td></tr>
		
		
		
			<tr><td> Image2</td>
		<td><input type="file" name="image1"></td></tr>
		
			<tr><td> title2</td>
		<td><input size="40" type="text" name="title1"</td></tr>
		
		<tr><td> text2</td>
		<td><textarea cols="20" rows="5" name="text1"></textarea></td></tr>
		
		
		
		<tr><td> Image3</td>
		<td><input type="file" name="image2"></td></tr>
		
			<tr><td> title3</td>
		<td><input size="40" type="text" name="title2"</td></tr>
		
		<tr><td> text3</td>
		<td><textarea cols="20" rows="5" name="text2"></textarea></td></tr>
		
			
		
		
		
		
	
		
		
		
		
		
		
	<tr><td colspan="2" align="center"><input type="submit" name="insert" value="Insert"></td></tr>
		
		
	</table>
</form>

</body>
</html>
<?php
if(isset($_POST['insert'])){
	//text data variables////////////////////////////////////////
	
	$image0= $_FILES['image']['name'];
	$temp_images0= $_FILES['image']['tmp_name'];
	$title= $_POST['title'];
	$text= $_POST['text'];
	
	
	
	$image1= $_FILES['image1']['name'];
	$temp_images1= $_FILES['image1']['tmp_name'];
	$title1= $_POST['title1'];
	$text1= $_POST['text1'];
	
	
	
	$image2= $_FILES['image2']['name'];
	$temp_images2= $_FILES['image2']['tmp_name'];
	$title2= $_POST['title2'];
	$text2= $_POST['text2'];
	
	
	
	
	if ($image0=="" or $title=="" or $text==""){
		
	echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	{
		
		//uploading images to its folder
		
	move_uploaded_file($temp_images0,"images/$image0");
	move_uploaded_file($temp_images1,"images/$image1");
	move_uploaded_file($temp_images2,"images/$image2");
	
	   
		
	
	
	
	
	$insert ="insert into service2(image,title,text,image1,title1,text1,image2,title2,text2) values ('$image0','$title','$text','$image1','$title1','$text1','$image2','$title2','$text2')";
	
	
		
		$run = mysqli_query($con, $insert);
		if($run){
			
			
			echo"<script language='javascript'>alert('service inserted successfilly')</script>";
		}
		
		
	
	}
	
	
}


?>

