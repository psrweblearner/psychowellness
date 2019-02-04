<?php include("db/db.php");?>		

<div class="col-sm-10" id="right_side">
			

<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Today tips and Change</h1></td>
	</tr>
	<tr>
		<th>Slider no</th>
		<th>Tips Title</th>
		<th>Tips Text</th>
		<th>Tips Image</th>
		<th>Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['tips'])){
		
		$query = "select * from today_tips order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['tips_id'];
			$tips_title =$row['tips_title'];
			$tips_text =$row['tips_text'];
			$tips_image =$row['tips_image'];
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $tips_title; ?></td>
		
		<td><?php echo $tips_text; ?></td>
		<td><a href="edit_tips.php?edit=<?php echo $id; ?>"><img src="images/<?php echo $tips_image; ?>" width="50" height="50"></a></td>
		
		
		
		<td><a href="tips_edit.php?edit_tips=<?php echo $id; ?>">Edit</a></td>
		
	</tr>
	<?php }}  ?>
	
		</div>
		