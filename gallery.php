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
 <div class="container-fluid" style="background: #f5f5f5">
 	 <section id="blogArchive">      
       <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <ol class="breadcrumb">
                    	<li><a href="index.php">Home</a></li>
                    	<li>Gallery</li>
                    </ol>
              </div>
             
            </div>
          </div>  
    </section>
 </div> 
 <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="gallery-area">
              <!-- Start First Image Album  -->
              <div class="my-simple-gallery">
                <div class="section-heading">
                  <h2>Album</h2>
                  <div class="line"></div>
           
                </div>
                <div class="row">
                        <?php
  $query="select *from gallery1"; 
$run = mysqli_query($con,$query);
	
	while ($row= mysqli_fetch_array($run)){
		
		$id =$row['id'];
		$image=$row['image'];
		$title=$row['title'];
	
?> 
                  <figure itemprop="associatedMedia" class="col-lg-3">
                    <a class="gallery-iteam" href="admin/images/<?php echo $image;?>" itemprop="contentUrl" data-size="1024x1024">
                      <img src="admin/images/<?php echo $image;?>" itemprop="thumbnail" alt="Image description" />
                      
                    </a>                    
                    <figcaption itemprop="caption description"><?php echo $title;?></figcaption>         
                  </figure>
                  
                  <?php };?>               
                </div>
                
              </div>
             
              <!-- End First Image Album  -->

             
              <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                <!-- Background of PhotoSwipe. 
                     It's a separate element, as animating opacity is faster than rgba(). -->
                <div class="pswp__bg"></div>

                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">

                  <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                  <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                  <div class="pswp__container">
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                  </div>

                  <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                  <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Share"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                              <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div> 
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->

<div>
<?php include("includes/footer.php");?>	
</div>

<?php include("includes/footerjs.php");?>	

    </body>
</html>