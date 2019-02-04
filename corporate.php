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
                    	<li>Corporate</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div>      
<!--Header Imagge -->
<div class="container-fluid">
	<div class="row">
	  <div class="col-lg-12" style="padding: 0px;">
	  	 <div class="header_img">
	  	 <img src="images/corporate.png" class="img-responsive">
	  	 	
	  	 </div>
	  </div>
		
	</div>
</div>
<!-- End header Image-->
<!---Main Content -->    
   <div class="container">
   	    <div class="row">
   	        <h2 style="text-align: center; margin-top: 20px;">Key Differentiator</h2>
            <h3 style="text-align: center;">Inspire your employee & business execution excellence a lift</h3>
   	        <div class="col-sm-3">
   	        	<div class="blockedu">
   	        	<p align="center"><img src="images/personalwell.png" class="img-responsive"></p>
   	        		<h4 style="text-align:center; color: #f03811;">PERSONAL WELL-BEING</h4>
                    <h5 style="text-align:center;">Nurturing employees happiness</h5>
   	        		<p  style="text-align:center;">Enhance 25 man-days per employee per year </p>
   	        	</div>
   	        </div>
   	        <div class="col-sm-3">
   	        	<div class="blockedu">
   	        	<p align="center"><img src="images/happpierfamily.png" class="img-responsive"></p>
   	        		<h4  style="text-align:center; color: #f03811;">HAPPIER FAMILY</h4>
                     <h5 style="text-align:center;">Fostering family wellbeing</h5>
   	        			<p  style="text-align:center;">Increase net profits by 14%</p>
   	        	</div>
   	        </div>
   	        <div class="col-sm-3">
   	        	<div class="blockedu">
   	        	<p align="center"><img src="images/performance.png" class="img-responsive"></p>
   	        	<h4  style="text-align:center; color: #f03811;">IMPROVING PERFORMANCE</h4>
                <h5 style="text-align:center;">Accomplishing defined objectives</h5>
   	        		<p  style="text-align:center;">Improve employee productivity by 27%</p>	
   	        	</div>
   	        </div>
   	        <div class="col-sm-3">
   	        	<div class="blockedu">
   	        	<p align="center"><img src="images/enterprises.png" class="img-responsive"></p>
   	        	<h4  style="text-align:center; color: #f03811;">EFFECTIVE ENTERPRISE</h4>
                     <h5 style="text-align:center;">Aligning vision for sustainable growth</h5>
   	        		<p  style="text-align:center;">Boost revenue generated per employee by 34% </p>	
   	        	</div>
   	        </div>
   	        	

   	    </div>
   </div>
<!-- End Main Content-->
<!-- Approach Section-->
<div class="container">
	<div class="row">
		<h2 style="text-align: center; margin-top: 30px;">Our Four Pillars Of Employee Happiness Program</h2>
		<div class="col-md-3">
		<p align="center"><img src="images/aaa.png" class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811; font-size: 19px;">24*7 SUPPORT</h3>
			<p style="text-align: center;">To provide the best customer support</p>
		</div>
		<div class="col-md-3">
		<p align="center"><img src="images/behavioural.png"class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811; font-size: 19px;">BEHAVIOURAL ASSESSMENT</h3>
			<p style="text-align: center;">To observe, describe, explain, predict behaviour</p>
		</div>
		<div class="col-md-3">
		<p align="center"><img src="images/stategic action plan.png" class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811; font-size: 19px;">STRATEGIC ACTION PLAN</h3>
			<p style="text-align: center;">To make sure your organization's vision is made</p>
		</div>
		<div class="col-md-3">
		<p align="center"><img src="images/111.png" class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811; font-size: 19px;">INDOOR/OUTDOOR PROGRAM FOR HAPPINESS</h3>
			<p style="text-align: center;">Supporting employee to have a strong sense of being and belonging </p>
		</div>
	</div>
	
</div>
<!-- End Approach Section-->
<!--form-->
<div>
<?php include("includes/get_touch.php");?>	
</div>
<!--End Form-->
<div>
<?php include("includes/footer.php");?>	
</div>
 <?php include("includes/footerjs.php");?>
   
	<?php

if(isset($_POST['submit'])){
	 $name= $_POST['name'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$subject= $_POST['subject'];
	$address= $_POST['address'];
	$message= $_POST['message'];
	if($name=="" or $email=="" or $mobile==""  or $subject=="" or $address==""){
	exit();
	}
$c_insert = "insert into get_tuch(name,email,mobile,address,subject,message) values ('$name','$email','$mobile','$address', '$subject','$message')";
	$c_run = mysqli_query($con,$c_insert);
		if($c_run){
		echo"<script language='javascript'>window.open('index.php?published=Message has been sent','_self')</script>";
		}
}

?>								
     							
     
