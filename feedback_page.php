<?php include("db/db.php");
 include('includes/fb_pagination.php'); 
?>
<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>

    <style type="text/css">
	.form-group input{
		border: 2px solid #006fff;
	}
	.form-group textarea{
		border: 2px solid #006fff;
	}
	</style>
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
                    	<li>Feedback</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div>


 <div class="container">
 	 <div class="row">
 	 	<div class="col-sm-12" style="margin-top: 30px;">
 	 			<form role="form" method="post" action="#" enctype="multipart/form-data">
	<div class="form-group" >
	<label for="email">Name:</label>
	<input type="text" class="form-control" name="pname" placeholder="Enter Name">
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
		
		</div>
					</div>
					<div class="col-sm-6">
					<div class="form-group">
		
		</div>	
					</div>
				</div>
		
		<div class="form-group">
		<label for="pwd">Feedback:</label>
		<textarea class="form-control" name="pmessage"></textarea>
		<BR>
		<button  style="padding: 7px 540px;
background-color: #33b7a0;
color: white;
font-size: 18px;" type="submit" name="submit">Submit</button>
		</div>
	</form>
 	 	</div>
 	 </div>
	</div>
	<div class="container">
		<div class="row">
			<h2 align="center">TESTIMONIALS</h2>
		</div>
	</div>
	
		<div class="container">
		<div class="row" style="margin-top: 5px; margin-bottom: 5px;">
				
				<?php 
 	while($crow = mysqli_fetch_array($nquery)){
                 ?>
					<p><?php echo $crow['message'] ;?></p>
					<p align="right"><b>Anonymous</b></p>
					<?php }; ?>
		<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
				</div>
				</div>
	
<div>
<?php include("includes/footer.php");?>	
</div>
 <?php include("includes/footerjs.php");?>	

    </body>
</html>




<?php
if(isset($_POST['submit'])){
	$pname= $_POST['pname'];
	
	$pmessage= $_POST['pmessage'];
	
	if($pname=='' or  $pmessage==''){
		echo "<script language='javascript'>alert('Any feild is empty')</script>";
		exit();
	
	}
	{
		move_uploaded_file($image_tmp,"admin/images/$pimage");

}
	
	$insert_fb = "insert into pfeedback(pname,pmessage) values ('$pname','$pmessage')";
	$run_fb = mysqli_query($con, $insert_fb);
		if($run_fb){
			
			
			echo"<script language='javascript'>alert('Feedback has been published')</script>";
		}
		
}

?>


