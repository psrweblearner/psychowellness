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
		<th>Address</th>
		<th>Mobile No</th>
		<th>Mobile No 2</th>
		<th>Email Id</th>
		<th>Edit</th>
	</tr>
	<?php
if(isset($_GET['contact_info'])){
		$query = "select * from contact_info order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$info_id =$row['info_id'];
			$info_name =$row['info_name'];
			$info_contact =$row['info_contact'];
			$contact_info1=$row['contact_info1'];
			$info_mail =$row['info_mail'];
		
?>
<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $info_name; ?></td>
		<td><?php echo $info_contact; ?></td>
		<td><?php echo $contact_info1; ?></td>
		<td><?php echo $info_mail; ?></td>
		<td><a href="edit_info.php?edit=<?php echo $info_id; ?>">Edit</a></td>
		</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
