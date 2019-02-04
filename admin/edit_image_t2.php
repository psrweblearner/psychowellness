<html>

	<body>


<?php

include("db/db.php");

$edit_id = @$_GET['edit_image_t2'];
$query = "select * from service2 where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
			 
			    $image= $row['image2'];
			
		
			



?>

<form method="post" action="edit_image_t2.php?edit_image=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Service</h1></td>
			
			
		</tr>
       
        <tr>
			<td align="right">Image</td>
			<td><input type="file" name="image2" >
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
	
	
	$image= $_FILES['image2']['name'];
	$temp_images1= $_FILES['image2']['tmp_name'];
	
	
	
	
	
		
		//uploading images to its folder
			
		move_uploaded_file($temp_images1,"images/$image");
	   
		
		$update_query ="update service2 set image2='$image' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Anxiety has been published','_self')</script>";
	}
}





?>












