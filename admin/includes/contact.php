<?php

include("db/db.php");

?>
<div class="col-sm-10" id="right_side">
<table  align="center" border="3">
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Contact </h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Contact name</th>
		<th>contact Email</th>
		<th>Mobile No</th>
		<th>Contact Subject</th>
		<th>Contact Message</th>
		<th>Delete</th>
	</tr>
	<?php
if(isset($_GET['contact'])){
		$query = "select * from contact order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			$contact_id =$row['contact_id'];
			$contact_name =$row['contact_name'];
			$contact_email =$row['contact_email'];
			$contact_mobile =$row['contact_mobile'];
			$contact_sub =$row['contact_sub'];
			$contact_massage =$row['contact_massage'];
		
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $contact_name; ?></td>
		<td><?php echo $contact_email; ?></td>
		<td><?php echo $contact_mobile; ?></td>
		<td><?php echo $contact_sub; ?></td>
		<td><?php echo $contact_massage; ?></td>
		<td><a href="delete_contect.php?del=<?php echo $contact_id; ?>">Delete</a></td>
		</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
