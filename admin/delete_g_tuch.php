<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	
include("db/db.php");
	$delete_id = $_GET['del'];
	
	$delete_query = "delete from get_tuch where id='$delete_id'";
	
	if(mysqli_query($con,$delete_query)){
		
echo "<script language='javascript'>window.open('index.php?delete= Get In Touch has been deleted...','_self')</script>";	}
?>

</body>
</html>