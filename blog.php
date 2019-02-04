<?php include("db/db.php");?>
<!doctype html>
<html>
<head>
  <?php include("includes/head.php");?>

</head>
<body>
<div>
<?php include("includes/header.php");?>	
</div>
 <div class="container-fluid" style="background: #f5f5f5">
 	 <section id="blogArchive">      
       <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
               <ol class="breadcrumb">
                    	<li><a href="index.php">Home</a></li>
                    	<li>Blog</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div>
 <div class="container" >
 	<div class="row" style="margin-top: 20px;">
 		<div class="col-sm-9">
 		<?php
$query="select *from news_blog"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$name=$row['name'];
		$work= $row['work'];
		$title=$row['title'];
		$text_field=$row['text_field'];
		
		
?>
 		<div class="row">
 			<div class="col-sm-4">
 				<div class="blog-img">
  <figure class="blog-figure">
  <a href="blog_page.php?id=<?php echo $id; ?>"><img alt="img" src="admin/images/<?php echo $image;?>"></a>
   </figure>
   </div>
   <div class="blog-author">
   <ul>
   <li>By <a href="#"><?php echo $name;?></a></li>
   <li> <a href="#"><?php echo $work;?></a></li>
   </ul>
   </div>
 			</div>
 			<div class="col-sm-8">
 				<div class="blog-content">
 		<p><?php echo $text_field;?></p>
   
   </div>
 			</div>
 		</div>
 		
 		<div class="row">
 			<div class="readmore_area" style="margin-top: 0px;float: right; font-size: 7px;">
   <a href="blog_page.php?id=<?php echo $id; ?>" data-hover="Read More"><span>Read More</span></a> 
                 
   </div>
   
 		</div>
 		<hr style="border: 1px solid #5d5b5b;"> 
 		<?php };?>
 	</div>
 	<div class="col-sm-3 bg-success">
 		 <div class="sidebar-widget">
                          <h3>Latest Posts</h3>
                          	<?php
			$query ="select * from news_blog order by 1 DESC LIMIT 0,3";
	$run =mysqli_query($con, $query);
	while($row = mysqli_fetch_array($run)){
		$id =$row['id'];
		$image=$row['image'];
		$date= $row['date'];
		$title=$row['title'];
		
	
?>
                          <ul class="popular-tab">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="blog_page.php?id=<?php echo $id; ?>" class="news-img">
                                   <img alt="img" src="admin/images/<?php echo $image;?>" class="media-object">
                                 
                                  </a>
                                </div>
                                <div class="media-body">
                                 <a href="blog_page.php?id=<?php echo $id; ?>"><?php echo $title; ?></a>
                                 <span class="feed-date"><?php echo $date;?></span>
                                </div>
                              </div>
                            </li>
                                  
                          </ul>
                          <?php  } ?>
                        </div>
 			 <div class="sidebar-widget">
                          <h3>Tags</h3>
                          	<?php
			$query ="select * from news_blog";
	$run =mysqli_query($con, $query);
	while($row = mysqli_fetch_array($run)){
		$id =$row['id'];
		$image=$row['image'];
		$name=$row['name'];
		$date= $row['date'];
		$work= $row['work'];
		$tag_name=$row['tag_name'];
		$title=$row['title'];
		$text=$row['text'];
	
?>
                          <ul class="tag-nav">
                            <li><a href="blog_page.php?id=<?php echo $id; ?>"><?php echo $tag_name;?></a></li>
                           
                          </ul>
                          <?php };?>
                        </div>
 	</div>
 	</div>
 </div>
 <div>
<?php include("includes/footer.php");?>	
</div>
<?php include("includes/footerjs.php");?>	

    </body>
</html>