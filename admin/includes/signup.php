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
<form method="post" action="#">
	<table align="center" border="1px solid black" width="900px;">
		<tr>
			<td colspan="2" align="center">SignUp</td>
		</tr>
		<tr><td>User Id</td>
		<td><input size="40" type="text" name="user_name"</td></tr>
		
		<tr><td>User Password</td>
		<td><input size="40" type="text" name="user_pass"</td></td></tr>
        <tr><td>User Email</td>
		<td><input size="40" type="email" name="user_email"</td></td></tr>
		
		
	<tr><td colspan="2" align="center"><input type="submit" name="insert" value="SignUp"></td></tr>
		
		
	</table>
</form>

</body>
</html>
<?php
if(isset($_POST['insert'])){
	//text data variables////////////////////////////////////////
	$user_name= $_POST['user_name'];
	$user_pass= $_POST['user_pass'];
	$user_email= $_POST['user_email'];

	
	if ($user_name=="" or $user_pass=="" or $user_email==""){
		$user_pass=md5($user_pass);
		
	echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	$insert ="insert into admin_login(user_name,user_pass,user_email) values ('$user_name','$user_pass','$user_email')";
	
	
		
		$run = mysqli_query($con, $insert);
		if($run){
			
			
			echo"<script language='javascript'>alert(' successfilly SignUp')</script>";
		
		
		
	
	}
	
	
}


?>

