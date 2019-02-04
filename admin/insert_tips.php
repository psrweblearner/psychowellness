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
			<td colspan="2" align="center">Insert Daily tips from here</td>
		</tr>
		<tr><td>Tips title</td>
		<td><input size="40" type="text" name="tips_title"</td></tr>
		
		<tr><td>Tips text</td>
		<td><textarea cols="20" rows="5" name="tips_text"></textarea></td></tr>
		<tr><td>Tips Image</td>
		<td><input type="file" name="tips_image"></td></tr>
		
	<tr><td colspan="2" align="center"><input type="submit" name="insert_tips" value="Insert Daytips"></td></tr>
		
		
	</table>
</form>

</body>
</html>
<?php
if(isset($_POST['insert_tips'])){
	//text data variables////////////////////////////////////////
	$tips_title= $_POST['tips_title'];
	$tips_text= $_POST['tips_text'];
	
	$tips_image= $_FILES['tips_image']['name'];
	$temp_images= $_FILES['tips_image']['tmp_name'];
	
	if ($tips_title=="" or $tips_text=="" or $tips_image==""){
		
	echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	{
		
		//uploading images to its folder
		move_uploaded_file($temp_images,"images/$tips_image");
	   
		
	
	
	
	
	$insert_tips ="insert into today_tips(tips_title,tips_text,tips_image) values ('$tips_title','$tips_text','$tips_image')";
	
	
		
		$run_tips = mysqli_query($con, $insert_tips);
		if($run_tips){
			
			
			echo"<script language='javascript'>alert('tips inserted successfilly')</script>";
		}
		
		
	
	}
	
	
}


?>

