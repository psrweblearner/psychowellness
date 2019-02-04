<?php include("db/db.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include("includes/head.php");?>

</head>

<body>
<div>
<?php include("includes/header.php");?>	
</div>
<div class="container-fluid">
	 <section id="blogArchive">      
      <div class="row">
       
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                 <ol class="breadcrumb">
                    	<li><a href="index.php">Home</a></li>
                    	<li><a href="team.php">Team</a></li>
                    	<li>Doctor Team</li>
                    </ol>
              </div>
             
            </div>
          </div>
            
      </div>      
    </section>
</div>
<div class="container" style="margin-bottom: 10px; margin-top: 15px;">
<?php
	$page_id = $_GET['id'];
		$query = "select * from team where id='$page_id'";
		$run = mysqli_query($con, $query);
		while ($row= mysqli_fetch_array($run)){
		$id=$row['id'];
		$image=$row['image'];
		$name=$row['name'];
		$fee=$row['fee'];
		$contain=$row['contain'];	
?>
	<div class="row">
	<div class="col-sm-5">
			<p align="center"><img src="admin/images/<?php echo $image;?>" class="img-responsive img-thumbnail"></p>
<H2 align="center"><?php echo $name;?></H2>
<div class="readmore_area" style="margin-top: 0px;float: none; text-align: center;">
       <a data-toggle="modal" data-id="<?php echo $id; ?>" data-target="#myModal" href="" data-hover="Book An Appointment"><span>Book An Appointment</span></a>   
              </div>
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Appointment Details</h4>
                    </div>
                    <div class="modal-body">
                    
                     <div class="appointment-area">
                        <form class="appointment-form" method="post" action="#">
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your name 
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" name="ap_name" id="ap_name" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Email </label>
                              <input type="mail" class="wp-form-control wpcf7-email" name="ap_email" id="ap_mail" placeholder="Email address" required>  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                             <label class="control-label">Your Phone 
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" name="ap_mobile" id="ap_phone" placeholder="Phone No" required> 
                            </div>
                 
                            <div class="col-md-6 col-sm-6">
                   
                            <label class="control-label">Doctor Name 
                              </label>
                          
                               <label class="control-label"><select name="ap_dr" id="ap_dr" style="padding: 11px 12px; font-size: 13px;" >
                              	
                                                        <?php

	$id = $_GET['id'];
		
		$query = "select * from team where id='$id'";
		
		$run = mysqli_query($con, $query);
		
		while ($row= mysqli_fetch_array($run)){
		
		$id=$row['id'];
		$name=$row['name'];
		$fee=$row['fee'];
		
		
	
?>
                              	<option value="<?php echo $name;?>"><?php echo $name  .' ' ."(".$fee.")";?>  <?php };?></option>
                               
                              </select>
                             
                              </label>   
                             
                            </div>
                         
                          </div>
                           
                          <div class="row">
                           <div class="col-sm-6">
                           	<label class="control-label">Appointment Date 
                              </label>
                               <input type="date" class="wp-form-control wpcf7-text" name="ap_date" id="ap_date" placeholder="dd/mm/yy" required>
                               
                           </div>
                          	  <div class="col-sm-6">
                           	<label class="control-label">Appointment Time 
                              </label>
                               <label class="control-label"><select name="ap_time" id="ap_time">
                              	<option value="Time"> Select</option>
                              	<option value="10 AM">10:00 AM</option>
                              	<option value="11 AM">11:00 AM</option>
                              	<option value="12 AM">12:00 PM</option>
                              	<option value="13 AM">13:00 PM</option>
                                <option value="14 AM">14:00 PM</option>
                              	<option value="15 AM">15:00 PM</option>
                              	<option value="16 AM">16:00 PM</option>
                              	<option value="17 AM">17:00 PM</option>
                              	<option value="18 AM">18:00 PM</option>
                              </select>
                              </label>
                           </div>
                          </div>
                           
                          
                               
                              <div class="row">
                               <div class="col-md-12 col-sm-12" style="text-align: center;">
                               <input class="button1" type="submit" name="submit" value="Book Appointment">
                           
                            </div>
                              	
                              	
                              	
                              	
                              </div> 
                        
                       </form>
                        
                      </div>
                    </div>                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
                    <?php

if(isset($_POST['submit'])){
	 $ap_name= $_POST['ap_name'];
	$ap_email= $_POST['ap_email'];
	
	$ap_mobile= $_POST['ap_mobile'];
$ap_dr= $_POST['ap_dr'];
	$ap_date= $_POST['ap_date'];
	$ap_time= $_POST['ap_time'];

	
	
	
	if($ap_name=="" or $ap_email=="" or  $ap_mobile=="" or $ap_date=="" or $ap_time==""){
		echo "<script language='javascript'>alert('Any feild is empty')</script>";
		exit();
	}
$insert_ap = "insert into appoinment(ap_name,ap_email,ap_mobile,ap_dr,ap_date,ap_time) values ('$ap_name','$ap_email','$ap_mobile','$ap_dr','$ap_date','$ap_time')";
	
		
		$run_ap = mysqli_query($con,$insert_ap);
		if($run_ap){
			
			
			echo"<script language='javascript'>alert('Submited')</script>";
		}
		
		
	

}
				  

?>

              </div><!-- /.modal -->

	
		</div>
		<div class="col-sm-7">
			
			<p><?php echo $contain;?></p>
			
		</div>
	</div>
</div>
<?php };?>



<div>
<?php include("includes/footer.php");?>	
</div>
<?php include("includes/footerjs.php");?>

    </body>
</html>