<?php
include("db/db.php");
?>
<div class="col-sm-10" id="right_side">
<table  align="center" border="3">
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Get In Touch </h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Contact name</th>
		<th>contact Email</th>
		<th>Mobile No</th>
		<th>Address</th>
		<th>Contact Subject</th>
		<th>Contact Message</th>
		<th>Delete</th>
	</tr>
	<?php
if(isset($_GET['g_touch'])){
		$query = "select * from get_tuch order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			$id =$row['id'];
			$name =$row['name'];
			$email =$row['email'];
			$mobile =$row['mobile'];
			$address =$row['address'];
			$subject =$row['subject'];
			$message =$row['message'];
	?>
<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $mobile; ?></td>
		<td><?php echo $address; ?></td>
		<td><?php echo $subject; ?></td>
		<td><?php echo $message; ?></td>
		<td><a href="delete_g_tuch.php?del=<?php echo $id; ?>">Delete</a></td>
		</tr>
	<?php }}  ?>
	</div>
	</div>
</div>
