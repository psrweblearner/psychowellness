<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header("location: login.php");
}
else{
include("db/db.php");
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2" id="left_side">
			<h4>Manage Your Website</h4>
            <b style="color:#FFF">Welcome:</b><?php echo $_SESSION['user_name']; ?>
			<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
        <h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Admin <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="index.php?ad_user=ad_user">View User</a></li>
				<li><a href="index.php?in_user=in_user">Insert User</a></li>
			</ul></h4>
			</li>
           <h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Home <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="index.php?appoinment=appoinment">Appoinment section</a></li>
				<li><a href="index.php?view=view">Change Slider </a></li>
				<li><a href="index.php?opening=opening">Opening Hours </a></li>
				<li><a href="index.php?tips=tips">Today Tips </a></li>
				<li><a href="index.php?ab_h=ab_h">About us </a></li>
				<li><a href="index.php?cs=cs">Counter Section</a></li>
			</ul></h4>
			</li>
			<h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Doctors <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="index.php?team=team">View & Change Team</a></li>
				<li><a href="index.php?insert=insert">Insert Doctor Details</a></li>
				</ul></h4>
            </li>
             <h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Staff <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="index.php?team2=team2">View and Change</a></li>
				<li><a href="index.php?insert_staff=insert_staff">Insert Staff Section</a></li>
				</ul></h4>
			</li>
            <h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="index.php?contact=contact">View User Who Contact You</a></li>
				<li><a href="index.php?g_touch=g_touch">Get In Touch</a></li>
				<li><a href="index.php?contact_info=contact_info">Change Contact Info </a></li>
				</ul></h4>
			</li>
			<h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Blog <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="index.php?blog=blog">View & Change Blog</a></li>
				<li><a href="index.php?blog1=blog1">Insert Blog</a></li>
			</ul></h4>
			</li>
			<h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Why Choose us <span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="index.php?w_cu=w_cu">Right Side</a></li>
			<li><a href="index.php?slider=slider">Slider</a></li>
			</ul></h4>
			</li>
			<h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Service  <span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="index.php?service=service">Anxiety</a></li>
			<li><a href="index.php?service6=service6">Attention Deficit Hyperactivity Disorder(ADHD)</a></li>
			<li><a href="index.php?service4=service4">Addiction</a></li>
			<li><a href="index.php?service7=service7">Bipolar Disorder</a></li>
			<li><a href="index.php?service1=service1">Depression</a></li>
			<li><a href="index.php?service3=service3">Obsessive-Compulsive Disorder(OCD)</a></li>
			<li><a href="index.php?service2=service2">Relationship</a></li>
		    <li><a href="index.php?service5=service5">Sexual Dysfunction</a></li>
			<li><a href="index.php?service8=service8">Sleep</a></li>
			</ul></h4>
			</li>
            <h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Service Section Page 2  <span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="index.php?service_s=service_s">Anxiety</a></li>
			<li><a href="index.php?service_s1=service_s1">Attention Deficit Hyperactivity Disorder(ADHD)</a></li>
			<li><a href="index.php?service_s2=service_s2">Addiction</a></li>
			<li><a href="index.php?service_s3=service_s3">Bipolar Disorder</a></li>
			<li><a href="index.php?service_s4=service_s4">Depression</a></li>
			<li><a href="index.php?service_s5=service_s5">Obsessive-Compulsive Disorder(OCD)</a></li>
			<li><a href="index.php?service_s6=service_s6">Relationship</a></li>
		    <li><a href="index.php?service_s7=service_s7">Sexual Dysfunction</a></li>
			<li><a href="index.php?service_s8=service_s8">Sleep</a></li>
			</ul></h4>
			</li>
            <h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Service Section Tabs  <span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="index.php?service_t=service_t">Anxiety</a></li>
			<li><a href="index.php?service_t1=service_t1">Attention Deficit Hyperactivity Disorder(ADHD)</a></li>
			<li><a href="index.php?service_t2=service_t2">Addiction</a></li>
			<li><a href="index.php?service_t3=service_t3">Bipolar Disorder</a></li>
			<li><a href="index.php?service_t4=service_t4">Depression</a></li>
			<li><a href="index.php?service_t5=service_t5">Obsessive-Compulsive Disorder(OCD)</a></li>
			<li><a href="index.php?service_t6=service_t6">Relationship</a></li>
		    <li><a href="index.php?service_t7=service_t7">Sexual Dysfunction</a></li>
			<li><a href="index.php?service_t8=service_t8">Sleep</a></li>
			</ul></h4>
			</li>
            <h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Terms  <span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="index.php?tr_cd=tr_cd">Terms & conditions</a></li>
			<li><a href="index.php?p_policy=p_policy">Privacy Policy</a></li>
			<li><a href="index.php?cancel=cancel">Cancellation & Refund Policy </a></li>
			</ul></h4>
			</li>
			<h4><li><a href="index.php?intership=intership">Intership</a></li></h4>
			<h4><li><a href="index.php?gallery=gallery">Gallery</a></li></h4>
			<h4><li><a href="index.php?cr_form=cr_form">View & Delete Career</a></li></h4>
			<h4><li><a href="index.php?con_cr=con_cr">View & Change Containt Career</a></li></h4>
             <h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">View Testimonial and Change <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="index.php?feedback=feedback">Testimonials</a></li>
				<li><a href="index.php?apfeedback=apfeedback">Approved Feedback</a></li>
			</ul></h4>
			</li>
			<h4><li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#">FAQs <span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="index.php?faq=faq">View</a></li>
			<li><a href="index.php?faq_in=faq_in">Insert</a></li>
			</ul></h4>
			</li>
			<h4><li><a href="logout.php">Logout</a></li></h4>
				</ul>
			</div>
			</div>
		<div class="col-sm-10" id="right_side">
			
	<?php
		if(isset($_GET['ad_user'])){
		include("includes/admin.php");
	}
	if(isset($_GET['con_cr'])){
		include("includes/career_text.php");
	}
	if(isset($_GET['in_user'])){
		include("includes/signup.php");
	}
	if(isset($_GET['team'])){
		include("includes/team.php");
	}
	if(isset($_GET['insert'])){
		include("includes/insert_team.php");
	}
	if(isset($_GET['g_touch'])){
		include("includes/get_touch.php");
	}
	if(isset($_GET['insert_staff'])){
		include("includes/insert_team2.php");
	}
	if(isset($_GET['team2'])){
		include("includes/team2.php");
	}
			if(isset($_GET['appoinment'])){
		include("includes/appoinment.php");
	}
	if(isset($_GET['cancel'])){
		include("includes/cancel.php");
	}
			if(isset($_GET['gallery'])){
		include("includes/gallery.php");
	}
			if(isset($_GET['feedback'])){
		include("includes/feedback.php");
	}
		if(isset($_GET['apfeedback'])){
		include("includes/apfeedback.php");
	}
			if(isset($_GET['opening'])){
		include("includes/opening_hours.php");
	}
				if(isset($_GET['tips'])){
		include("includes/tips.php");
	}
			if(isset($_GET['ab_h'])){
		include("includes/ab_home.php");
	}
			if(isset($_GET['w_cu'])){
		include("includes/why_cu.php");
	}
				if(isset($_GET['slider'])){
		include("includes/slider2.php");
					
	}
			if(isset($_GET['service'])){
		include("includes/service.php");
	}
		
				if(isset($_GET['service1'])){
		include("includes/service1.php");
	}
		
				if(isset($_GET['service2'])){
		include("includes/service2.php");
	}
		
				if(isset($_GET['service3'])){
		include("includes/service3.php");
	}
		
				if(isset($_GET['service4'])){
		include("includes/service4.php");
	}
		
				if(isset($_GET['service5'])){
		include("includes/service5.php");
	}
		
				if(isset($_GET['service6'])){
		include("includes/service6.php");
	}
		
				if(isset($_GET['service7'])){
		include("includes/service7.php");
	}
		
				if(isset($_GET['service8'])){
		include("includes/service8.php");
	}
				if(isset($_GET['cs'])){
		include("includes/counter_section.php");
	}
			if(isset($_GET['contact'])){
		include("includes/contact.php");
	}
			if(isset($_GET['contact_info'])){
		include("includes/contact_info.php");
	}
				if(isset($_GET['blog'])){
		include("includes/blog.php");
	}
		if(isset($_GET['intership'])){
		include("includes/intership.php");
	}
				if(isset($_GET['blog1'])){
		include("includes/insert_news.php");
	}
			if(isset($_GET['tr_cd'])){
		include("includes/tr_condition.php");
	}
			if(isset($_GET['p_policy'])){
		include("includes/p_policy.php");
	}
		if(isset($_GET['cr_form'])){
		include("includes/career.php");
	}
             
		
		if(isset($_GET['faq'])){
		include("includes/faq.php");
	}
			if(isset($_GET['faq_in'])){
		include("includes/insert_faq.php");
	}
		
			if(isset($_GET['service_s'])){
		include("includes/service_s.php");
	}
		
				if(isset($_GET['service_s1'])){
		include("includes/service_s1.php");
	}
		
				if(isset($_GET['service_s2'])){
		include("includes/service_s2.php");
	}
		
				if(isset($_GET['service_s3'])){
		include("includes/service_s3.php");
	}
		
				if(isset($_GET['service_s4'])){
		include("includes/service_s4.php");
	}
		
				if(isset($_GET['service_s5'])){
		include("includes/service_s5.php");
	}
		
				if(isset($_GET['service_s6'])){
		include("includes/service_s6.php");
	}
		
				if(isset($_GET['service_s7'])){
		include("includes/service_s7.php");
	}
		
				if(isset($_GET['service_s8'])){
		include("includes/service_s8.php");
				}
				
		if(isset($_GET['service_t'])){
		include("includes/service_t.php");
	}
		
				if(isset($_GET['service_t1'])){
		include("includes/service_t1.php");
	}
		
				if(isset($_GET['service_t2'])){
		include("includes/service_t2.php");
	}
		
				if(isset($_GET['service_t3'])){
		include("includes/service_t3.php");
	}
		
				if(isset($_GET['service_t4'])){
		include("includes/service_t4.php");
	}
		
				if(isset($_GET['service_t5'])){
		include("includes/service_t5.php");
	}
		
				if(isset($_GET['service_t6'])){
		include("includes/service_t6.php");
	}
		
				if(isset($_GET['service_t7'])){
		include("includes/service_t7.php");
	}
		
				if(isset($_GET['service_t8'])){
		include("includes/service_t8.php");
				}
				
				
			?>
		
	<?php if (isset($_GET['view'])){ ?>
<table  align="center" border="3">
	
	<tr>
		<td align="center" colspan="13" bgcolor="orange"><h1>View Slider and Change</h1></td>
	</tr>
	<tr>
		<th>Slider no</th>
		<th>Slider Text1</th>
		<th>Slider Image</th>
		<th>Slider Text2</th>
		<th>Slider Image2</th>
		<th>Slider Text3</th>
		<th>Slider Image3</th>
		<th>Slider Text4</th>
		<th>Slider Image4</th>
		<th>Edit</th>
		
	</tr>
	
	
	<?php

	
	if(isset($_GET['view'])){
		
		$query = "select * from slider order by 1 DESC";
		$run =mysqli_query($con,$query);
		$i=1;
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['slider_id'];
			$slider_text1 =$row['slider_text_1'];
			$images =$row['images'];
			
			$slider_text2 =$row['slider_text_2'];
			$images2 =$row['images2'];
			
			
			$slider_text3 =$row['slider_text_3'];
			$images3 =$row['images3'];
			
			$slider_text4 =$row['slider_text_4'];
			$images4 =$row['images4'];
			
	
	
?>

	<tr align="center">
		<td><?php echo $i++; ?></td>
		<td><?php echo $slider_text1; ?></td>
		<td><img src="images/<?php echo $images; ?>" width="50" height="50"></td>
		<td><?php echo $slider_text2; ?></td>
		<td><img src="images/<?php echo $images2; ?>" width="50" height="50"></td>
		
		<td><?php echo $slider_text3; ?></td>
		<td><img src="images/<?php echo $images3; ?>" width="50" height="50"></td>
		<td><?php echo $slider_text4; ?></td>
		<td><img src="images/<?php echo $images4; ?>" width="50" height="50"></td>
		
		<td><a href="edit.php?edit=<?php echo $id; ?>">Edit</a></td>
		
	</tr>
	<?php }} } ?>
	
		</div>
		
	</div>
</div>
<?php };?>