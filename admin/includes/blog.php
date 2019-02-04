<?php

include("db/db.php");

?>
<div class="col-sm-10" id="right_side">
			
	
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Blogs & Change</h1></td>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Image</th>
		<th>Home Content</th>
		<th>Name</th>
		<th>Works</th>
		<th>Title</th>
		<th>Text</th>
		<th>Tag Name</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	
	
	<?php

	
	if(isset($_GET['blog'])){
		
		$query = "select * from news_blog order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
		$image=$row['image'];
		$name=$row['name'];
		$work= $row['work'];
		$title=$row['title'];
		$text_field=$row['text_field'];
		$text=$row['text'];
		$tag_name=$row['tag_name'];
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		
		<td><a href="edit_blog_image.php?edit=<?php echo $id; ?>"><img src="images/<?php echo $image; ?>" width="50" height="50"></a></td>
		<td><?php echo $text_field; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $work; ?></td>
		<td><?php echo $title; ?></td>
		<td><?php echo $text; ?></td>
		<td><?php echo $tag_name; ?></td>
		
		<td><a href="edit_blog.php?edit=<?php echo $id; ?>">Edit</a></td>
		<td><a href="delete_blog.php?dlt=<?php echo $id; ?>">Delete</a></td>
	</tr>
	<?php }}  ?>
	
		</div>
		
	</div>
</div>
