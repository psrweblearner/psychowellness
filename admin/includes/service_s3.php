<?php

	
include("db/db.php");

?>



<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>Bipolar Disorder</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		
		<th>Title</th>
		<th>Text</th>
		<th>Image1</th>
		<th>Title 2</th>
		<th>Text2</th>
		<th>Image2</th>
        <th>Title 3</th>
		<th>Text3</th>
		<th>Image3</th>
	<th>Quots</th>
		<th>Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['service_s3'])){
		
		$query = "select * from service1 where id=8";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			
			$title1 =$row['title1'];
			
			$text1 =$row['text1'];
			$image1 =$row['image1'];
			$title2 =$row['title2'];
			
			$text2 =$row['text2'];
			$image2 =$row['image2'];
			$title3 =$row['title3'];
			
			$text3 =$row['text3'];
			$image3 =$row['image3'];
			$quots =$row['quots'];
			
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		
		
		<td><?php echo $title1; ?></td>
		
		
		<td><?php echo $text1; ?></td>
		<td><a href="edit_image_s.php?edit_image_s=<?php echo $id; ?>"><img src="images/<?php echo $image1; ?>" width="50" height="50"></a></td>
        <td><?php echo $title2; ?></td>
		
		
		<td><?php echo $text2; ?></td>
		<td><a href="edit_image_s1.php?edit_image_s1=<?php echo $id; ?>"><img src="images/<?php echo $image2; ?>" width="50" height="50"></a></td>
        <td><?php echo $title3; ?></td>
		
		
		<td><?php echo $text3; ?></td>
		<td><a href="edit_image_s2.php?edit_image_s2=<?php echo $id; ?>"><img src="images/<?php echo $image3; ?>" width="50" height="50"></a></td>
		<td><?php echo $quots; ?></td>
		<td><a href="edit_service_s.php?edit=<?php echo $id; ?>">Edit</a></td>
		
	</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
