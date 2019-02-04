<?php include("db/db.php");?>
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
<div class="container-fluid" style="background: #f5f5f5">
 	 <section id="blogArchive">      
       <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <ol class="breadcrumb">
                    	<li><a href="index.php">Home</a></li>
                    	<li>FAQs</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div>
<br>
 <section id="extraFeatures">
      <div class="container">
      
        <div class="row">
         <div class=" col-sm-12">
            <div class="departments-area">
              
              
              <!-- Start Departments Accordion -->
              <div class="panel-group custom-panel" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                       
                    <h4 class="panel-title">
                     <?php

	
	
		
		$query = "select * from faq where id=2";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title= $row['title'];
			$text =$row['text'];
			
		
	
	
?>
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      <?php echo $title;?> <span class="fa fa-minus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                     <p><?php echo $text;?></p>
                    </div>
                     <?php };?>
                  </div>
                 
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                                <?php

	
	
		
		$query = "select * from faq where id=1";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title= $row['title'];
			$text =$row['text'];
			
		
	
	
?>
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                       <?php echo $title;?><span class="fa fa-plus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                   
                     <p>  <?php echo $text;?>
                     </p>
                    </div>
                    <?php };?>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                                         <?php

	
	
		
		$query = "select * from faq where id=5";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title= $row['title'];
			$text =$row['text'];
			
		
	
	
?>
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        <?php echo $title;?>  <span class="fa fa-plus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p> <?php echo $text;?></p>
                    </div>
                    <?php };?>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                                         <?php

	
	
		
		$query = "select * from faq where id=4";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title= $row['title'];
			$text =$row['text'];
			
		
	
	
?>
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                         <?php echo $title;?><span class="fa fa-plus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                   
                     <p>  <?php echo $text;?>
                     </p>
                    </div>
                    <?php };?>
                  </div>
                </div>
               
               
               
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                                         <?php

	
	
		
		$query = "select * from faq where id=6";
		$run =mysqli_query($con,$query);
		
		while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title= $row['title'];
			$text =$row['text'];
			
		
	
	
?>
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                       <?php echo $title;?> <span class="fa fa-plus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p> <?php echo $text;?>.</p>
                    </div>
                    <?php };?>
                  </div>
                </div>
              </div>
            </div>
         </div>
        
         </div>
         </div>         
      </div>
     
    </section>

<div>
<?php include("includes/footer.php");?>	
</div>
 <?php include("includes/footerjs.php");?>	

    </body>
</html>