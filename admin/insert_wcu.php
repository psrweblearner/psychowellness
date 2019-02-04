<?php
include("db/db.php");



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">
	<table align="center" border="1px solid black" width="900px;">
		<tr>
			<td colspan="2" align="center">Insert Why choose us</td>
		</tr>
		<tr><td>Great Infrastructure</td>
		<td><textarea cols="20" rows="5" name="text1"></textarea></td></tr>
		<tr><td>Qualified Doctors</td>
		<td><textarea cols="20" rows="5" name="text2"></textarea></td></tr>
		<tr><td>Emergency Support</td>
		<td><textarea cols="20" rows="5" name="text3"></textarea></td></tr>
		
		
	<tr><td colspan="2" align="center"><input type="submit" name="insert" value="Insert"></td></tr>
		
		
	</table>
</form>

</body>
</html>
<?php
if(isset($_POST['insert'])){
	//text data variables////////////////////////////////////////
	
	$text1= $_POST['text1'];
	$text2= $_POST['text2'];
	$text3= $_POST['text3'];
	
	if ($text1=="" or $text2=="" or $text3==""){
		
	echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	
	   
		
	
	
	
	
	$insert ="insert into why_cu(text1,text2,text3) values ('$text1','$text2','$text3')";
	
	
		
		$run = mysqli_query($con, $insert);
		if($run){
			
			
			echo"<script language='javascript'>alert('Changed successfilly')</script>";
		}
		
		
	
	
	
	
}


?>
