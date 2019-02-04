<html>

	<body>


<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from news_blog where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
	       $image=$row['image'];
		
		



?>

<form method="post" action="edit_blog_image.php?edit_form=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Change Blog Section</h1></td>
			
			
		</tr>
		<tr>
			<td align="right"> Image</td>
			<td><input type="file" name="image" >
			<img src="images/<?php echo $image?>" width="60" height="60">
			</td>
		</tr>
		
			
			<td align="center" colspan="5"><input type="submit" name="update" value="Update Now"></td>
		</tr>
		
		
		<?php } ?>
	</table>
	
	
	
</form>

</body>
</html>

<?php
if(isset($_POST['update'])){
	
	$update_id = $_GET['edit_form'];
	$image= $_FILES['image']['name'];
	$temp_images= $_FILES['image']['tmp_name'];
	
	
	
	
	
	
	
	
	
	
		
		//uploading images to its folder
		move_uploaded_file($temp_images,"images/$image");
	  
		
		$update_query ="update news_blog set image='$image' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Blogs has been Changed','_self')</script>";
	}
}





?>



