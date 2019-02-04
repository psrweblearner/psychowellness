<!--=========== BEGAIN Counter SECTION ================-->
    <section id="counterSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
          <?php
           $query = "select * from countersection";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$cs_id =$row['cs_id'];
			$dr_cs =$row['dr_cs'];
			$dr_no =$row['dr_no'];
			$clinic_cs =$row['clinic_cs'];
			$clinic_no =$row['clinic_no'];
			$award_cs =$row['award_cs'];
			$award_no =$row['award_no'];
			$happy_p_cs =$row['happy_p_cs'];
			$happy_p_no =$row['happy_p_no'];
	?>
            <div class="counter-area">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                  <div class="counter-no counter">
                   <?php echo $dr_no;?>
                  </div>
                  <div class="counter-label"><?php echo $dr_cs;?></div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    <?php echo $clinic_no;?>
                  </div>
                  <div class="counter-label"><?php echo $clinic_cs;?></div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    <?php echo $award_no;?>
                  </div>
                  <div class="counter-label"><?php echo $award_cs;?></div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    <?php echo $happy_p_no;?>
                  </div>
                  <div class="counter-label"><?php echo $happy_p_cs;?> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php };?>
    <!--=========== End Counter SECTION ================-->