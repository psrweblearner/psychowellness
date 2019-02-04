 <!--=========== BEGAIN Home Blog SECTION ================-->
    <section id="homeBLog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="homBlog-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>News From Blog</h2>
                <div class="line"></div>
              </div> 
              <!-- Start Home Blog Content -->
              <div class="homeBlog-content">
                <?php



$query="select *from news_blog where id=2"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$name=$row['name'];
		$date= $row['date'];
		$work= $row['work'];
		$comment=$row['comment'];
		$title=$row['title'];
		$text=$row['text'];
		
		
		
?> 
                <div class="row">
                  <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                     
                      <div class="single-blog-right">
                        <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/choose-us-img3.jpg" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#"><?php echo $name;?></a></li>
                            <li>In <a href="#"><?php echo $work;?></a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2><?php echo $title;?></h2>
                          <p><?php echo $text;?></p>
                          <div class="single-blog-right">
                        
                        <h5 align="right"> <?php echo $date;?>
                            <span class="fa fa-eye"></span>1523
                           <a href="#"><span class="fa fa-comments"></span>5</a></h5>
                       
                      </div>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php };?>
                   <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                       <?php



$query="select *from news_blog where id=3"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$name=$row['name'];
		$date= $row['date'];
		$work= $row['work'];
		$comment=$row['comment'];
		$title=$row['title'];
		$text=$row['text'];
		
		
		
?> 
                    <div class="single-Blog">
                      
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/choose-us-img3.jpg" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#"><?php echo $name;?></a></li>
                            <li>In <a href="#"><?php echo $work;?></a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2><?php echo $title;?></h2>
                          <p><?php echo $text;?></p>
                          <div class="single-blog-right">
                        
                        <h5 align="right"> <?php echo $date;?>
                            <span class="fa fa-eye"></span>1523
                           <a href="#"><span class="fa fa-comments"></span>5</a></h5>
                       
                      </div>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php };?>
                   <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                                    <?php



$query="select *from news_blog where id=4"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$name=$row['name'];
		$date= $row['date'];
		$work= $row['work'];
		$comment=$row['comment'];
		$title=$row['title'];
		$text=$row['text'];
		
		
		
?> 
                    <div class="single-Blog">
                     
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/choose-us-img3.jpg" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#"><?php echo $name;?></a></li>
                            <li>In <a href="#"><?php echo $work;?></a></li>
                          </ul>
                        </div>
                        
                        <div class="blog-content">
                          <h2><?php echo $title;?></h2>
                          <p><?php echo $text;?></p>
                           <div class="single-blog-right">
                        
                        <h5 align="right"> <?php echo $date;?>
                            <span class="fa fa-eye"></span>1523
                           <a href="#"><span class="fa fa-comments"></span>5</a></h5>
                       
                      </div>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
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
        </div>
      </div>
    </section>
    <!--=========== End Home Blog SECTION ================-->
