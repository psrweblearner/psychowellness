<!doctype html>
<html>
<head>

   <?php include("includes/head.php");?>
   
</head>

<body>

<?php

include("db/db.php");

$edit_id = @$_GET['edit_ab'];
$query = "select * from h_about where ab_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['ab_id'];
	        $ab_title= $row['ab_title'];
			$ab_text= $row['ab_text'];
		
?>

<form method="post" action="ab_edit.php?edit_form_ab=<?php echo $edit_id1; ?>">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Changing About us  page</h1></td>
			
			
		</tr>
		<tr>
			<td align="right">Title</td>
			<td><input type="text" name="ab_title" value="<?php echo $ab_title; ?>"></td>
		</tr>
		<tr>
			<td align="right">Contain</td>
			<td><textarea class="ckeditor" name="ab_text"><?php echo $ab_text; ?></textarea></td>
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
	
	$update_id = $_GET['edit_form_ab'];
	$ab_title= $_POST['ab_title'];
	$ab_text= $_POST['ab_text'];
	
	
	
		$update_query ="update h_about set ab_title='$ab_title',ab_text='$ab_text' where ab_id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Text has been published','_self')</script>";
	}
}





?>