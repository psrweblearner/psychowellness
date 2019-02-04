<?php

	
include("db/db.php");

?>



		<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Slider and Change</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>User Name</th>
		<th>User Password</th>
		<th>User Email</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	
	
	<?php

	
	if(isset($_GET['ad_user'])){
		
		$query = "select * from admin_login order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$user_name =$row['user_name'];
			$user_pass =$row['user_pass'];
			
			$user_email =$row['user_email'];
			
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $user_name; ?></td>
	
		<td><?php echo $user_pass; ?></td>
		
		
		<td><?php echo $user_email; ?></td>
		
		
		<td><a href="edit_user.php?edit=<?php echo $id; ?>">Edit</a></td>
		<td><a href="delete_user.php?dlt=<?php echo $id; ?>">Delete</a></td>
	</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
