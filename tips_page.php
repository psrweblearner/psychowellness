<?php include("db/db.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include("includes/head.php");?>

</head>

<body>
<div>
<?php include("includes/header.php");?>	
</div>
  <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                 <ol class="breadcrumb">
                    	<li><a href="index.php">Home</a></li>
                    	<li>Today Health Tips</li>
                    </ol>
              </div>
              <div class="blog-breadcrumbs-right">
                
              </div>
            </div>
          </div>
        </div>        
      </div>      
    </section>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php
	$page_id = $_GET['id'];
		
		$query = "select * from today_tips where tips_id='$page_id'";
		
		$run = mysqli_query($con, $query);
		
		while ($row= mysqli_fetch_array($run)){
		
		
		$tips_title= $row['tips_title'];
		$tips_text= $row['tips_text'];
		$tips_image= $row['tips_image'];
		
	
		
?>
	
	<h3 align="center" style="text-transform: uppercase;  font-weight: bolder;"><?php echo $tips_title;?></h3>
	
			<img src="admin/images/<?php echo $tips_image;?>" class="img-responsive"> <br>
		<div class="row">
		<div class="col-sm-2"></div>
       
		<div class="col-sm-7" id="tips">
		<p><?php echo $tips_text;?></p>
		</div>
		<div class="col-sm-3">
			
		</div>
	
		</div>
			
		
	
	
	
	 <div class="readmore_area">
                <a href="index.php" data-hover="GO BACK" ><span>GO BACK</span></a>
              </div>
		</div>
	</div>
</div>
<?php };?>




<div>
<?php include("includes/footer.php");?>	
</div>
 <?php include("includes/footerjs.php");?>	

    </body>
</html>