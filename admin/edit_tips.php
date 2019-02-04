<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>
	<body>


<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from today_tips where tips_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['tips_id'];
			 
			    $image= $row['tips_image'];
?>

<form method="post" action="edit_tips.php?edit_image=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Tips Image</h1></td>
			
			
		</tr>
       
        <tr>
			<td align="right">Image</td>
			<td><input type="file" name="tips_image" >
			<img src="images/<?php echo $image?>" width="60" height="60">
			</td>
		</tr>
		<tr>
			
			<td align="center" colspan="5"><input type="submit" name="update" value="Update Now"></td>
		</tr>
		
		
		<?php } ?>
	</table>
	</form>

</body>
</html>

<?php
if(isset($_POST['update'])){
	
	$update_id = $_GET['edit_image'];
	
	
	$image= $_FILES['tips_image']['name'];
	$temp_images1= $_FILES['tips_image']['tmp_name'];
	
	//uploading images to its folder
			
		move_uploaded_file($temp_images1,"images/$image");
	   
		
		$update_query ="update today_tips set tips_image='$image' where tips_id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Image has been published','_self')</script>";
	}
}





?>

