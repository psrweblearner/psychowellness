<?php

include("db/db.php");

?>




		<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Counter Section</h1></td>
	</tr>
	<tr>
		<th> S.No</th>
		<th> Doctors</th>
		<th>Doctors No</th>
		<th>Clinic Rooms</th>
		<th>Clinic Rooms No</th>
		<th>Awards</th>
		<th>Awards No</th>
		<th>Happy Patients</th>
		<th>Happy Patients No</th>
		<th>Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['cs'])){
		
		$query = "select * from countersection order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$cs_id =$row['cs_id'];
			$dr_cs =$row['dr_cs'];
			$dr_no =$row['dr_no'];
			$clinic_cs =$row['clinic_cs'];
			$clinic_no =$row['clinic_no'];
			$award_cs =$row['award_cs'];
			$award_no =$row['award_no'];
			$happy_p_cs =$row['happy_p_cs'];
			$happy_p_no =$row['happy_p_no'];
			
			
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $dr_cs; ?></td>
		<td><?php echo $dr_no; ?></td>
		<td><?php echo $clinic_cs; ?></td>
		<td><?php echo $clinic_no; ?></td>
		<td><?php echo $award_cs; ?></td>
		<td><?php echo $award_no; ?></td>
		<td><?php echo $happy_p_cs; ?></td>
		<td><?php echo $happy_p_no; ?></td>
		<td><a href="edit_counter_section.php?edit_cs=<?php echo $cs_id; ?>">Edit</a></td>
		
	</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
