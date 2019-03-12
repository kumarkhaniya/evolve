<!-- Slider-->
<br />
<!-- Carousel -->
<div class="container">
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner">
   <?php /* <div class="item active">
    	<img src="<?php echo base_url(); ?>img/banner1.jpg" alt="">
                    
                    <div class="header-text">
                        <div class="col-md-5 vertical-middle">
                            <h2>
                            	<span>Customer Service Programs </span>
                            </h2>
<p>Simple yet powerful tools to becoming the most preferred brand. Make your customers feel “WOW” every single time they interact and do business with you.</p>
                        </div>
                    </div>
    </div>  */?>
                            <?php
    $count = count($banner);
    if ($banner) {
        $bannerloopcount = 0;
        foreach ($banner as $banner) {
            $bannerloopcount = $bannerloopcount+1;

    
            ?>
    <div class="item  <?php if($bannerloopcount == 1){ ?> active <?php } ?>" >
    	<img src="<?php echo base_url(); ?>images/admin/slider/<?php echo $banner->image; ?>" alt="" title="">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-5 vertical-middle">
                            <h2>
                            	<span><?php echo $banner->name; ?> Programs </span>
                            </h2>

<?php echo $banner->image_desc;?>

                        </div>
                    </div><!-- /header-text -->
    </div>
      <?php
        }
    }
    ?>
</div>

</div><!-- /carousel -->
</div>
<!-- /Slider -->

<!-- Main -->
<main class="main-container">

    <!-- /Expertise -->
    <section id="about" class="section">

    <div class="expertise-bg"><br /><br />
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <header>
                        <h2 class="section-title"><span class="text-theme"></span> <span style="color:#000;">The Skill</span></h2><hr style="border-top: 1px solid #46C1F1;">
                    </header>
                </div>
            </div>
           
            
                <?php
    $count = count($Expertise);
    if ($Expertise) {
        foreach ($Expertise as $Expertise) {
            ?>
            <div class="col-md-4 feature fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.4s">
                <div class="vishal-block">
                    <img class="img-responsive expert-icon" src="<?php echo base_url(); ?>images/admin/Expertise/<?php echo $Expertise->image; ?>"   alt="" title="" />
                    <div class="h3"><?php echo $Expertise->menuName; ?></div>
                    <p class="description">
                       <?php echo $Expertise->menuTargetWindow; ?>
                                     
                    </p>
                   <a href="<?php echo base_url() ?><?php echo $Expertise->menuUrl; ?>" class="btn btn-theme"   title="">Read more</a>
                    </div>
                </div>
             <?php }}?>
            <br />
           

        </div>
      </div>
    </section>
  <!-- /Expertise -->

   <!-- /video -->
    <section id="projects" class="section-small bg-light-gray">
        <div class="container">

            <!-- Section Header -->
            <div class="row">
                <div class="col-md-6">
                    <header>
                        <h2 class="section-title"><span class="text-theme"></span> <span style="color:#000;">Presentations</span></h2><hr style="border-top: 1px solid #46C1F1;">
                    </header>
                </div>
            </div>
            <!-- /Section Header -->

            <!-- Section Content -->
            <div class="row">
<?php foreach ($video_name as $video_name) ?>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo $video_name->name; ?>"></iframe>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        
                         
                    </div>
                    <br />
                    <div class="row">
                        
                        <?php if ($video) {
    $i = 0;
    foreach ($video as $video) {
        $i+=count($video); ?>
                        <div class="col-md-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?php echo $video->name; ?>"></iframe>
                            </div>
                        </div>
                        
                         <?php if ($i >= 4) { ?> 
            <?php break;
        }
    }
} ?>
                         
                    </div>
                </div>
            </div>

            <br />
            <br />
            <a href="<?php base_url(); ?>video" class="btn btn-theme pull-right">View more</a>

            <!-- /Section content -->

        </div>
    </section>
   
<!-- Blog -->
    <section id="more-features" class="section" style="background-color: #E7ECEF;    padding: 25px;">
        <div class="container">
            <!-- Section Content -->
            <div class="row section-content zoomIn wow">
                <!-- Feature Block -->
            


                <div class="col-md-6">
                    <header>
                        <h2 class="section-title"><span class="text-theme"></span> <span style="color:#000;">Blute (Blog & Contribute)</span></h2>
                   <hr style="border-top: 1px solid #46C1F1;">
                    </header>
                     
                    <div class="row">
                        <?php if($blog) {   $i=0; foreach ($blog as $blog) { $i+=count($blog);   ?>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-body">
                                    <div class="blogShort">
                                        <?php   $name= $blog->image; if ($name ==1) { ?>
                          <img src="<?php echo base_url(); ?>/images/author-image-01.jpg" title="" class="pull-left img-responsive thumb margin10   col-md-3">
                        <?php } else { ?>
                          <img src="<?php echo base_url(); ?>images/admin/blog/<?php echo $blog->image; ?>" title="" alt="" class="pull-left img-responsive thumb margin10   col-md-3">
                        <?Php } ?>
                                        &nbsp;&nbsp;

                                        <article>
                                            <p class="col-md-9">
                                              <?php echo $blog->title; ?>
                                                <br /><br />
                                                <a class="btn btn-blog marginBottom10" href="<?php echo base_url() ?>blog_info?id=<?php echo $blog->id; ?>"  title="">READ MORE</a>
                                            </p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php if($i >= 4) { ?> 
                <?php  break; } }  } ?>
                         
                    </div>                    
                   
                </div>
                <!-- /Feature Block -->
				
		<div class="col-md-6">
