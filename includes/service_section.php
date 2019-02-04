 <?php include("db/db.php");?>
 <div class="container" style="margin-top: 20px;">
 	<div class="row">
 <div class="col-sm-12">
 	<div class="row">
 	<div class="col-sm-4">
 			  	      <?php

$query="select *from services where id=5"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$logo=$row['logo'];
		$title=$row['title'];
		$text=$row['text'];
		
?>
 		<div class="single-service">
                      <div class="service-icon">
                     <span> <a href="addiction.php?id=<?php echo $id;?>"><img src="admin/images/<?php echo $logo;?>"></a></span>  
                      </div>                      
                      <h4><a href="addiction.php?id=<?php echo $id;?>"><b><?php echo $title;?></b></a></h4>
                       <a href="addiction.php?id=<?php echo $id;?>"><span style="font-size: 13px;">Read More</span></a>
                      
                    </div>
                    <?php };?>
 	</div>
 	<div class="col-sm-4">
		    <?php

$query="select *from services where id=1"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$logo=$row['logo'];
		$title=$row['title'];
		$text=$row['text'];
	?> 
 		 <div class="single-service">
                      <div class="service-icon">
                        <span><a href="anxiety.php?id=<?php echo $id;?>"><img src="admin/images/<?php echo $logo;?>"></a></span>  
                      </div>                      
                      <h4><a href="anxiety.php?id=<?php echo $id;?>"><b><?php echo $title;?></b></a></h4>
                       <a href="anxiety.php?id=<?php echo $id;?>"><span style="font-size: 13px;">Read More</span></a>
                      
                    </div>
                     <?php };?>
 	</div>
 	<div class="col-sm-4">
 	             <?php

$query="select *from services where id=7"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$logo=$row['logo'];
		$title=$row['title'];
		$text=$row['text'];
		
?> 
 	<div class="single-service">
                      <div class="service-icon">
                        <span><a href="adhd.php?id=<?php echo $id;?>"><img src="admin/images/<?php echo $logo;?>"></a></span>  
                      </div>                      
                      <h4><a href="adhd.php?id=<?php echo $id;?>"><b><?php echo $title;?></b></a></h4>
                       <a href="adhd.php?id=<?php echo $id;?>"><span style="font-size: 13px;">Read More</span></a>
                      
                    </div>
                    <?php };?>	
 	</div>
 	</div>
 </div>
 <div class="col-sm-12">
 	<div class="row">
 	<div class="col-sm-4">
		       <?php
$query="select *from services where id=8"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$logo=$row['logo'];
		$title=$row['title'];
		$text=$row['text'];
			
?> 
 		  <div class="single-service">
                          
                      <div class="service-icon">
                  
                        <span>  <a href="bipolor_disorder.php?id=<?php echo $id;?>"><img src="admin/images/<?php echo $logo;?>"></a></span>  
                      </div>                      
                      <h4><a href="bipolor_disorder.php?id=<?php echo $id;?>"><b><?php echo $title;?></b></a></h4>
                       <a href="bipolor_disorder.php?id=<?php echo $id;?>"><span style="font-size: 13px;">Read More</span></a>
                     
                    </div>
                    <?php };?>
 	</div>
 	<div class="col-sm-4">
		                 <?php
$query="select *from services where id=2"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$logo=$row['logo'];
		$title=$row['title'];
		$text=$row['text'];
		
?>  
 		  <div class="single-service">
                      <div class="service-icon">
            
                        <span> <a href="depression.php?id=<?php echo $id;?>"><img src="admin/images/<?php echo $logo;?>"></a></span>  
                      </div>                      
                      <h4><a href="depression.php?id=<?php echo $id;?>"><b><?php echo $title;?></b></a></h4>
                       <a href="depression.php?id=<?php echo $id;?>"><span style="font-size: 13px;">Read More</span></a>
                     
                    </div>
                      <?php };?>
 	</div>
 	<div class="col-sm-4">
		                  <?php

$query="select *from services where id=4"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$logo=$row['logo'];
		$title=$row['title'];
		$text=$row['text'];
			
?>
 		 <div class="single-service">
                      <div class="service-icon">
                        <span>  <a href="ocd.php?id=<?php echo $id;?>"><img src="admin/images/<?php echo $logo;?>"></a></span>  
                      </div>                      
                      <h4><a href="ocd.php?id=<?php echo $id;?>"><b><?php echo $title;?></b></a></h4>
                       <a href="ocd.php?id=<?php echo $id;?>"><span style="font-size: 13px;">Read More</span></a>
                    
                    </div>
                      <?php };?>
 	</div>
 	</div>
 </div>
 <div class="col-sm-12">
 	<div class="row">
 	<div class="col-sm-4">
 	             <?php
$query="select *from services where id=3"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$logo=$row['logo'];
		$title=$row['title'];
		$text=$row['text'];
		
?>
 	 <div class="single-service">
                      <div class="service-icon">
                        <span><a href="relationship_issues.php?id=<?php echo $id;?>"><img src="admin/images/<?php echo $logo;?>"></a></span>  
                      </div>                      
                      <h4><a href="relationship_issues.php?id=<?php echo $id;?>"><b><?php echo $title;?></b></a></h4>
                       <a href="relationship_issues.php?id=<?php echo $id;?>"><span style="font-size: 13px;">Read More</span></a>
                    
                    </div>
                      <?php };?>	
 	</div>
 	<div class="col-sm-4">
		           <?php

$query="select *from services where id=6"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$logo=$row['logo'];
		$title=$row['title'];
		$text=$row['text'];
		
?>
 		 <div class="single-service">
                      <div class="service-icon">
                        <span><a href="sexual_dysfunction.php?id=<?php echo $id;?>"><img src="admin/images/<?php echo $logo;?>"></a></span>  
                      </div>                      
                      <h4><a href="sexual_dysfunction.php?id=<?php echo $id;?>"><b><?php echo $title;?></b></a></h4>
                       <a href="sexual_dysfunction.php?id=<?php echo $id;?>"><span style="font-size: 13px;">Read More</span></a>
                      
                    </div>
                      <?php };?>
 	</div>
 	<div class="col-sm-4">
		        <?php
$query="select *from services where id=9"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$logo=$row['logo'];
		$title=$row['title'];
		$text=$row['text'];
		
?>
 		 <div class="single-service">
                      <div class="service-icon">
                        <span><a href="sleep.php?id=<?php echo $id;?>"><img src="admin/images/<?php echo $logo;?>"></a></span>  
                      </div>                      
                      <h4><a href="sleep.php?id=<?php echo $id;?>"><b><?php echo $title;?></b></a></h4>
                      <a href="sleep.php?id=<?php echo $id;?>"><span style="font-size: 13px;">Read More</span></a>
                    </div>
                <?php };?>
 	</div>
 	</div>
 </div>
 	</div>
 </div>