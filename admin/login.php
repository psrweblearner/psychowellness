<?php  
include("db/db.php");
session_start();

?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Adnin Login</title>
</head>

<body>
<form  method="post" action="#">
	
	<table width="400" align="center" border="20">
		
		<tr>
			<td colspan="5" align="center" bgcolor="gray">
			<h1>Admin Login</h1></td>
		</tr>
		<tr>
			<td align="right">User Name:</td>
			<td><input type="text" name="user_name"></td>
		</tr>
		<tr>
			<td align="right">User Password:</td>
			<td><input type="password" name="user_pass"></td>
		</tr>
		<tr>
			
			<td align="center" colspan="5"><input type="submit" name="login" value="Login"></td>
		</tr>
		
	</table>
	
	
</form>


</body>
</html>
<?php



if(isset($_POST['login'])){
	$user_name =  $_POST['user_name'];
	$user_pass =  $_POST['user_pass'];
	$user_pass = md5($user_pass);
	
	$login_query = "select * from admin_login where user_name='$user_name' AND user_pass='$user_pass'";
	$run =mysqli_query($con,$login_query);
	if(mysqli_num_rows($run)>0){
		
		$_SESSION['user_name']=$user_name;
		
		echo"<script type='text/javascript' language='javascript'>window.open('index.php','_self')</script>";
	}
	else{
		echo"<script type='text/javascript'>alert('User Name or Password is incorrect!')</script>";
	}
	
}




?>



























