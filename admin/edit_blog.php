<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>
	<body>

<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from news_blog where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
	       
		$name=$row['name'];
		$date= $row['date'];
		$work= $row['work'];
		$title=$row['title'];
	$text_field=$row['text_field'];
		$text=$row['text'];
		$tag_name=$row['tag_name'];
		



?>

<form method="post" action="edit_blog.php?edit_form=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Change Blog Section</h1></td>
			
			
		</tr>
		
		<tr>
			<td align="right">Name</td>
			<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">Work</td>
			<td><input type="text" name="work" value="<?php echo $work; ?>"></td>
		</tr>
		<tr>
			<td align="right">Title</td>
			<td><input type="text" name="title" value="<?php echo $title; ?>"></td>
		</tr>
		<tr>
			<td align="right">Blog Page</td>
			<td><textarea class="ckeditor" name="text_field"><?php echo $text_field; ?></textarea></td>
		</tr>
		<tr>
			<td align="right">Blog Page 2</td>
			<td><textarea class="ckeditor" name="text"><?php echo $text; ?></textarea></td>
		</tr>
		<tr>
			<td align="right">Tag Name</td>
			<td><textarea cols="50" rows="5" name="tag_name"><?php echo $tag_name; ?></textarea></td>
		</tr>
		
		
		<tr>
			
			<td align="center" colspan="5"><input type="submit" name="update" value="Update Now"></td>
		</tr>
		
		
		<?php } ?>
	</table>
	
	
	
</form>
<?php include("includes/script.php");?>
</body>
</html>

<?php
if(isset($_POST['update'])){
	
	$update_id = $_GET['edit_form'];
	$name= $_POST['name'];
	$work= $_POST['work'];
	$title= $_POST['title'];
	$text_field= $_POST['text_field'];
	$text= $_POST['text'];
	$tag_name= $_POST['tag_name'];
	
	  $update_query ="update news_blog set name='$name', work='$work', title='$title', text='$text',text_field='$text_field', tag_name='$tag_name' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
	echo"<script language='javascript'>window.open('index.php?published=Blogs has been Changed','_self')</script>";
	}
}
?>












