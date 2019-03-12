
<!----------------------------------------- Slider------------------------------------------------------ -->
<br /><br />
<div class="slider owl-carousel owl-theme">

    <!-- Slide -->
    <?php
    $count = count($banner);
    if ($banner) {
        foreach ($banner as $banner) {
            ?>
            <div class="item mask" style="background: url(<?php echo base_url(); ?>images/admin/slider/<?php echo $banner->image; ?>) no-repeat center top / cover;" data-stellar-background-ratio="0.4">

                <div class="container height-100p">

                    <div class="row height-100p">
                        <div class="col-sm-6 height-100p bounceInLeft wow" data-wow-duration="1.3s" data-wow-delay="0.3s" data-stellar-ratio="0.7">
                            <div class="vertical-middle">
                                <h1 class="text-white"> <span class="text-theme"><?php echo $banner->name; ?></span></h1>
                                <div class="text-white h4">
                                    <?php echo $banner->image_desc; ?>
                                </div>
                                <!--<a href="<?php echo base_url();
                            echo $banner->url; ?>" class="smooth-scroll btn btn-theme">Read More</a>-->
                            </div>

                        </div>
<!--<h3 style="color:#fff; top:80%;">Certified Professional in Learning and Performance from ATD, USA (formerly ASTD)</h3>-->
                    </div>
                </div>

            </div>
        <?php }
    }
    ?>


</div>
<!---------------------------------------------------------------- /Slider-------------------------------- -->

<!-- Main -->
<main class="main-container">

    <!---------------------------------------------------------------- /Expertise-------------------------------- -->
    <section id="about" class="section">

    <div class="expertise-bg">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <header>
                        <h2 class="section-title"><span class="text-theme">Our</span> <span style="color:#fff;">Expertise</span></h2>
                    </header>
                </div>
            </div>
            <br />
            <hr />
            <br />
            <div class="row">
               
            </div>
                <?php
    $count = count($Expertise);
    if ($Expertise) {
        foreach ($Expertise as $Expertise) {
            ?>
            <div class="col-sm-4 feature fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.4s">
                <div class="vishal-block">
                    <img class="img-responsive expert-icon" src="<?php echo base_url(); ?>images/admin/Expertise/<?php echo $Expertise->image; ?>" /></span>
                    <div class="h3"><?php echo $Expertise->menuName; ?></div>
                    <p class="description">
                       <?php echo $Expertise->menuTargetWindow; ?>
                                     
                    </p>
                    <a href="<?php echo base_url() ?>expertise_info?id=<?php echo $Expertise->id; ?>" class="btn btn-theme" style="margin:20px">Read more</a>
                    </div>
                </div>
             <?php }}?>
            <br /><br />
           

        </div>
      </div>
    </section>
  <!---------------------------------------------------------------- /Expertise-------------------------------- -->

   <!---------------------------------------------------------------- /video-------------------------------- -->
    <section id="projects" class="section-small bg-light-gray">
        <div class="container">

            <!-- Section Header -->
            <div class="row">
                <div class="col-md-6">
                    <header>
                        <h2 class="section-title"><span class="text-theme">Latest Videos</span> </h2>
                    </header>
                    <hr />
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
            <a href="<?php base_url(); ?>video" class="btn btn-theme pull-right">Read more</a>

            <!-- /Section content -->

        </div>
    </section>
   
