<?php

	
include("db/db.php");

?>



		<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3" width="100%">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View & Change Career</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Containt</th>
		
		<th>Click here for Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['con_cr'])){
		
		$query = "select * from career_text";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$text =$row['text'];
			
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $text; ?></td>
		
		
		<td><h4><a href="edit_cr_text.php?edit=<?php echo $id; ?>">Click here for Edit </a><h4></td>
		
	</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
