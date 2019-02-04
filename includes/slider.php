<?php  include("db/db.php"); ?>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
   <?php



$query="select * from slider"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$slider_id =$row['slider_id'];
		$slider_text_1= $row['slider_text_1'];
		$image= $row['images'];
		
		$slider_text_2= $row['slider_text_2'];
		$image2= $row['images2'];
		
		$slider_text_3= $row['slider_text_3'];
		$image3= $row['images3'];
		
		$slider_text_4= $row['slider_text_4'];
		$image4= $row['images4'];
		
?>     
    <div class="item active">
      <img src="admin/images/<?php echo $image; ?>" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="admin/images/<?php echo $image2; ?>" alt="Chicago">
    </div>

    <div class="item">
      <img src="admin/images/<?php echo $image3; ?>" alt="New York">
    </div>
    <div class="item">
      <img src="admin/images/<?php echo $image4; ?>" alt="New York">
    </div>
    <?php };?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>