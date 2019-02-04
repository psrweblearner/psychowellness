<?php

include("db/db.php");

?>
<div class="col-sm-10" id="right_side">
<table  align="center" border="3">
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>Approved Testimonial</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>pmessage</th>
		<th>Delete</th>
		
	</tr>
	<?php
if(isset($_GET['apfeedback'])){
		
		$query = "select * from approval order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$name =$row['name'];
			$message =$row['message'];
?>
<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $message; ?></td>
		<td><a href="delete_apfeedback.php?del=<?php echo $id; ?>">Delete</a></td>
		
	</tr>
	<?php }}  ?>
	</div>
	</div>
</div>