<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>

	<body>

<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from service1 where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
			$title1= $row['title1'];
		$text1= $row['text1'];
		$title2= $row['title2'];
		$text2= $row['text2'];
		$title3= $row['title3'];
		$text3= $row['text3'];
		$quots= $row['quots'];
?>

<form method="post" action="edit_service_s.php?edit_form=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Services</h1></td>
		</tr>
		<tr>
			<td align="right">Title First Prag.</td>
			<td><input type="text" name="title1" size="50" value="<?php echo $title1; ?>"></td>
		</tr>
	<tr>
			<td align="right">Text First Prag. </td>
			<td><textarea class="ckeditor" name="text1"><?php echo $text1; ?></textarea></td>
		</tr>
		<tr>
			<td align="right">Title Second Prag</td>
			<td><input type="text" name="title2" size="50" value="<?php echo $title2; ?>"></td>
		</tr>
	
		
		<tr>
			<td align="right">Text Second Prag</td>
			<td><textarea class="ckeditor" name="text2"><?php echo $text2; ?></textarea></td>
		</tr>
		
		
        	<tr>
			<td align="right">Title Third Prag.</td>
			<td><input type="text" name="title3" size="50" value="<?php echo $title3; ?>"></td>
		</tr>
	
		
		<tr>
			<td align="right">Text Third Prag</td>
			<td><textarea class="ckeditor" name="text3"><?php echo $text3; ?></textarea></td>
		</tr>
		
		<tr>
			<td align="right">Quots</td>
			<td><textarea class="ckeditor" name="quots"><?php echo $quots; ?></textarea></td>
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
	$title1= $_POST['title1'];
	$text1= $_POST['text1'];
	$title2= $_POST['title2'];
	$text2= $_POST['text2'];
	$title3= $_POST['title3'];
	$text3= $_POST['text3'];
	$quots= $_POST['quots'];
$update_query ="update service1 set title1='$title1', text1='$text1', title2='$title2', text2='$text2', title3='$title3',text3='$text3',quots='$quots' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		echo"<script language='javascript'>window.open('index.php?published=Service has been published','_self')</script>";
	}
}

?>