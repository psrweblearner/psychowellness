<?php

include("db/db.php");

?>



		<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>Staffs</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Image</th>
		<th>Name</th>
<th>Contain</th>
		<th> Edit</th>
		<th> Delete</th>
	</tr>
	
	
	<?php

	
	if(isset($_GET['team2'])){
		
		$query = "select * from team2";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$image =$row['image'];
			$name =$row['name'];
			
			$contain =substr($row['contain'], 0,200);
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
	
		<td><a href="edit_staff.php?edit=<?php echo $id; ?>"><img src="images/<?php echo $image; ?>" width="50" height="50"></a></td>
		<td><?php echo $name; ?></td>
	
		
		<td><?php echo $contain; ?></td>
		
		
		<td><h4><a href="edit_team2.php?edit=<?php echo $id; ?>"> Edit</a><h4></td>
      <td><h4><a href="delete_staff.php?del=<?php echo $id; ?>"> Delete</a><h4></td>
		
	</tr>
	<?php }}  ?>
	
    
    
		</div>
		
	</div>
</div>
