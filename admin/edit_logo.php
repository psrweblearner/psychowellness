<html>

	<body>


<?php

include("db/db.php");

$edit_id = @$_GET['edit_logo'];
$query = "select * from services where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
			 
			    $logo= $row['logo'];
			
		
			



?>

<form method="post" action="edit_logo.php?edit_logo=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Anxiety</h1></td>
			
			
		</tr>
       
        <tr>
			<td align="right">Logo</td>
			<td><input type="file" name="logo" >
			<img src="images/<?php echo $logo?>" width="60" height="60">
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
	
	$update_id = $_GET['edit_logo'];
	
	
	$logo= $_FILES['logo']['name'];
	$temp_images1= $_FILES['logo']['tmp_name'];
	
	
	
	
	
		
		//uploading images to its folder
			
		move_uploaded_file($temp_images1,"images/$logo");
	   
		
		$update_query ="update services set logo='$logo' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Anxiety has been published','_self')</script>";
	}
}





?>












