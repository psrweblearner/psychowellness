<?php

include("db/db.php");

?>




		<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Career </h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>Email Id</th>
		<th>Mobile No</th>
		<th>Contain</th>
		<th>Image</th>
		
		<th>Delete</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['cr_form'])){
		
		$query = "select * from career_form";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$name =$row['name'];
			$email =$row['email'];
			
			$mobile =$row['mobile'];
			$contain =$row['contain'];
			
			
			$image =$row['image'];
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $name; ?></td>
		
		<td><?php echo $email; ?></td>
	
		
		<td><?php echo $mobile; ?></td>
		
		<td><?php echo $contain; ?></td>
       
		<td><a href="../images/<?php echo $image;?>"><?php echo $image;?></a></td>
		
		<td><a href="delete_form.php?dlt=<?php echo $id; ?>">Delete</a></td>
		 
				
                
	</tr>
	<?php }} ?>
	
		</div>
		
	</div>
</div>
