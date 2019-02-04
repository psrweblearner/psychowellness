<?php include("db/db.php");?>
<!doctype html>
<html>
<head>
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
                    	<li><a href="service.php">Service</a></li>
                    	<li>Attention Deficit Hyperactivity Disorder (ADHD)</li>
                    </ol>
              </div>
             
            </div>
        </div>        
      </div>      
    </section>
	</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
		
			<?php
			$edit_id = @$_GET['id'];
$query = "select * from services where id='$edit_id'";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
			$image= $row['image'];
			$logo= $row['logo'];
			$title= $row['title'];
		    $text= $row['text'];
	
?>
	<h2 align="center"><?php echo $title; ?></h2>
   <p align="center"> <img src="admin/images/<?php echo $image;?>" class="img-responsive img-thumbnail" style="height: 299px;" /></p>
	
	<p><?php echo $text; ?></p>
		</div>
	</div>
</div>
<?php };?>
<!--Tab Menu Start Here-->
 <button class="tablink" onclick="openPage('Home', this, '#f006')" id="defaultOpen">
 <?php 
 $query = "select * from service2 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title= $row['title'];
	echo $title;
}
?></button>
<button class="tablink" onclick="openPage('News', this, '#0b880b80')" ><?php 
 $query = "select * from service2 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title1= $row['title1'];
	echo $title1;
}
?></button>
<button class="tablink" onclick="openPage('Contact', this, '#3939a699')"><?php 
 $query = "select * from service2 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title2= $row['title2'];
	echo $title2;
}
?></button>


<div id="Home" class="tabcontent">
 
  <div class="container">
  
<div class="row">
  <?php 
 $query = "select * from service2 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title= $row['title'];
		    $image= $row['image'];
		
		   $text= $row['text'];
	
?>
<div class="col-md-4">
<img style="margin-top: 28px;" src="admin/images/<?php echo $image;?>" class="img-responsive img-thumbnail"  width="100%"/>
</div>
<div class="col-md-8">
  <h3 align="center"><b><?php echo $title;?></b></h3>
  <p><?php echo $text;?></p>
</div>
<?php };?>
</div>
</div>
</div>

<div id="News" class="tabcontent">
 <div class="container">
   <div class="row">
   <?php 
 $query = "select * from service2 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title1= $row['title1'];
		    $image1= $row['image1'];
		
		   $text1= $row['text1'];
	
?>
    <div class="col-md-4">
    <img style="margin-top: 28px;" src="admin/images/<?php echo $image1;?>" class="img-responsive img-thumbnail" width="100%" />
    </div>
    <div class="col-md-8">
     <h3 align="center"><b><?php echo $title1;?></b></h3>
  <p><?php echo $text1;?></p>
    </div>
    <?php };?>
   </div>
</div>
</div>

<div id="Contact" class="tabcontent">
  <div class="container">
   <div class="row">
   <?php 
 $query = "select * from service2 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
			$title2= $row['title2'];
		    $image2= $row['image2'];
		
		   $text2= $row['text2'];
	
?>
    <div class="col-md-4">
    <img style="margin-top: 28px;" src="admin/images/<?php echo $image2;?>" class="img-responsive img-thumbnail" width="100%" />
    </div>
    <div class="col-md-8">
    <h3><b><?php echo $title2;?></b></h3>
  <p><?php echo $text2;?></p>
    </div>
    <?php };?>
   </div>
</div>
</div>

 <!--Tab Menu finished here-->
 
 
 
 <div class="container">
   <div class="row">
           <?php 
 $query = "select * from service1 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
			$title1= $row['title1'];
		    $image1= $row['image1'];
		
		   $text1= $row['text1'];
	
?>
       <div class="col-md-8">
  
       <h2 style="margin-top: 42px;color: #c959d1;font-size: 20px;"><?php echo $title1;?></h2>
       <p style="margin-left: 26px;"><?php echo $text1;?></p>
       
       </div>
       <div class="col-md-4">
       <img style="margin-top: 28px;" src="admin/images/<?php echo $image1;?>" class="img-responsive img-thumbnail" />
       <img style="margin-left: -125px;" src="" />
       </div>
   </div>
</div>
<?php };?>
<div class="container">
    <div class="row">
             <?php 
 $query = "select * from service1 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
			$title2= $row['title2'];
		    $image2= $row['image2'];
		
		   $text2= $row['text2'];
	
?>
        <div class="col-md-4">
      
          <img style="margin-top: 28px;" src="admin/images/<?php echo $image2;?>" class="img-responsive img-thumbnail" />
        </div>
        <div class="col-md-8">
        <h2 style="margin-top: 42px;color: #c959d1;font-size: 20px;"><?php echo $title2;?></h2>
        <p><?php echo $text2;?></p>
       
        </div>
    </div>
</div>
<?php };?>


<div class="container">
	<div class="row">
	 	        <?php 
 $query = "select * from service1 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
			$title3= $row['title3'];
		    $image3= $row['image3'];
		
		   $text3= $row['text3'];
	
?>
		 <div class="col-md-8">
	
		  <h2 style="margin-top: 42px;color: #c959d1;font-size: 20px;"><?php echo $title3;?></h2>
        <p><?php echo $text3;?></p>
		 	
		 </div>
		 <div class="col-md-4">
		<img style="margin-top: 28px;" src="admin/images/<?php echo $image3;?>" class="img-responsive img-thumbnail" />
		 </div>
	</div>
</div>
<?php };?>
 
 <div class="container-fluid bg-primary" style="margin-top: 42px;">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-sm-8" style="text-align:center;">
	 	        <?php 
 $query = "select * from service1 where id=7";
$run = mysqli_query($con,$query);
while($row= mysqli_fetch_array($run)){
			
			$edit_id1 =$row['id'];
			$quots=$row['quots'];
	
?>
<p><?php echo $quots;?></p>


<?php };?>
</div>
<div class="col-md-2">
</div>
</div>
</div>
</div>
<div>
<?php include("includes/footer.php");?>	
</div>

 <script>
function openCity(evt, cityName) {
    var i, tabcontented, tablinks;
    tabcontented = document.getElementsByClassName("tabcontented");
    for (i = 0; i < tabcontented.length; i++) {
        tabcontented[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

   <?php include("includes/footerjs.php");?>	

    </body>
</html>