<header>
                        <h2 class="section-title"><span class="text-theme"></span> <span style="color:#000;">Industries</span></h2>
                   <hr style="border-top: 1px solid #46C1F1;">
                    </header>
                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <?php if($image_desc) {   $i=0; foreach ($image_desc as $image_desc) { $i+=count($image_desc);   ?>
                
                   <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                           <a href="<?php base_url(); ?>gallery"><img src="<?php echo base_url(); ?>/images/admin/image/<?php echo $image_desc->image; ?>" alt="" title=" "></a>
                                        </div>
                                        <b> <?php echo $image_desc->name; ?></b>

                                    </div>
                          </li>
                
                <?php if($i >= 4) { ?> 
                <?php  break; } }  } ?>
                                 
                                 
                            </ul>
                        </div><!-- /Slide1 --> 
                        <div class="item">
                            <ul class="thumbnails">
                                 <?php if($image_asc) {   $i=0; foreach ($image_asc as $image_asc) { $i+=count($image_asc);   ?>
                
                   <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                              <a href="<?php base_url(); ?>gallery"><img src="<?php echo base_url(); ?>/images/admin/image/<?php echo $image_asc->image; ?>" alt="" title=" "></a>
                                        </div>
                                        <b> <?php echo $image_asc->name; ?></b>

                                    </div>
                          </li>
                
                <?php if($i >= 4) { ?> 
                <?php  break; } }  } ?>
                                 
                                 
                                 
                            </ul>
                        </div><!-- /Slide2 --> 
                         
                    </div>


                    <nav>
                        <ul class="control-box pager">
                            <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                            <li><a data-slide="next" href="#myCarousel"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                    <!-- /.control-box -->   

                </div><!-- /#myCarousel -->

            </div><!-- /.col-xs-12 --> 
				
            </div>
            <!-- /Section Content -->

        </div>
    </section>
    <!-- /Section: More Features -->

  <!-- image -->
    <!--<section id="" class="section-mini-slider bg-tuna">
        <div class="container"></div>
    </section>-->
    <!-- /Section: Statistics -->

    <!-- Section: Testimonials -->
    <section id="testimonials" class="section-small">
        <div class="container">
			<!-- Section Header -->
            <div class="row">
                <div class="col-md-6">
                    <header>
                        <h2 class="section-title"><span class="text-theme"></span> <span style="color:#000;">The Approach</span></h2><hr style="border-top: 1px solid #46C1F1;">
                    </header>
                </div>
            </div>
            <!-- /Section Header -->
            <!-- Section Content -->
            <div class="row">
			
                <div class="col-md-6">
                    <div class="media">
                        <?php foreach($methodlogy as $methodlogy) ?>
                        <div class="media-body">
                            
                            <p class="description">
                                
                                <?php $product_name = $methodlogy->menuDesc;
                                    echo substr($product_name, 0,680);
                                    if (strlen($product_name) > 680) {
                                        echo '...';
                                    } ?>
                            </p>
                        </div>
                    </div>
                </div>
				<div class="col-md-6">
					<img class="img-responsive" src="<?php echo base_url(); ?>img/methodology-index.png" alt="Evolve Learning Solutions" />
                    <br><br>
                    <a class="btn btn-blog btn-theme pull-right"  href="<?php echo $methodlogy->menuUrl;?>"   title="" >View The Complete Process Flow</a>
				</div>
            </div>
            <!-- /Section Content -->

        </div>
    </section>
	
	<section id="testimonials" class="section-small" style="background-color: #E7ECEF;">
        <div class="container">
			<!-- Section Header -->
            <div class="row">
                <div class="col-md-6">
                    <header>
                        <h2 class="section-title"><span class="text-theme"></span> <span style="color:#000;">About Us</span></h2><hr style="border-top: 1px solid #46C1F1;">
                    </header>
                </div>
            </div>
            <!-- /Section Header -->
			<div class="col-md-6">	
                    <?php foreach($about as $about) ?>
                    
                    <p>
                         <?php $product_name = $about->menuDesc;
                                    echo substr($product_name, 0,1000);
                                    if (strlen($product_name) > 1000) {
                                        echo '...';
                                    } ?>
                        
                         </p>
<a href="<?php echo base_url(); ?>about?id=<?php echo $about->id; ?>" class="smooth-scroll btn btn-theme"  title="English language training provider for students and employees in Ahmedabad and Delhi,NCR">View More</a>
                </div>
				<div class="col-md-6">
					<div class="card">
                        

                        <!-- Tab panes -->
                        <div class="tab-content">
                             <?php
                             $count = count($vision);
                             if ($vision) {
                             foreach ($vision as $vision) {
                            ?>
                            <h3><?php echo $vision->menuName; ?></h3>
					
					<p> 
                                            
                                              <?php $product_name = $vision->menuDesc;
                                    echo substr($product_name, 0,150);
                                    if (strlen($product_name) > 150) {
                                        echo '...';
                                    } ?><br /><br /><a href="<?php echo base_url(); ?>about?id=<?php echo $about->id; ?>"   title="" class="smooth-scroll btn btn-theme">View More</a></p>
                            
                                <?php }}  ?>
                             
                              
                        </div>
                    </div>
				</div>
		</div>
	</section>
    <!-- /Section: Testimonials -->

</main>
<!-- /Main -->

