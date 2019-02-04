 <?php include("db/db.php");?>
   <!--=========== BEGAIN Doctors SECTION ================-->
    
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div>
             <!-- Start Service Title -->
             <div class="col-md-12">
              <h2 align="center" style="margin-top: 41px;">OUR DOCTORS</h2>
                <div class="line"></div>
             </div>
             
              </div>
              <div class="doctors-area">
                <ul class="doctors-nav">
                 <?php

$query="select *from team order by 1 ASC"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$name=$row['name'];
		$fee=$row['fee'];
		$contain=$row['contain'];
		
?> 
    <li>
        <div class="single-doctor">
                      <a class="tdoctor" href="team_page.php?id=<?php echo $id;?>" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="admin/images/<?php echo $image;?>" />
                          
                          <figcaption>
                            <h2><?php echo $name;?></h2>
                           
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      
                    </div>
                  </li>
                  <?php };?>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
     
    
    <!--=========== End Doctors SECTION ================-->