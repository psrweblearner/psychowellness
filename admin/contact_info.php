<?php include("db/db.php");  ?>
<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>

<body>
<form method="post" action="#">
	<table border="1px solid blue" width="800" align="center">
		<tr><td colspan="2" align="center">Insert Contact Information</td></tr>
		<tr><td>About Place</td>
			<td><textarea cols="30" rows="5" name="info_text"></textarea></td></tr>
		<tr><td>Address</td>
		<td><textarea cols="30" rows="5" name="info_name"></textarea></td></tr>
		<tr><td>Contact No.</td>
		<td><input size="30" type="text" name="info_contact"></td></tr>
		<tr><td>Email</td>
		<td><input  size="30" type="email" name="info_mail"></td></tr>
		<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Contact_info"></td></tr>
	</table>
</form>
<?php include("includes/script.php");?>
</body>
</html>
<?php

if(isset($_POST['submit'])){
	$info_text= $_POST['info_text'];
	 $info_name= $_POST['info_name'];
	$info_contact= $_POST['info_contact'];
	$info_mail= $_POST['info_mail'];
	
	
	
	
	
	
	if($info_text=="" or $info_name==""  or $info_contact=="" or $info_mail==""){
		echo "<script language='javascript'>alert('Any feild is empty')</script>";
		exit();
	}
$info_insert = "insert into contact_info(info_text,info_name,info_contact,info_mail) values ('$info_text','$info_name',' $info_contact','$info_mail')";
	
		
		$info_run = mysqli_query($con,$info_insert);
		if($info_run){
			
			
			echo"<script language='javascript'>window.open('../index.php?published=Contact  has been published','_self')</script>";
		}
		
		
	

}

?>