<!----------------------------------------------------------------Bloag-------------------------------- -->
    <section id="more-features" class="section">
        <div class="container">
            <!-- Section Content -->
            <div class="row section-content zoomIn wow">
                <!-- Feature Block -->
                <div class="col-md-12">
                    <h2 class="section-title">Our <span class="text-theme">Blog</span></h2>
                    <hr />
                     
                    <div class="row">
                        <?php if($blog) {   $i=0; foreach ($blog as $blog) { $i+=count($blog);   ?>
                        <div class="col-md-6">
                            <div class="media">
                                <div class="media-body">
                                    <div class="blogShort">
                                        <?php   $name= $blog->image; if ($name ==1) { ?>
                          <img src="<?php echo base_url(); ?>/images/author-image-01.jpg" alt="post img" class="pull-left img-responsive thumb margin10   col-md-3">
                        <?php } else { ?>
                          <img src="<?php echo base_url(); ?>images/admin/blog/<?php echo $blog->image; ?>" alt="post img" class="pull-left img-responsive thumb margin10   col-md-3">
                        <?Php } ?>
                                        &nbsp;&nbsp;

                                        <article>
                                            <p class="col-md-9">
                                              <?php echo $blog->title; ?>
                                                <br /><br />
                                                <a class="btn btn-blog marginBottom10" href="<?php echo base_url() ?>blog_info?id=<?php echo $blog->id; ?>">READ MORE</a>
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
            </div>
            <!-- /Section Content -->

        </div>
    </section>
    <!-- /Section: More Features -->

  <!--------------------------------------------------------image-------------------------------------- -->
    <section id="" class="section-mini-slider bg-tuna">
        <div class="container">
            <div class="col-xs-12">

                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <?php if($image_desc) {   $i=0; foreach ($image_desc as $image_desc) { $i+=count($image_desc);   ?>
                
                   <li class="col-sm-3">
                                    <div class="fff">
                                        <div class="thumbnail">
                              <a href="<?php base_url(); ?>gallery"><img src="<?php echo base_url(); ?>/images/admin/image/<?php echo $image_desc->image; ?>" alt=""></a>
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
                              <a href="<?php base_url(); ?>gallery"><img src="<?php echo base_url(); ?>/images/admin/image/<?php echo $image_asc->image; ?>" alt=""></a>
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
                            <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                        </ul>
                    </nav>
                    <!-- /.control-box -->   

                </div><!-- /#myCarousel -->

            </div><!-- /.col-xs-12 -->          

        </div><!-- /.container -->
    </section>
    <!-- /Section: Statistics -->

    <!-- Section: Testimonials -->
    <section id="testimonials" class="section-small">
        <div class="container">
            <!-- Section Content -->
            <div class="row">
                <div class="col-md-6">
                    <h1>Methodology</h1>
                    <hr>
                    <div class="media">
                        <?php foreach($methodlogy as $methodlogy) ?>
                        <div class="media-body">
                            
                            <p class="description">
                                
                                <?php $product_name = $methodlogy->menuDesc;
                                    echo substr($product_name, 0,350);
                                    if (strlen($product_name) > 350) {
                                        echo '...';
                                    } ?>
                                 
                                
                                <br><br>
                                <img class="img-responsive" src="<?php echo base_url(); ?>images/admin/menu/<?php echo $methodlogy->image; ?>">
                                <br><br>
                                <a class="btn btn-blog" href="<?php echo $methodlogy->menuUrl; ?>">READ MORE</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">	
                    <?php foreach($about as $about) ?>
                    <h2 class="section-title">About<span class="text-theme"> Us</span></h2>
                    <hr />
                    <p>
                         <?php $product_name = $about->menuDesc;
                                    echo substr($product_name, 0,350);
                                    if (strlen($product_name) > 350) {
                                        echo '...';
                                    } ?>
                        
                         </p>
                    <div class="card">
                        

                        <!-- Tab panes -->
                        <div class="tab-content">
                             <?php
                             $count = count($vision);
                             if ($vision) {
                             foreach ($vision as $vision) {
                            ?>
                            <h3><?php echo $vision->menuName; ?></h3>
					<hr />
					<p> 
                                            
                                              <?php $product_name = $vision->menuDesc;
                                    echo substr($product_name, 0,150);
                                    if (strlen($product_name) > 150) {
                                        echo '...';
                                    } ?><br /><br /><a href="<?php echo base_url(); ?>vision_info?id=<?php echo $vision->id; ?>" class="smooth-scroll btn btn-theme">View More</a></p>
                            
                                <?php }}  ?>
                             
                              
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Section Content -->

        </div>
    </section>
    <!-- /Section: Testimonials -->

</main>
<!-- /Main -->

 
<script type="text/javascript">
$(document).ready(function(){ 
     $(".slider").carousel({
         interval : 1000,
         pause: false
     });
});
</script>

 
 