<html>
<script src="tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
    selector: '#mytextarea',
	height:200,
	theme:'modern',
	plugins: [
		'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		'searchreplace wordcount visualblocks visualchars code fullscreen',
		'insertdatetime media nonbreaking save table contextmenu directionality',
		'emoticons template paste textcolor colorpicker textpattern imagetools'
	],
	toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	toolbar2: 'print preview media | forecolor backcolor emoticons',
	image_advtab: true
  });
  </script>
	<body>


<?php

include("db/db.php");

$edit_id = @$_GET['edit_tips'];
$query = "select * from today_tips where tips_id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['tips_id'];
			
			$tips_title =$row['tips_title'];
			$tips_text =$row['tips_text'];
			


?>

<form method="post" action="tips_edit.php?edit_form_tips=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
	<table align="center" border="10" width="600">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow"><h1>Changing Today Health Tips </h1></td>
			
			
		</tr>
		<tr>
			<td align="right">Tips Title</td>
			<td><input type="text" name="tips_title" size="50" value="<?php echo $tips_title; ?>"></td>
		</tr>
		<tr>
			<td align="right">Tips Text</td>
			<td><textarea id="mytextarea" name="tips_text"><?php echo $tips_text; ?></textarea></td>
		</tr>
		
		
		
		<tr>
			
			<td align="center" colspan="5"><input type="submit" name="tips_update" value="Change Now"></td>
		</tr>
		
		
		<?php } ?>
	</table>
	
	
	
</form>

</body>
</html>

<?php
if(isset($_POST['tips_update'])){
	
	$update_id = $_GET['edit_form_tips'];
	
	$tips_title= $_POST['tips_title'];
	$tips_text= $_POST['tips_text'];
	
	
		
		
		
	$update_query ="update today_tips set tips_title='$tips_title',tips_text='$tips_text', where tips_id='$update_id'";
	
	if(mysqli_query($con,$update_query)){
		
		
		
		echo"<script language='javascript'>window.open('index.php?published=Today Health Tips has been Changed','_self')</script>";
	}
}





?>












