<?php include("db/db.php"); ?>
		<div class="col-sm-10" id="right_side">
			
	
		
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Opening Hours</h1></td>
	</tr>
	<tr>
		
		<th>S.No</th>
		<th>Opening Hours text</th>
		<th>Monday to Friday</th>
		<th>Saturday</th>
		<th>Sunday</th>
		<th>Day</th>
		
		<th>Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['opening'])){
		
		$query = "select * from opening_hours order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['op_id'];
			$op_text =$row['op_text'];
			$op_m_f =$row['op_m_f'];
			
			$op_s =$row['op_s'];
			$op_sun =$row['op_sun'];
			
			
			$op_c =$row['op_c'];
			
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $op_text; ?></td>
		<td><?php echo $op_m_f; ?></td>
		<td><?php echo $op_s; ?></td>
		<td><?php echo $op_sun; ?></td>
		
		<td><?php echo $op_c; ?></td>
		
		
		<td><a href="op_edit.php?op_edit=<?php echo $id; ?>">Edit</a></td>
		
	</tr>
	<?php }}  ?>
	
		</div>