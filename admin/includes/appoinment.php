<?php

include("db/db.php");

?>




		<div class="col-sm-10" id="right_side">
			
	
		
	
<table  align="center" border="7" width="100%" >
	
	<tr>
		<td align="center" colspan="20" bgcolor="orange"><h1>Appoinment Section</h1></td>
		
	</tr>
	<tr>
		<th align="center">S.No</th>
		<th >Name</th>
		<th>Email Id</th>
		
		<th>Mobile No.</th>
        <th>Dr. Name</th>
		<th>Appoinment Date</th>
		<th>Time</th>
		<th>Delete</th>
		
		</tr>
		<?php 
	
	$query = "select * from appoinment";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$ap_id =$row['ap_id'];
			$ap_name =$row['ap_name'];
			$ap_email =$row['ap_email'];
			
		
			$ap_mobile =$row['ap_mobile'];
				$ap_dr =$row['ap_dr'];
		
			$ap_date =$row['ap_date'];
			$ap_time =$row['ap_time'];
			
			
			
			
	
	
	
	
		?>
	<tr align="center" bgcolor="#B9B1B1";>
		<td><?php echo $ap_id;?></td>
		<td><?php echo $ap_name;?></td>
		<td><?php echo $ap_email;?></td>
		
		<td><?php echo $ap_mobile;?></td>
        <td><?php echo $ap_dr;?></td>
		<td><?php echo $ap_date;?></td>
		<td><?php echo $ap_time;?></td>
		<td><a href="delete_ap.php?del=<?php echo $ap_id; ?>">Delete</a></td>
		
		
		
		
	</tr>
	
	
		</div>
		
	<?php };?>