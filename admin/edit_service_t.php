<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>

</head>

<?php
include("db/db.php");
$edit_id = @$_GET['edit'];
$query = "select * from service2 where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
		$edit_id1 =$row['id'];
		$title= $row['title'];
		$text= $row['text'];
		$title1= $row['title1'];
		$text1= $row['text1'];
		$title2= $row['title2'];
		$text2= $row['text2'];
	
?>

<form method="post" action="edit_service_t?edit_service=<?php echo $edit_id1;?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Service</h1></td>
		</tr>
		<tr>
			<td align="right">Title</td>
			<td><input type="text" name="title" size="50" value="<?php echo $title; ?>"></td>
		</tr>
	<tr>
			<td align="right">Text</td>
			<td><textarea class="ckeditor" name="text"><?php echo $text; ?></textarea></td>
		</tr>
		<tr>
			<td align="right">Title1</td>
			<td><input type="text" name="title1" size="50" value="<?php echo $title1; ?>"></td>
		</tr>
	<tr>
			<td align="right">Text1</td>
			<td><textarea class="ckeditor" name="text1"><?php echo $text1; ?></textarea></td>
		</tr>
		<tr>
			<td align="right">Title2</td>
			<td><input type="text" name="title2" size="50" value="<?php echo $title2; ?>"></td>
		</tr>
	<tr>
			<td align="right">Text2</td>
			<td><textarea class="ckeditor"  name="text2"><?php echo $text2; ?></textarea></td>
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
	$title1= $_POST['title1'];
	$text1= $_POST['text1'];
	$title2= $_POST['title2'];
	$text2= $_POST['text2'];
	$update_query ="update service2 set title='$title', text='$text', title1='$title1', text1='$text1', title2='$title2',text2='$text2' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		echo"<script language='javascript'>window.open('index.php?published=Service has been published','_self')</script>";
	}
}

?>