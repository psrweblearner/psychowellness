<?php

include("db/db.php");

?>


		<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Slider and Change</h1></td>
	</tr>
	<tr>
		<th>Slider no</th>
	    <th>Slider Image</th>
	    <th>Slider Image2</th>
	    <th>Slider Image3</th>
		<th>Slider Image4</th>
		 <th>Slider Image5</th>
		<th>Slider Image6</th>
		<th>Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['slider'])){
		
		$query = "select * from slider2 order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$slider2_id =$row['slider2_id'];
			
			$images =$row['images'];
			
			
			$images2 =$row['images2'];
			
			
		
			$images3 =$row['images3'];
			
	
			$images4 =$row['images4'];
			
			$images5 =$row['images5'];
			
	
			$images6 =$row['images6'];
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		
		<td><img src="images/<?php echo $images; ?>" width="50" height="50"></td>
		
		<td><img src="images/<?php echo $images2; ?>" width="50" height="50"></td>
		
		
		<td><img src="images/<?php echo $images3; ?>" width="50" height="50"></td>
		
		<td><img src="images/<?php echo $images4; ?>" width="50" height="50"></td>
		
			<td><img src="images/<?php echo $images5; ?>" width="50" height="50"></td>
		
		<td><img src="images/<?php echo $images6; ?>" width="50" height="50"></td>
		
		<td><a href="edit_slider.php?edit_slide=<?php echo $slider2_id; ?>">Edit</a></td>
		
	</tr>
	<?php }}  ?>
	
		</div>
		
	