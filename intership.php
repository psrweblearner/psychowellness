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
<?php include("includes/header.php");?></div>
 <div class="container-fluid" style="background: #f5f5f5">
 	 <section id="blogArchive">      
       <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
               <ol class="breadcrumb">
                    	<li><a href="index.php">Home</a></li>
                    	<li>Internship</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
         
	         <?php
			$query="select * from intership where id=1";
			$run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run)){
				$id=$row['id'];
				$text_field=$row['text_field'];
				echo $text_field;
			}
			?>
		</div>
	</div>		
</div>
<div class="container">
	<div class="row">
		 <div class="col-md-12">
		 	 <!--Tab Menu Start Here-->
 <button class="tablinked" onclick="openPages('Days_15', this, '#f006')" id="defaultOpen">15 Days
 </button>
<button class="tablinked" onclick="openPages('Months_1', this, '#0b880b80')" >1 Months</button>
<button class="tablinked" onclick="openPages('Months_3', this, '#3939a699')">3 Months</button>
<button class="tablinked" onclick="openPages('Months_6', this, '#e59a68')">6 Months</button>
<div id="Days_15" class="tabcontented">
 <div class="container">
<div class="row">
 <div class="col-sm-7">
	  <?php
			$query="select * from intership where id=2";
			$run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run)){
				$id=$row['id'];
				$text_field=$row['text_field'];
				echo $text_field;
			}
			?>
			<a href="career.php"><button class="btn btn-success">Click here for Registration.....</button></a>
</div>
<div class="col-sm-4">
	<img src="images/intership7.jpeg" class="img-responsive">
</div>
</div>
</div>
</div>
<div id="Months_1" class="tabcontented">
 <div class="container">
<div class="row">
  <div class="col-sm-7">
  	  <?php
			$query="select * from intership where id=3";
			$run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run)){
				$id=$row['id'];
				$text_field=$row['text_field'];
				echo $text_field;
			}
			?>
			<a href="career.php"><button class="btn btn-success">Click here for Registration.....</button></a>
  </div>
  <div class="col-sm-4">
	<img src="images/intership1.jpg" class="img-responsive">
</div>
</div>
</div>
</div>
<div id="Months_3" class="tabcontented">
 <div class="container">
   <div class="row">
<div class="col-sm-7">
  	  <?php
			$query="select * from intership where id=4";
			$run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run)){
				$id=$row['id'];
				$text_field=$row['text_field'];
				echo $text_field;
			}
			?>
			<a href="career.php"><button class="btn btn-success">Click here for Registration.....</button></a>
  </div>
  <div class="col-sm-4">
	<img src="images/intership3.png" class="img-responsive">
</div>
   </div>
</div>
</div>
<div id="Months_6" class="tabcontented">
  <div class="container">
   <div class="row">
 
   <div class="col-sm-7">
  	  <?php
			$query="select * from intership where id=5";
			$run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run)){
				$id=$row['id'];
				$text_field=$row['text_field'];
				echo $text_field;
			}
			?>
			<a href="career.php"><button class="btn btn-success">Click here for Registration.....</button></a>
  </div>
    <div class="col-sm-4">
	<img src="images/intership4.jpg" class="img-responsive">
</div>
   </div>
</div>
</div>

 </div>
	</div>
</div>
<!--Tab Menu finished here--->

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			 <?php
			$query="select * from intership where id=7";
			$run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run)){
				$id=$row['id'];
				$text_field=$row['text_field'];
				echo $text_field;
			}
			?>
		</div>
	</div>
</div>
<div>
<?php include("includes/footer.php");?>	
</div>

<?php include("includes/footerjs.php");?>	


    </body>
</html>