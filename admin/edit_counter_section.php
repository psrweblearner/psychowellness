<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>
</head>
<body>
<?php

include("db/db.php");

$edit_id = @$_GET['edit_cs'];
$query = "select * from countersection where cs_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['cs_id'];
			$dr_cs =$row['dr_cs'];
			$dr_no =$row['dr_no'];
			$clinic_cs =$row['clinic_cs'];
			$clinic_no =$row['clinic_no'];
			$award_cs =$row['award_cs'];
			$award_no =$row['award_no'];
			$happy_p_cs =$row['happy_p_cs'];
			$happy_p_no =$row['happy_p_no'];
	?>

<form method="post" action="edit_counter_section.php?edit_form_cs=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Change Counter Section</h1></td>
		</tr>
		<tr>
			<td><input type="text" name="dr_cs" size="50" value="<?php echo $dr_cs; ?>"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="dr_no" size="50" value="<?php echo $dr_no; ?>"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="clinic_cs" size="50" value="<?php echo $clinic_cs; ?>"></td>
		</tr>
		
		
		<tr>
			
			<td><input type="text" name="clinic_no" size="50" value="<?php echo $clinic_no; ?>"></td>
		</tr>
			<tr>
			
			<td><input type="text" name="award_cs" size="50" value="<?php echo $award_cs; ?>"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="award_no" size="50" value="<?php echo $award_no; ?>"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="happy_p_cs" size="50" value="<?php echo $happy_p_cs; ?>"></td>
		</tr>
		
		
		<tr>
			
			<td><input type="text" name="happy_p_no" size="50" value="<?php echo $happy_p_no; ?>"></td>
		</tr>
		
		
		
		<tr>
			
			<td align="center" colspan="5"><input type="submit" name="update" value="Update Now"></td>
		</tr>
		
		
		<?php } ?>
	</table>
	
	
	
</form>
<?php include("includes/script.php");?>
</body>
</html>

<?php
if(isset($_POST['update'])){
	
	$update_id = $_GET['edit_form_cs'];
	$dr_cs= $_POST['dr_cs'];
	$dr_no= $_POST['dr_no'];
	$clinic_cs= $_POST['clinic_cs'];
	$clinic_no= $_POST['clinic_no'];
	$award_cs= $_POST['award_cs'];
	$award_no= $_POST['award_no'];
	$happy_p_cs= $_POST['happy_p_cs'];
	$happy_p_no= $_POST['happy_p_no'];
	
	
	
	   
		
		$update_query ="update countersection set dr_cs='$dr_cs',dr_no='$dr_no',clinic_cs='$clinic_cs',clinic_no='$clinic_no',award_cs='$award_cs',award_no='$award_no', happy_p_cs='$happy_p_cs',happy_p_no='$happy_p_no'  where cs_id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Counter Section has been published','_self')</script>";
	}
}





?>












