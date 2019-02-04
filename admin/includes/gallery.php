<?php

include("db/db.php");

?>
<div class="col-sm-10" id="right_side">
<table  align="center" border="3">
	<tr>
		<td align="center" colspan="20" bgcolor="orange"><h1>View Gallery and Change</h1></td>
	</tr>
	<tr>
		<th>S.no</th>
		<th>Image 1</th>
		<th>Title 1</th>
	<th>Edit</th>
		<th>Insert</th>
		<th>Delete</th>
	</tr>
	
	
	<?php

	
	if(isset($_GET['gallery'])){
		
		$query = "select * from gallery1";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$image =$row['image'];
			$title =$row['title'];
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		
		<td><img src="images/<?php echo $image; ?>" width="400" height="200"></td>
		<td><?php echo $title; ?></td>
		<td><a href="edit_gallery.php?edit_gallery=<?php echo $id; ?>"><h1>Edit</h1></a></td>
		<td><a href="insert_gallery.php"><h1>Insert</h1></a></td>
		<td><a href="delete_gallery.php?del=<?php echo $id; ?>"><h1>Delete</h1></a></td>
	</tr>
	<?php }} ?>
	
		</div>
		
	</div>
</div>
