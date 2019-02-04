<?php
include("db/db.php");



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">
	<table align="center" border="1px solid black" width="900px;">
		<tr>
			<td colspan="2" align="center">Insert FAQs here</td>
		</tr>
		<tr><td>title</td>
		<td><input type="text" name="title"></td></tr>
		<tr><td>text</td>
		<td><textarea cols="20" rows="5" name="text"></textarea></td></tr>
		
	
		
		<tr><td colspan="2" align="center"><input type="submit" name="insert" value="insert"></td></tr>
		
		
	</table>
</form>

</body>
</html>
<?php
if(isset($_POST['insert'])){
	//text data variables////////////////////////////////////////
	$title= $_POST['title'];
	
	$text= $_POST['text'];
	
	
	if ($title=="" or  $text==""){
		
		
		
		echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	
	
	
	   
		
	
	
	
	
	$insert ="insert into faq(title,text) values ('$title','$text')";
	
	
		
		$run = mysqli_query($con, $insert);
		if($run){
			
			
			echo"<script language='javascript'>alert(' successfilly Changed')</script>";
		}
		
		
	
	
	
}


?>

