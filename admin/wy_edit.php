<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>
	<body>



<?php

include("db/db.php");

$edit_id = @$_GET['edit_wy'];
$query = "select * from why_cu where w_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['w_id'];
			$text_1= $row['text1'];
	$text_2= $row['text2'];
	$text_3= $row['text3'];
		
			



?>

<form method="post" action="wy_edit.php?edit_form_wy=<?php echo $edit_id1; ?>">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Changing Why Choose us </h1></td>
			
			
		</tr>
		<tr>
			<td align="right">Comfortable Relaxed Clinic</td>
			<td><textarea class="ckeditor"  name="text1"><?php echo $text_1; ?></textarea></td>
		</tr>
		<tr>
			<td align="right">Qualified Therapist & Doctors</td>
			<<td><textarea class="ckeditor"  name="text2"><?php echo $text_2; ?></textarea></td>
		</tr>
		
		<tr>
			<td align="right">Personalized & Compassionate Support</td>
			<td><textarea class="ckeditor"  name="text3"><?php echo $text_3; ?></textarea></td>
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
	
	$update_id = $_GET['edit_form_wy'];
	
	$text_1= $_POST['text1'];
	$text_2= $_POST['text2'];
	$text_3= $_POST['text3'];
	
	
$update_query ="update why_cu set text1='$text_1',text2='$text_2', text3='$text_3' where w_id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=why choose has been published','_self')</script>";
	}
}





?>












