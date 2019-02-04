<?php

include("db/db.php");

?>
<div class="col-sm-10" id="right_side">
<table  align="center" border="3">
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>Terms & Conditions</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Contain</th>
		<th> Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['tr_cd'])){
		
		$query = "select * from terms_condition";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
		$text_field =$row['text_field'];
	
?>
<tr align="center">
		<td><?php echo $i++; ?></td>
	<td><?php echo $text_field; ?></td>
		<td><h4><a href="edit_trcd.php?edit=<?php echo $id; ?>"> Edit</a><h4></td>
   
		
	</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
