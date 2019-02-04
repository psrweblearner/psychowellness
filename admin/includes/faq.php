<?php

include("db/db.php");

?>




		<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View FAQs and Change</h1></td>
	</tr>
	<tr>
		<th>Slider no</th>
		<th>Title</th>
		<th>Text</th>
		
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	
	
	<?php

	
	if(isset($_GET['faq'])){
		
		$query = "select * from faq order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title =$row['title'];
			
			$text =$row['text'];
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $title; ?></td>
		<td><?php echo $text; ?></td>
		
		<td><a href="edit_faq.php?edit=<?php echo $id; ?>">Edit</a></td>
		<td><a href="delete_faq.php?dlt=<?php echo $id; ?>">Delete</a></td>
	</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
