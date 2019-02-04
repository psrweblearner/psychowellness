<?php include('db/db.php');?>



<!doctype html>
<html>
<head>
 <?php include("includes/head.php");?>
 
</head>
<style type="text/css">

.carrer{
	background-color:#3CF;

	color:#FFF;
}

.form1{
	
   height: 452px;
	background-color: #E5F3F3;
	margin-top: 120px;
}
.form1 input{
border: 2px solid #0081ff;
}
.form1 textarea{
border: 2px solid #0081ff;
}
</style>
<body>
<div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
     
<div>
<?php include("includes/header.php");?>	
</div>
<!--corporate section section start here-->
 <div class="container-fluid" style="background: #f5f5f5">
 	 <section id="blogArchive">      
       <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                 <ol class="breadcrumb">
                    	<li><a href="index.php">Home</a></li>
                    	<li>Join Us</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div>


    <div class="container">
    
    <div class="row">
    <div class="col-sm-12" style="margin-top: 40px;">
     <?php

	
	
		
		$query = "select * from career_text ";
		$run =mysqli_query($con,$query);
		
		while ($row= mysqli_fetch_array($run)){
			
			$id =$row['id'];
		
			$text =$row['text'];
			
		
	
	
?>
    <p style="font-size:20px; font-style:italic; margin-left: 23px; padding: 10px;">

		<?php echo $text;?></p><?php };?>	
    </div>
  
</div>

</div>

<div class="container-fluid">
    <div class="row">
    <div class="form1">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
          
           <h2 style="margin-top:16px;color: #23677a;">Submit Your Application</h2>
              
              <table>
              <form  method="post" action="#" enctype="multipart/form-data">
           <input type="text" name="name"  placeholder="Full name" class="form-control" required>
                   
              <br>
             
             <input type="email" name="email"  placeholder="Email" class="form-control" required><br>
              </div>
            <input  type="text" name="mobile"  placeholder="10 digit mobile no" class="form-control" required><br>
           Upload Resume<br><b style="color:red;">Only Images or pdf file supported.</b> <input type="file" name="image">  
            <br>
             <textarea  name="contain"  placeholder="Tell Us About Your Self" class="form-control" required></textarea><br>
             <input style="background-color: #1cbc89;
border-radius: 0px;
color: white;
font-size: 16px;" type="submit" name="submit" value="Submit" class="form-control">
              </form>
             </table>
        </div>
        <div class="col-md-3">
        </div>
        </div>
    </div>
</div>   

<!--corporate section section end here -->

<div>
<?php include("includes/footer.php");?>	
</div>


 <!-- jQuery Library  -->
 <?php include("includes/footerjs.php");?>

    </body>
</html>

<?php
if(isset($_POST['submit'])){
	//text data variables////////////////////////////////////////
	
	
	$name= $_POST['name'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$contain= $_POST['contain'];
	
	$file= $_FILES['image']['name'];
	$temp_file= $_FILES['image']['tmp_name'];
	$file_type= $_FILES['image']['type'];
	
	
	
	
	
	if ($name=="" or $email=="" or $contain=="" or $mobile==""){
		
		
		
		echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
		exit();
	}
	if($file_type=="image/jpeg" or $file_type=="image/png" or $file_type=="image/gif" or $file_type=="application/pdf" or $file_type=="application/doc"){
	

		//uploading images to its folder
		move_uploaded_file($temp_file,"images/$file");

		
		}
	
	
		{
	
	
	
	
	
	   
		
	
	
	
	
	$insert_form ="insert into career_form (name,email,mobile,contain,image) values ('$name','$email','$mobile','$contain','$file')";
	
	
		
		$run_form = mysqli_query($con, $insert_form);
		if($run_form){
			
			
			echo"<script language='javascript'>alert(' successfilly Changed')</script>";
		
		}
		
	
	}
	
	
}


?>









