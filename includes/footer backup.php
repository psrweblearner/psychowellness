<?php include("db/db.php");?>
    <!--=========== Start Footer SECTION ================-->
    <footer id="footer">
      <!-- Start Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Navigation</h2>
                	<?php

	
	
		
		$query = "select * from h_about order by 1 DESC";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$ab_id =$row['ab_id'];
			$ab_text =$row['ab_text'];
		
	
	
?>

                <div class="line"></div>
              </div>           
              <p><?php echo $ab_text;?></p>
              </div>
                <?php };?>
            </div>
          
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Our Service</h2>
                   <?php



$query="select *from service"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$title=$row['title'];
		
		
		$title2=$row['title2'];
		
		
		$title3=$row['title3'];
	
		
		$title4=$row['title4'];
		
		
		$title5=$row['title5'];
		
		$title6=$row['title6'];
		
		
		$title7=$row['title7'];
		
		
		$title8=$row['title8'];
		
		
		$title9=$row['title9'];
		
		
		
		
?> 
                <div class="line"></div>
              </div>
              <ul class="footer-service">
                <li><a href="service_page.php?id=<?php echo $id;?>"><span class="fa fa-check"></span><?php echo $title;?></a></li>
                <li><a href="service_page4.php?id=<?php echo $id;?>"><span class="fa fa-check"></span><?php echo $title2;?></a></li>
                <li><a href="service_page6.php?id=<?php echo $id;?>"><span class="fa fa-check"></span><?php echo $title3;?></a></li>
                <li><a href="service_page5.php?id=<?php echo $id;?>"><span class="fa fa-check"></span><?php echo $title4;?></a></li>
                <li><a href="service_page2.php?id=<?php echo $id;?>"><span class="fa fa-check"></span><?php echo $title5;?></a></li>
                <li><a href="service_page7.php?id=<?php echo $id;?>"><span class="fa fa-check"></span><?php echo $title6;?></a></li>
                <li><a href="service_page1.php?id=<?php echo $id;?>"><span class="fa fa-check"></span><?php echo $title7;?></a></li>
                <li><a href="service_page3.php?id=<?php echo $id;?>"><span class="fa fa-check"></span><?php echo $title8;?></a></li>
                <li><a href="service_page8.php?id=<?php echo $id;?>"><span class="fa fa-check"></span><?php echo $title9;?></a></li>
              </ul>
              <?php };?>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Tags</h2>
                <div class="line"></div>
              </div>
                <ul class="tag-nav">
                  <li><a href="#">Dental</a></li>
                  <li><a href="#">Surgery</a></li>
                  <li><a href="#">Pediatric</a></li>
                  <li><a href="#">Cardiac</a></li>
                  <li><a href="#">Ophthalmology</a></li>
                  <li><a href="#">Diabetes</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Contact Info</h2>
                <div class="line"></div>
                 <?php



$query="select *from contact_info"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$info_id =$row['info_id'];
		$info_text=$row['info_text'];
		$info_name=$row['info_name'];
		$info_contact=$row['info_contact'];
		$info_mail=$row['info_mail'];
		
?>     
              </div>
             <p><?php echo $info_text;?></p>
              <address class="contact-info">               
                <p><span class="fa fa-home" style="color: lightseagreen;"></span><?php echo $info_name;?></p>
                <p><span class="fa fa-phone" style="color: lightseagreen;"></span><?php echo $info_contact;?></p>
                <p><span class="fa fa-envelope" style="color: lightseagreen;"></span><?php echo $info_mail;?></p>
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
            <div class="footer-copyright">
              <p> Copyright 2018 &copy; <a href="index.php">PSYCHOWELLNESS CENTER & DIVINITY CLINIC</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">              
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-google-plus"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>     
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- Start Footer Bottom -->
      
    </footer>
    
    
    
    <!--Footer Backup -->
    <!--=========== End Footer SECTION ================-->
