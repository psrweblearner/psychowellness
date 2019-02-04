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
                    	<li>Education</li>
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
	  	 <img src="images/edu2.jpg" class="img-responsive">
	  	 	
	  	 </div>
	  </div>
		
	</div>
</div>
<!-- End header Image-->
<!---Main Content -->    
   <div class="container">
   	    <div class="row">
   	        <h2 style="text-align: center; margin-top: 20px;">Our Four Pillars of School Happiness Programme</h2>
   	        <div class="col-sm-3">
   	        	<div class="blockedu">
   	        	<p align="center"><img src="images/ass.png" class="img-responsive"></p>
   	        		<h5 style="text-align:center; color: #f03811;">ASSESSMENTS & SCREENING</h5>
   	        		<p  style="text-align:center;">Scientific assessments for the student to identify key issues related to developmental and psychological issues.</p>
   	        	</div>
   	        </div>
   	        <div class="col-sm-3">
   	        	<div class="blockedu">
   	        	<p align="center"><img src="images/cou1.png" class="img-responsive"></p>
   	        		<h5  style="text-align:center; color: #f03811;">COUNSELLING</h5>
   	        			<p  style="text-align:center;">Counselling services from our qualified and experience professionals trained in school based happiness program.</p>
   	        	</div>
   	        </div>
   	        <div class="col-sm-3">
   	        	<div class="blockedu">
   	        	<p align="center"><img src="images/res2.png" class="img-responsive"></p>
   	        	<h5  style="text-align:center; color: #f03811;">RESOURCES FOR TEACHERS/PARENTS</h5>
   	        		<p  style="text-align:center;">To promote student achievement, improve behaviour and attendance, and help holistic development.</p>	
   	        	</div>
   	        </div>
   	        <div class="col-sm-3">
   	        	<div class="blockedu">
   	        	<p align="center"><img src="images/trai3.png" class="img-responsive"></p>
   	        	<h5  style="text-align:center; color: #f03811;">TRAINING & WORKSHOPS</h5>
   	        		<p  style="text-align:center;">Customized plans for parents, teachers and students</p>	
   	        	</div>
   	        </div>
   	        	
   	    </div>
   </div>
<!-- End Main Content-->
<!-- Approach Section-->
<div class="container">
	<div class="row">
		<h2 style="text-align: center; margin-top: 30px;">Our Approach</h2>
		<div class="col-md-4">
		<p align="center"><img src="images/evolution.png" class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811;">EVALUATION</h3>
			<p style="text-align: center;">We carry in-depth,scientific assessment to monitor a child&#39;sphysical, intellectual,social, and emotional development.</p>
		</div>
		<div class="col-md-4">
		<p align="center"><img src="images/colaboration.png" class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811;">COLLABORATION</h3>
			<p style="text-align: center;">We conduct comprehensive child protection risk  assessment and planning in collaboration with families andteachers. We also collaborate withschools to deliver interventions based onthe requirement of students, parentsand the teachers.</p>
		</div>
		<div class="col-md-4">
		<p align="center"><img src="images/engagement.png" class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811;">ENGAGEMENT</h3>
			<p style="text-align: center;">Regular conduction of workshops and training programs to increase awareness regarding mental health issues among parents, teachers and children.</p>
		</div>
		
	</div>
	<div class="row">
	
		<div class="col-md-4">
		<p align="center"><img  src="images/relation.png" class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811;">RELATIONSHIP</h3>
			<p style="text-align: center;">We want children to be safe,happy and empowered. We arecommitted to the safety,participation andempowerment of all children.We deliver-
	<ol>
	<li>Parenting plans and program for enhancing parenting skills</li>
	<li>Family dispute resolutionand mediation</li>
	<li>Child counselling</li>
	<li>Counselling for individuals,couples and families</li>
	<li>Family mental healthsupport services</li>
	</ol>		
</p>
		</div>
		<div class="col-md-4">
		<p align="center"><img src="images/managing.png" class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811;">MANAGING EMOTIONS</h3>
			<p style="text-align: center;">Engaging in activities and offering some practical ideas about how astudent can manageher/his own emotions so that s/he can use and harness them, but are not governed entirely by them.</p>
		</div>
		<div class="col-md-4">
		<p align="center"><img src="images/monitring.png" class="img-responsive"></p>
			<h3 style="text-align: center; color: #f03811;">MONITORING</h3>
			<p style="text-align: center;">Supervising all the activities in progressto ensure they are on-course and on-schedule in meetingthe objectives and performance goal.</p>
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
     
