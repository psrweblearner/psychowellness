<html>
	<body>


<?php

include("db/db.php");

$edit_id = @$_GET['op_edit'];
$query = "select * from opening_hours where op_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['op_id'];
			
			$op_text =$row['op_text'];
			$op_m_f =$row['op_m_f'];
			
			$op_s =$row['op_s'];
			$op_sun =$row['op_sun'];
			
			
			$op_c =$row['op_c'];



?>

<form method="post" action="op_edit.php?edit_form_op=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Changing Opening Hours</h1></td>
			
			
		</tr>
		<tr>
			<td align="right">Opening Hours Text</td>
			<td><input type="text" name="op_text" size="50" value="<?php echo $op_text; ?>"></td>
		</tr>
		<tr>
			<td align="right">Monday To Friday</td>
			<td><input type="text" name="op_m_f" size="50" value="<?php echo $op_m_f; ?>"></td>
		</tr>
		<tr>
			<td align="right">Saturday</td>
			<td><input type="text" name="op_s" size="50" value="<?php echo $op_s; ?>"></td>
		</tr>
		<tr>
			<td align="right">Sunday</td>
			<td><input type="text" name="op_sun" size="50" value="<?php echo $op_sun; ?>"></td>
		</tr>
		<tr>
			<td align="right">Closing Day (If any)</td>
			<td><input type="text" name="op_c" size="50" value="<?php echo $op_c; ?>"></td>
		</tr>
		
		
		
		
		<tr>
			
			<td align="center" colspan="5"><input type="submit" name="op_update" value="Change Now"></td>
		</tr>
		
		
		<?php } ?>
	</table>
	
	
	
</form>

</body>
</html>

<?php
if(isset($_POST['op_update'])){
	
	$update_id = $_GET['edit_form_op'];
	
	$op_text= $_POST['op_text'];
	$op_m_f= $_POST['op_m_f'];
	$op_s= $_POST['op_s'];
	$op_sun= $_POST['op_sun'];
	$op_c= $_POST['op_c'];
	
	
	
	
		
		
		
	$update_query ="update opening_hours set op_text='$op_text',op_m_f='$op_m_f', op_s='$op_s', op_sun='$op_sun', op_c='$op_c' where op_id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Opening Hours has been Changed','_self')</script>";
	}
}





?>












