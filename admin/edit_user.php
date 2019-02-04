<html>
	<body>


<?php

include("db/db.php");

$edit_id = @$_GET['edit'];
$query = "select * from admin_login where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
	        $user_name= $row['user_name'];
			$user_pass= $row['user_pass'];
			$user_email= $row['user_email'];
		



?>

<form method="post" action="edit_user.php?edit_form=<?php echo $edit_id1; ?>">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Changing Admin User</h1></td>
			
			
		</tr>
		<tr>
			<td align="right">User Id</td>
			<td><input type="text" name="user_name" value="<?php echo $user_name; ?>"></td>
		</tr>
        <tr>
			<td align="right">User Password</td>
			<td><input type="text" name="user_pass" value="<?php echo $user_pass; ?>"></td>
		</tr>
        <tr>
			<td align="right">User Email</td>
			<td><input type="text" name="user_email" value="<?php echo $user_email; ?>"></td>
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
	
	$update_id = $_GET['edit_form'];
	$user_name= $_POST['user_name'];
	$user_pass= $_POST['user_pass'];
	$user_email= $_POST['user_email'];
	
	
	
		$update_query ="update admin_login set user_name='$user_name',user_pass='$user_pass',user_email='$user_email' where id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Changed','_self')</script>";
	}
}





?>












