<?php include("db/db.php");?>
    <!--=========== Start Footer SECTION ================-->
    <footer id="footer">
      <!-- Start Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Navigation</h2>
                <div class="line"></div>
              </div>           
              <ul class="nav navbar-nav">
               <h4><li><a href="about">About Us </a></li></h4>
                <h4><li><a href="corporate">Corporate </a></li></h4>
                 <h4><li><a href="career">Career</a></li></h4>
                  <h4><li><a href="education">Education </a></li></h4>
              <!-- <h4><li><a href="programme">Programmes</a></li></h4>-->
               <h4><li><a href="intership">Intership</a></li></h4>
             </ul>
              </div>
             </div>
            <div class="col-sm-2">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Resources</h2>
                <div class="line"></div>
              </div>
            <ul class="nav navbar-nav">
               <h4><li><a href="service">Services </a></li></h4>
                 <h4><li><a href="blog">Blog </a></li></h4>
                   <h4><li><a href="faq">FAQs </a></li></h4>
                     <h4><li><a href="feedback_page">Feedback </a></li></h4>
                       <h4> <li><a href="gallery">Gallery</a></li></h4>
                       </ul>
       </div>
            </div>
            <div class="col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Terms</h2>
                <div class="line"></div>
              </div>
                <ul class="nav navbar-nav">
               <h4><li><a href="terms_condition">Terms & Conditions </a></li></h4>
               <h4><li><a href="privacy_policy">Privacy  Policy </a></li></h4>
                <h4><li><a href="cancel">Cancellation & Refund Policy </a></li></h4>
               </ul>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Contact Info</h2>
                <div class="line"></div>
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
              </div>
              <address class="contact-info">               
                <p><span class="fa fa-home"></span> <?php echo $info_name;?></p>
            <p><span class="fa fa-phone"></span><a href="tel:<?php echo $info_contact;?>"><?php echo $info_contact;?></a>, <a href="tel:<?php echo $contact_info1;?>"><?php echo $contact_info1;?></a></p>
                 <p><span class="fa fa-envelope"></span><a href="mailto:<?php echo $info_mail;?>"><?php echo $info_mail;?></a></p>
              </address>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php };?>
      <!-- Start Footer Middle -->
      <div class="footer-middle">
        <div class="container">
          <div class="row">
         
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">              
                
                 <a href="https://www.facebook.com/Psycho-Wellness-Center-Divinity-Clinic-375904269597529"><span class="fa fa-facebook"></span></a>
                 <a href="https://twitter.com/psychowellnessc"><span class="fa fa-twitter"></span></a>
                 
                 <a href="https://www.instagram.com/psychowellnesscenterdwarka/"><span class="fa fa-instagram"></span></a>
                 <a href="https://www.linkedin.com/in/psychowellnesscenter-and-divinity-clinic-12b057136/"><span class="fa fa-linkedin"></span></a>
                   
            </div>
          </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-copyright">
              <p> Copyright 2018 &copy; <a href="index">PSYCHOWELLNESS CENTER & DIVINITY CLINIC</a></p>
            </div>
          </div>
        </div>
        </div>
      </div>
    
      <!-- Start Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=========== End Footer SECTION ================-->
 
