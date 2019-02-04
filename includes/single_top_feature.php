 <?php include("db/db.php");?>
   <!--=========== BEGIN Top Feature SECTION ================-->
    <section id="topFeature">
      <div class="row">
        <!-- Start Single Top Feature -->
        <div class="col-lg-4">
          <div class="row">
            <div class="single-top-feature">
           
               <?php    
	$query = "select * from today_tips";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$tips_id =$row['tips_id'];
			$tips_title =$row['tips_title'];
			$tips_text =substr($row['tips_text'], 0,100);
			
			$tips_image =$row['tips_image'];
			
			
		};
			?><span class="fa fa-heartbeat"></span>
              <h3>TODAY'S HEALTH TIPS</h3>
              <h4 style="text-transform: uppercase; color: white; font-weight: bolder;"><?php echo $tips_title;?></h4>
              <p><?php echo $tips_text;?></p>
              <div class="readmore_area" style="margin-top:47px;">
                <a href="tips_page.php?id=<?php echo $tips_id;?>" data-hover="Read More"><span>Read More</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
         
        <!-- Start Single Top Feature -->
        <div class="col-lg-4">
     <?php    
	$query = "select * from opening_hours";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$op_id =$row['op_id'];
			$op_text =$row['op_text'];
			$op_m_f =$row['op_m_f'];
			
			$op_s =$row['op_s'];
			$op_sun =$row['op_sun'];
			
			
			$op_c =$row['op_c'];
			
		};
			?>
			
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3><b>OPENING HOURS</b></h3>
              <p><?php echo $op_text?></p>
              <ul class="opening-table">
                <li>
                  <span>Monday - Friday</span>
                  <div class="value"><?php echo $op_m_f?></div>
                </li>
                <li>
                  <span>Saturday</span>
                  <div class="value"><?php echo $op_s?></div>
                </li>
                <li>
                  <span>Sunday</span>
                  <div class="value"><?php echo $op_sun?></div>
                </li>
                 <li>
                  <span>Closing Day (If any)</span>
                  <div class="value"><?php echo $op_c?></div>
                </li>
              </ul>              
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->

   <div>
   	<?php include("appoinment.php");?>
   </div>
   </div>
    </section>
    <!--=========== END Top Feature SECTION ================-->
