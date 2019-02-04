<?php

	
include("db/db.php");

?>



		<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3" width="100%">
	
	<tr>
		<td align="center" colspan="18" bgcolor="orange"><h1>Relationship Issues</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Image</th>
		<th>Title</th>
		<th>Text</th>
		<th> Image1</th>
		<th>Title1</th>
		<th>Text1</th>
		<th>Image2</th>
		<th>Title2</th>
        <th>Text2</th>
		<th>Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['service_t6'])){
		
		$query = "select * from service2 where id=3";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$image =$row['image'];
			$title =$row['title'];
			
			$text =$row['text'];
			
			$image1 =$row['image1'];
			$title1 =$row['title1'];
			
			$text1 =$row['text1'];
			
			$image2 =$row['image2'];
			$title2 =$row['title2'];
			
			$text2 =$row['text2'];
			
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
	
		<td><a href="edit_image_t.php?edit_image_t=<?php echo $id; ?>"><img src="images/<?php echo $image; ?>" width="50" height="50"></a></td>
		<td><?php echo $title; ?></td>
		
		
		<td><?php echo $text; ?></td>
        
		<td><a href="edit_image_t1.php?edit_image_t1=<?php echo $id; ?>"><img src="images/<?php echo $image1; ?>" width="50" height="50"></a></td>
		<td><?php echo $title1; ?></td>
		<td><?php echo $text1; ?></td>
        
       <td><a href="edit_image_t2.php?edit_image_t2=<?php echo $id; ?>"><img src="images/<?php echo $image2; ?>" width="50" height="50"></a></td>
		<td><?php echo $title2; ?></td>
		<td><?php echo $text2; ?></td>
		
		<td><h4><u><b><a href="edit_service_t.php?edit=<?php echo $id; ?>">CLICK HERE FOR EDIT</a><u><b><h4></td>
		
	</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
