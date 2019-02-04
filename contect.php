<?php include("db/db.php");  ?>
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
                    	<li><a href="index">Home</a></li>
                    	<li>Contact Us</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div>
      <!--=========== BEGIN Google Map SECTION ================-->
    <section id="googleMap">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.008687728383!2d77.06209391558686!3d28.5995161824309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfc22073281b1%3A0x13ab65cd07d76bfb!2sPsycho+Wellness+Centre+-+Best+Psychologist+In+Delhi!5e0!3m2!1sen!2sin!4v1525693506840" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!--=========== END Google Map SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-6">
            <div class="contact-form">
              <div class="section-heading">
                <h2>Send us a message</h2>
                <div class="line"></div>
              </div>
              <p>*Please fill all the particulars.</p>
              <form class="submitphoto_form" method="post" action="#">
                <input type="text" class="wp-form-control wpcf7-text" name="contact_name" placeholder="Your name" required>
                <input type="mail" class="wp-form-control wpcf7-email" name="contact_email" placeholder="Email address" required> 
                 <input type="text" class="wp-form-control wpcf7-mobile" name="contact_mobile" placeholder="Mobile No" required>          
                <input type="text" class="wp-form-control wpcf7-text" name="contact_sub" placeholder="Subject">
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" name="contact_massage" placeholder="What would you like to tell us" required></textarea>
                   <input style="background-color: #1cbc89;
border-radius: 0px;
color: white;
font-size: 16px;" type="submit" name="submit" value="Submit" class="form-control">               
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="contact-address">
              <div class="section-heading">
                <h2>CONTACT INFORMATION</h2>
                  <?php



$query="select *from contact_info"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$info_id =$row['info_id'];
	
		$info_name=$row['info_name'];
		$info_contact=$row['info_contact'];
$contact_info1=$row['contact_info1'];
		$info_mail=$row['info_mail'];
		
?>     
                <div class="line"></div>
              </div>
             
              <address class="contact-info">               
                <p><span class="fa fa-home"></span><?php echo $info_name;?></p>

               <p><span class="fa fa-phone"></span><a href="tel:<?php echo $info_contact;?>"><?php echo $info_contact;?></a>, <a href="tel:<?php echo $contact_info1;?>"><?php echo $contact_info1;?></a></p>
                <p><span class="fa fa-envelope"></span><a href="mailto:<?php echo $info_mail;?>"><?php echo $info_mail;?></a></p>
              </address>
              <h2 align="center">SOCIAL MEDIA</h2>
              <div class="line" style="padding: 0px;"></div>
              <div class="social-share" style="margin-top: -35px;">               
               <ul>
                 <li><a href="https://www.facebook.com/Psycho-Wellness-Center-Divinity-Clinic-375904269597529"><span class="fa fa-facebook"></span></a></li>
                 <li><a href="https://twitter.com/psychowellnessc"><span class="fa fa-twitter"></span></a></li>
                 
                 <li><a href="https://www.instagram.com/psychowellnesscenterdwarka/"><span class="fa fa-instagram"></span></a></li>
                 <li><a href="https://www.linkedin.com/in/psychowellnesscenter-and-divinity-clinic-12b057136/"><span class="fa fa-linkedin"></span></a></li>
               </ul>
             </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php };?>
<div>
<?php include("includes/footer.php");?>	
</div>
 <?php include("includes/footerjs.php");?>
   
    </body>
</html>
<?php

if(isset($_POST['submit'])){
	 $c_name= $_POST['contact_name'];
	$c_email= $_POST['contact_email'];
	$c_mobile= $_POST['contact_mobile'];
	$c_sub= $_POST['contact_sub'];
	$c_massage= $_POST['contact_massage'];
	
	
	
	
	if($c_name=="" or $c_email=="" or $c_email==""  or $c_sub=="" or $c_massage==""){
		
		exit();
	}
$c_insert = "insert into contact(contact_name,contact_email,contact_mobile,contact_sub,contact_massage) values ('$c_name','$c_email','$c_mobile',' $c_sub','$c_massage')";
	
		
		$c_run = mysqli_query($con,$c_insert);
		if($c_run){
			
			
			echo"<script language='javascript'>window.open('index.php?published=Message has been sent','_self')</script>";
		}
		
		
	

}

?>




