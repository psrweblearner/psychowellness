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
			<td colspan="2" align="center">Insert Gallery here</td>
		</tr>
		
		
		<tr><td>Image</td>
		<td><input type="file" name="image"></td></tr>
		<tr><td>title</td>
		<td><input type="text" name="title"></td></tr>
		
		<tr><td colspan="2" align="center"><input type="submit" name="insert" value="insert"></td></tr>
		
		
	</table>
</form>

</body>
</html>
<?php
if(isset($_POST['insert'])){
	//text data variables////////////////////////////////////////
	
	$image= $_FILES['image']['name'];
	$temp_images= $_FILES['image']['tmp_name'];
	$title= $_POST['title'];
	
	
	if ($image=="" or $title=="" ){
		
		
		
		echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	{
		
		//uploading images to its folder
	move_uploaded_file($temp_images,"images/$image");

	$insert_images ="insert into gallery1(image,title) values ('$image','$title')";
	
		$run_images = mysqli_query($con, $insert_images);
		if($run_images){
	echo"<script language='javascript'>window.open('index.php?published=Gallery has been published','_self')</script>";
		}
		
		
	
	}
	
	
}


?>

