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
			<td colspan="2" align="center">Insert Staff Section</td>
		</tr>
		
		
		<tr><td>Image</td>
		<td><input type="file" name="image"></td></tr>
		<tr><td>Name</td>
		<td><input type="text" name="name"></td></tr>
		
		<tr><td>About</td>
		<td><textarea cols="30" rows="5" name="contain"></textarea></td></tr>
		
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
	$name= $_POST['name'];
$contain= $_POST['contain'];
	
	if ($image=="" or $name=="" or $contain==""){
		echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	{
		//uploading images to its folder
	move_uploaded_file($temp_images,"images/$image");
	
	$insert_images ="insert into team2(image,name,contain) values ('$image','$name','$contain')";
	$run_images = mysqli_query($con, $insert_images);
		if($run_images){
			echo"<script language='javascript'>alert(' successfilly Changed')</script>";
		}
		
		
	
	}
	
	
}


?>

