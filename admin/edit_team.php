<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>
	<body>


<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from team where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
	      
			$name =$row['name'];
			
			$fee =$row['fee'];
			$contain =$row['contain'];
	
?>

<form method="post" action="edit_team.php?edit_form_team=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Changing Team Section page</h1></td>
			
		</tr>
        
		<tr>
			<td align="right">Name</td>
			<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
		</tr>
        <tr>
			<td align="right">Fee</td>
			<td><input type="text" name="fee" value="<?php echo $fee; ?>"></td>
		</tr>
		<tr>
			<td align="right">Contain</td>
			<td><textarea class="ckeditor"  name="contain"><?php echo $contain; ?></textarea></td>
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
	$update_id =$_GET['edit_form_team'];
	$name= $_POST['name'];
	$fee= $_POST['fee'];
	$contain= $_POST['contain'];
	$update_query ="update team set name='$name', fee='$fee', contain='$contain' where id='$update_id'";
	if(mysqli_query($con,$update_query)){
	echo"<script language='javascript'>window.open('index.php?published=Teams has been published','_self')</script>";
	}
}
?>