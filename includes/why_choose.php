<div class="wychoose">
	<div class="container">
	<h2 align="center" style="margin-top: 20px;">Why Choose Us</h2>
                <div class="line"></div>
	<div class="row">
		<div class="col-lg-4">
		  <p align="center"><a href="#" class="media-icon">
                        <span class="fa fa-hospital-o"></span>
                      </a></p>
                   
                    <div class="media-body">
                     	<?php
$query = "select * from why_cu order by 1 DESC";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$w_id =$row['w_id'];
			$text1 =$row['text1'];
			$text2 =$row['text2'];
			$text3 =$row['text3'];
	?>

                      <h4 class="media-heading">Comfortable Relaxed Clinic</h4>
                      <p><?php echo $text1;?></p>  
                    </div>
         </div>
		<div class="col-lg-4">
		 <p align="center"><a href="#" class="media-icon">
                        <span class="fa fa-user-md"></span>
                      </a></p>
                   
                    <div class="media-body">
                      <h4 class="media-heading">Qualified Therapist & Doctors</h4>
                      <p><?php echo $text2;?></p>  
                    </div>
                  </div>
		
		<div class="col-lg-4">
		<p align="center"> <a href="#" class="media-icon">
                        <span class="fa fa-ambulance"></span>
                      </a></p>
                   
                    <div class="media-body">
                      <h4 class="media-heading">Customized & Compassionate Support</h4>
                      <p><?php echo $text3;?></p>  
                    </div>
          </div>
          <?php };?>
	</div>
</div>
</div>
