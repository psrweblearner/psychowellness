<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>
	<body>

<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from contact_info where info_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['info_id'];
	       $info_name =$row['info_name'];
			$info_contact =$row['info_contact'];
$contact_info1=$row['contact_info1'];
			$info_mail =$row['info_mail'];
?>

<form method="post" action="edit_info.php?edit_form=<?php echo $edit_id1; ?>">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Change Contact Info Page</h1></td>
			
			
		</tr>
		<tr>
			<td align="right">Address</td>
			<td><textarea class="ckeditor" name="info_name"><?php echo $info_name; ?></textarea></td>
		</tr>
		<tr>
			<td align="right">Mobile No</td>
			<td><input type="text" name="info_contact" value="<?php echo $info_contact; ?>"</td>
		</tr>
<tr>
			<td align="right">Mobile No 2</td>
			<td><input type="text" name="contact_info1" value="<?php echo $contact_info1; ?>"</td>
		</tr>
		
		<tr>
			<td align="right">Email Id</td>
			<td><input type="text" name="info_mail" value="<?php echo $info_mail; ?>"></td>
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
	$info_name= $_POST['info_name'];
	$info_contact= $_POST['info_contact'];
$contact_info1= $_POST['contact_info1'];
	
	$info_mail= $_POST['info_mail'];
	
		$update_query ="update contact_info set info_name='$info_name',info_contact='$info_contact',contact_info1='$contact_info1',info_mail='$info_mail' where info_id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Text has been published','_self')</script>";
	}
}





?>












