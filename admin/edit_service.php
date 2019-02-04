<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>

	<body>

<?php

include("db/db.php");

$edit_id = @$_GET['edit_service'];
$query = "select * from services where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			$edit_id1 =$row['id'];
			$title= $row['title'];
		  $text= $row['text'];
	?>

<form method="post" action="edit_service.php?edit_service=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Service</h1></td>
		</tr>
        <tr>
			<td align="right">Title</td>
			<td><input type="text" name="title" size="50" value="<?php echo $title; ?>"></td>
		</tr>
		<tr>
			<td align="right">Containt</td>
			<td><textarea class="ckeditor" name="text"><?php echo $text; ?></textarea></td>
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
	
	$update_id = $_GET['edit_service'];
	$title= $_POST['title'];
	$text= $_POST['text'];
	$update_query ="update services set  title='$title',text='$text' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		echo"<script language='javascript'>window.open('index.php?published=Anxiety has been published','_self')</script>";
	}
}

?>