<?php include("db/db.php");?>
<div class="col-sm-10" id="right_side">
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View and Change Home About page</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Title</th>
		<th>Contain </th>
		<th>Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['ab_h'])){
		
		$query = "select * from h_about order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$ab_id =$row['ab_id'];
			$ab_title=$row['ab_title'];
			$ab_text =$row['ab_text'];
		
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $ab_title; ?></td>
		<td><?php echo $ab_text; ?></td>
		
		
		<td><a href="ab_edit.php?edit_ab=<?php echo $ab_id; ?>">Edit</a></td>
		
	</tr>
	<?php }} ?>
	
		</div>
		