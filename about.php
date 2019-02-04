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
                    	<li>About</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div>

<div class="container">
<?php

	
	
		
		$query = "select * from h_about where ab_id=1 ";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$ab_id =$row['ab_id'];
			$ab_title= $row['ab_title'];
			$ab_text =$row['ab_text'];
	
?>
	<div class="row">
		<div class="col-sm-12" style="margin-top: 25px;">
		 <h2 align="center"><?php echo $ab_title;?></h2>
			 <p><?php echo $ab_text;?></p>
		</div>
	</div>
</div>
 <?php };?>
<div class="container">
<?php
$query = "select * from h_about where ab_id=2 ";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$ab_id =$row['ab_id'];
			$ab_title= $row['ab_title'];
			$ab_text =$row['ab_text'];
	
?>
	<div class="row">
		<div class="col-sm-12">
			<h2 align="center"><?php echo $ab_title;?></h2>
			 <p><?php echo $ab_text;?></p>
		</div>
	</div>
</div>
 <?php };?>
<div class="container">
<div class="row">
		<div class="col-sm-12" style="margin-top: 25px; margin-bottom: 30px;">
			<h2 align="center">Our Values </h2>
			<div class="row">
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-2">
				<?php
$query = "select * from h_about where ab_id=3 ";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$ab_id =$row['ab_id'];
			$ab_title= $row['ab_title'];
			$ab_text =$row['ab_text'];
	
?>
				<h4 align="center" style="color:blue; font-weight: bolder; box-shadow: 5px 5px 10px gray;">  <?php echo $ab_title;?> </h4>
					<p style="border: 4px groove blue; background: #AA90F7; color: white; padding: 6px;height: 141px; box-shadow: 5px 5px 10px #5f5fa080;"><?php echo $ab_text;?></p>
					<?php };?>
				</div>
				<div class="col-sm-2">
					<?php
$query = "select * from h_about where ab_id=4";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$ab_id =$row['ab_id'];
			$ab_title= $row['ab_title'];
			$ab_text =$row['ab_text'];
	
?>
					<h4 align="center" style="color:red; font-weight: bolder; box-shadow: 5px 5px 10px gray;"><?php echo $ab_title;?> </h4>
					<p style="border: 4px groove #ff3700 ; background: #F79090; color: white; padding: 6px; font-family:Verdana;height: 141px; box-shadow: 5px 5px 10px #97665999;"><?php echo $ab_text;?></p>
					<?php };?>
				</div>
				<div class="col-sm-2">
						<?php
$query = "select * from h_about where ab_id=5 ";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$ab_id =$row['ab_id'];
			$ab_title= $row['ab_title'];
			$ab_text =$row['ab_text'];
	
?>
				<h4 align="center" style="color:green; font-weight: bolder; box-shadow: 5px 5px 10px gray;"><?php echo $ab_title;?></h4>
					<p style="border: 4px groove #0de80c; background: #84D97B; color: white; padding: 6px; font-family:Verdana;height: 141px; box-shadow: 5px 5px 10px #499d49b3;"><?php echo $ab_text;?></p>	
					<?php };?>
				</div>
				<div class="col-sm-2">
						<?php
$query = "select * from h_about where ab_id=6";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$ab_id =$row['ab_id'];
			$ab_title= $row['ab_title'];
			$ab_text =$row['ab_text'];
	
?>
					<h4  align="center" style="color:#C531F5; font-weight: bolder; box-shadow: 5px 5px 10px gray;"><?php echo $ab_title;?> </h4>
					<p style="border: 4px groove #e200ff; background: #C272C8; color: white; padding: 6px; font-family:Verdana;height: 141px; box-shadow: 5px 5px 10px #92549acc;"><?php echo $ab_text;?></p>
					<?php };?>
				</div>
				<div class="col-sm-2">
						<?php
$query = "select * from h_about where ab_id=7 ";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$ab_id =$row['ab_id'];
			$ab_title= $row['ab_title'];
			$ab_text =$row['ab_text'];
	
?>
					<h4  align="center" style="color:orange; font-weight: bolder; box-shadow: 5px 5px 10px gray;">  EXCELLENCE </h4>
					<p style="border: 4px groove #fbc008; background: #FFB780; color: white; padding: 6px; font-family:Verdana;height: 141px; box-shadow: 5px 5px 10px #99750ab3;"><?php echo $ab_text;?></p>
					<?php };?>
				</div>
				<div class="col-sm-1">
					
				</div>
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