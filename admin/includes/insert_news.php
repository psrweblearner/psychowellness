<?php
include("db/db.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<table align="center" border="1px solid black" width="900px;">
		<tr>
			<td colspan="2" align="center">Insert News blog here</td>
		</tr>
		<tr><td>Image</td>
		<td><input type="file" name="image"></td></tr>
		<tr><td>name</td>
		<td><input type="text" name="name"></td></tr>
		<tr><td>work</td>
		<td><input type="text" name="work"></td></tr>
		<tr><td>Title</td>
		<td><input type="text" name="title"></td></tr>
		<tr><td>Home Page Blog</td>
		<td><textarea class="ckeditor" name="text_field"></textarea></td></tr>
		<tr><td>Next Page Blog</td>
		<td><textarea class="ckeditor" name="text"></textarea></td></tr>
		<tr><td>Tag Name</td>
		<td><select name="tag_name">
		<option value="Anxiety" selected>Select Name</option>
		<option value="Anxiety">Anxiety</option>
		<option value="ADHD">ADHD</option>
		<option value="Addiction">Addiction</option>
		<option value="Bipolar Disorder">Bipolar Disorde</option>
		<option value="Depression">Depression</option>
		<option value="OCD">OCD</option>
		<option value="Relation Ship">Relation Ship</option>
		<option value="Sleep">Sleep</option>
		</select></td></tr>
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
	$date = date('y/m/d');
	$work= $_POST['work'];
	$text_field= $_POST['text_field'];
	$title= $_POST['title'];
	$text= $_POST['text'];
	$tag_name= $_POST['tag_name'];
	if ($image=="" or $tag_name=="" or $title=="" or $text==""){
		echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	{
	//uploading images to its folder
	move_uploaded_file($temp_images,"images/$image");
	$insert_images ="insert into news_blog(image,name,date,work,title,text,text_field,tag_name) values ('$image','$name','$date','$work','$title','$text','$text_field','$tag_name')";
	$run_images = mysqli_query($con, $insert_images);
		if($run_images){
		echo"<script language='javascript'>alert(' successfilly Changed')</script>";
		}
		
	}
	
	
}


?>

