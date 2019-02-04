
<?php

include("db/db.php");
$edit_id = @$_GET['edit'];
$query = "select * from pfeedback where pf_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			echo $edit_id1 =$row['pf_id'];
			echo $pname= $row['pname'];
	echo $pmessage= $row['pmessage'];
	$q="insert into approval(name,message) values('$pname','$pmessage')";
	
	if(mysqli_query($con,$q)){
		$delete_id = $_GET['edit'];
	
	$delete_query = "delete from pfeedback where pf_id='$delete_id'";
	
	if(mysqli_query($con,$delete_query)){
		
		
echo "<script language='javascript'>window.open('index.php?delete= Feedback has been Approved...','_self')</script>";	
	}
	}
}
?>