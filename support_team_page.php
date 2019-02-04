<?php include("db/db.php"); ?>
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
<div class="container-fluid">
	 <section id="blogArchive">      
      <div class="row">
       
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                 <ol class="breadcrumb">
                    	<li><a href="index.php">Home</a></li>
                    	<li><a href="team.php">Team</a></li>
                    	<li>Support Team</li>
                    </ol>
              </div>
             
            </div>
          </div>
            
      </div>      
    </section>
</div>


<div class="container" style="margin-bottom: 102px;">
<?php
	$page_id = $_GET['id'];
		
		$query = "select * from team2 where id='$page_id'";
		
		$run = mysqli_query($con, $query);
		
		while ($row= mysqli_fetch_array($run)){
		
		
		$image=$row['image'];
		$name=$row['name'];
		$contain=$row['contain'];
	
		
?>
	<div class="row">
	<div class="row">
	 <div class="col-sm-12">
	 	
	 </div>
		
	</div>
	
		<div class="col-sm-5">
			<p align="center" ><img src="admin/images/<?php echo $image;?>" class="img-responsive img-thumbnail"></p>
<H2 align="center"><?php echo $name;?></H2>
		</div>
		<div class="col-sm-7">
			
			<p><?php echo $contain;?></p>
			
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