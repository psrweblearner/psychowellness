<?php

include("db/db.php");

?>
<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3" width="100%">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>Attention Deficit Hyperactivity Disorder (ADHD)</h1></td>
	</tr>
	<tr>
		<th> S.No</th>
        <th>Image</th>
        <th>Logo</th>
		<th> Title</th>
		<th>Text</th>
		<th>Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['service6'])){
		
		$query = "select * from services where id=7";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$image =$row['image'];
			$logo =$row['logo'];
			$title =$row['title'];
			$text =$row['text'];
				
?>


	<tr align="center">
		<td><?php echo $i++; ?></td>
			<td><a href="edit_image.php?edit_image=<?php echo $id; ?>"><img src="images/<?php echo $image; ?>" width="50" height="50"></a></td>
		<td><a href="edit_logo.php?edit_logo=<?php echo $id; ?>"><img src="images/<?php echo $logo; ?>" width="50" height="50"></a></td>
        <td><?php echo $title; ?></td>
		<td><?php echo $text; ?></td>
		<td><a href="edit_service.php?edit_service=<?php echo $id; ?>">Edit</a></td>
		
	</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
