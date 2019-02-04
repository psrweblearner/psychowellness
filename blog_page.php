<?php include("db/db.php");?>
<!doctype html>
<html>
<head>
  <?php include("includes/head.php");?>
</head>

<body>
<div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
     
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
                    	<li><a href="blog.php">Blog</a></li>
                    	<li>Blog Page</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-sm-12">
 			<?php
	    $page_id = $_GET['id'];
		$query = "select * from news_blog where id='$page_id'";
	$run =mysqli_query($con, $query);
	while($row = mysqli_fetch_array($run)){
		$id =$row['id'];
		$image=$row['image'];
		$title=$row['title'];
		$work= $row['work'];
		$text=$row['text'];
	
?> <h4 align="center"><b><?php echo $title;?></b></h4>
		 <p align="center"><img alt="img" src="admin/images/<?php echo $image;?> " class="img-responsive"></p>
		 <?php echo $text;?>
		 <?php };?>
 		</div>
 	</div>
 </div>
 <div>
<?php include("includes/footer.php");?>	
</div>
 <?php include("includes/footerjs.php");?>	

    </body>
</html>