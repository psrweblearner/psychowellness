<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>
	<body>

<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from faq where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
	        $title= $row['title'];
			$text= $row['text'];
		



?>

<form method="post" action="edit_faq.php?edit_form=<?php echo $edit_id1; ?>">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Changing FAQs</h1></td>
			
			
		</tr>
		<tr>
			<td align="right">Title</td>
			<td><input type="text" name="title" value="<?php echo $title; ?>"></td>
		</tr>
		<tr>
			<td align="right">Contain</td>
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
	
	$update_id = $_GET['edit_form'];
	$title= $_POST['title'];
	$text= $_POST['text'];
	
	
	
		$update_query ="update faq set title='$title',text='$text' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Text has been published','_self')</script>";
	}
}





?>












