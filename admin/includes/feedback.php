<?php

include("db/db.php");

?>
<div class="col-sm-10" id="right_side">
<table  align="center" border="3">
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>Testimonial</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>pmessage</th>
		<th>Approval</th>
		<th>Not Approval</th>
	</tr>
	<?php
if(isset($_GET['feedback'])){
		
		$query = "select * from pfeedback order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$pf_id =$row['pf_id'];
			$pname =$row['pname'];
			$pmessage =$row['pmessage'];
?>
<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $pname; ?></td>
		<td><?php echo $pmessage; ?></td>
		<td><a href="edit_feedback.php?edit=<?php echo $pf_id; ?>">Approved</a></td>
		<td><a href="delete_feedback.php?del=<?php echo $pf_id; ?>">Not Approved</a></td>
	</tr>
	<?php }}  ?>
	</div>
	</div>
</div>