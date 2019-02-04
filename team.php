<!doctype html>
<html>
<head>
<?php include("includes/head.php");?>

</head>

<body>
<div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
     
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
                    	<li>Team</li>
                    </ol>
              </div>
             
            </div>
          </div>
            
      </div>      
    </section>
</div>



<div>
<?php include("includes/doctor_section.php");?>	
</div>
<div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div>
             <!-- Start Service Title -->
             <div class="col-md-12">
             <h2 align="center">OUR SUPPORT TEAM</h2>
               <div class="line"></div>
             </div>
     
                
              </div>
              <div class="doctors-area">
                <ul class="doctors-nav">
                              <?php

$query="select *from team2"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$name=$row['name'];
		$contain=$row['contain'];
		
		
		
?> 
                  <li>
                    <div class="single-doctor">
                      <a class="tdoctor" href="support_team_page.php?id=<?php echo $id;?>" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img  src="admin/images/<?php echo $image;?>" />
                          
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
     

<div>
<?php include("includes/footer.php");?>	
</div>
<?php include("includes/footerjs.php");?>

    </body>
</html>