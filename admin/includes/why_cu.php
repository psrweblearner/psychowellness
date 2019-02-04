<?php

include("db/db.php");

?>




		<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Why Choose and Change</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Comfortable Relaxed Clinic</th>
		<th>Qualified Therapist & Doctors</th>
		<th>Personalized & Compassionate Support</th>
		<th>Edit</th>
		
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['w_cu'])){
		
		$query = "select * from why_cu order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$w_id =$row['w_id'];
			$text1 =$row['text1'];
			$text2 =$row['text2'];
			$text3 =$row['text3'];
			
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $text1; ?></td>
		<td><?php echo $text2; ?></td>
		<td><?php echo $text3; ?></td>
		
		<td><a href="wy_edit.php?edit_wy=<?php echo $w_id; ?>">Edit</a></td>
		
	</tr>
	<?php }}  ?>
	
		</div>
		
	>
