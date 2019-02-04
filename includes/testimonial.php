<?php include("db/db.php");?>
     <!--=========== BEGAIN Testimonial SECTION ================-->
    <section id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="testimonial-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>TESTIMONIALS</h2>
                <div class="line"></div>
               </div>
              <div class="testimonial-area">
                <ul class="testimonial-nav">
                  <?php

$query="select *from approval order by 1 DESC LIMIT 0,3"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$name=$row['name'];
		$message=$row['message'];
		
?> 
   <li>
  <div class="single-testimonial">
                     
  <div class="testimonial-cotent">
    <p class="testimonial"><?php echo $message;?></p>
     </div>
    </div>
     </li> 
 <?php };?>
  </ul>
 </div>
 </div>
  </div>
 </div>
 </div>
    </section>
    
  
    
    <!--=========== End Testimonial SECTION ================-->
