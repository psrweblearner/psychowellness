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
<?php include("includes/header.php");?></div>
<div class="container-fluid">
	 <section id="blogArchive">      
      <div class="row">
       
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                 <ol class="breadcrumb">
                    	<li><a href="index.php">Home</a></li>
                    	<li>Terms & Conditions</li>
                    </ol>
              </div>
             
            </div>
          </div>
            
      </div>      
    </section>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php
			include("db/db.php");
			$query="select * from terms_condition";
			$run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run)){
			$id=$row['id'];
				$text_field=$row['text_field'];
				echo $text_field;
			}
			?>
		</div>
	</div>
</div>

<div>
<?php include("includes/footer.php");?>	
</div>
 <?php include("includes/footerjs.php");?>	


    </body>
</html>