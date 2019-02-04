
<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>
	<body>

<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from terms_condition where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
	        
			$text_field= $row['text_field'];
	
?>

<form method="post" action="edit_trcd.php?edit_form=<?php echo $edit_id1; ?>">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Terms & Conditions</h1></td>
			
			
		</tr>
		
			<td align="right">Contain</td>
			<td><textarea class="ckeditor" name="text_field"><?php echo $text_field; ?></textarea></td>
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
	
	$text_field= $_POST['text_field'];
	
	
	
		$update_query ="update terms_condition set text_field='$text_field' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Terms & Conditions has been published','_self')</script>";
	}
}

?>