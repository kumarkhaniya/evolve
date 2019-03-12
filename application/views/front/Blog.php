 

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
                <h1 class="title">Blog</h1>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo base_url(); ?>User/index">Home</a></li>
                    <!-- <li><i class="fa fa-fw fa-home"></i> <a href="<?php //echo base_url(); ?>posts/add">Home</a></li> -->
                    <li>Blog</li>
                </ul>
            </div>
            <!-- /Breadcrumbs -->

        </div>
    </div>
</section>
<!-- /Section: Page Header -->
<br /><br />
<!-- Main -->
<main class="main-container">
    <div class="container">
        <div class="row">

            <!-- Blog Content -->
            <div class="col-md-9">

                <!-- Posts List -->
                <div class="posts-list">
                    <?php 
                    
                     $count=count($blog);
                     if($blog){
                    
                    foreach($blog as $blog){?>
                    <!-- Single Post With Image -->
                    <article class="blog-post">

                        
                        <!-- Post Title -->
                        <h2 class="title"><?php echo $blog->title; ?></h2>
                        <!-- /Post Title -->

                        <!-- Post Metadata -->
                        <!--<ul class="list-inline meta">
                            <li><?php  echo $blog->date; ?></li>
                            <li>by <a href="#"><?php echo $blog->name; ?></a></li>
                             
                        </ul>-->
                        <!-- /Post Metadata -->

                        <!-- Post Content -->
                          <?php   $name= $blog->image; if ($name ==1) { ?>
                          <img src="<?php echo base_url(); ?>/images/author-image-01.jpg" alt="post img" class="pull-left img-responsive thumb margin10   col-md-3">
                        <?php } else { ?>
                          <img src="<?php echo base_url(); ?>images/admin/blog/<?php echo $blog->image; ?>" alt="post img" class="pull-left img-responsive thumb margin10   col-md-3">
                        <?Php } ?>
                         
                        
                        <div class="content">
                            <p>
                               <?php $product_name = $blog->menuDesc;
                                    echo substr($product_name, 0,150);
                                    if (strlen($product_name) > 150) {
                                        echo '...';
                                    } ?>  
                            </p>
                        </div>
                        <!-- /Post Content -->

                        <!-- Read More Button -->
                        <div>
                            <a href="<?php echo base_url() ?>blog_info?id=<?php echo $blog->id; ?>" class="btn btn-theme">Read More <i class="fa fa-fw fa-angle-double-right"></i></a>
                            
                            
                            
                            <!-- <a href="<?php //echo base_url('Blog_info?id='.$blog->id); ?>"><?php //echo $blog->title; ?></a> -->
                            
                            <!-- <a href="<?php //echo base_url() ?>Blog/<?php //echo $blog->title; ?>" class="btn btn-theme">Read More <i class="fa fa-fw fa-angle-double-right"></i></a> -->
                             
                            <?php //echo anchor('Blog/' . $blog->title, 'View article') ?>
                            
            
                            
                            <?php //echo anchor('blog_info?id='.$blog->id,'read more >>'); ?>
                            <!-- <a href="<?php //echo base_url() ?>blog_info?id=<?php //echo $blog->name; ?>" class="btn btn-theme">Read More <i class="fa fa-fw fa-angle-double-right"></i></a> -->
                        </div><br><br><br>
                        <!-- /Read More Button -->

                    </article>
                    
                    <!-- Email -->

  
 
 <!-- Facebook -->

  <!--  <a href="<?php echo 'http://www.facebook.com/sharer.php?u='.current_url();?>"  
 >target="_blank"><img src="<?php  echo base_url().'/application/views/img/ 
 social/facebook.png'?>" alt="Facebook" />
    </a> -->
 <!-- Google+ -->

<!--   <a href="<?php echo 'https://plus.google.com/share?url='.current_url();?>"  
 target="_blank"><img src="<?php  echo base_url().'/application/views/img/ 
 social/google.png'?>"alt="Google" />
    </a> -->
  <!-- LinkedIn -->

 <!--  <a href="<?php echo 'http://www.linkedin.com/shareArticle?mini=true&amp;  
url='.current_url();?>" target="_blank"><img src="<?php  echo base_url().'/application/views/img/social/linkedin.png'?>" alt="LinkedIn" />
    </a> -->

 <!-- Twitter -->

  <!-- <a href="<?php echo 'https://twitter.com/share?url='.current_url(). 
 '&amp;hashtags=jobs ,Nigeria'?>" target="_blank"><img src="<?php  echo base_url().'/application/views/img/social/twitter.png'?>" alt='Twitter'/>
    </a> -->
                    
                     <?php } } ?>
                    
                 

                </div>
                 

            </div>
            <!-- /Blog Content -->

            <!-- Blog Sidebar -->
            <div class="col-md-3">

                <!-- Widget: Categories -->
                <div class="widget">

                    <h4 class="title">Expertise</h4>
                    <!--<ul class="sidebar-menu">
                        
                         <?php 
                            $count=count($expertise_list);
                            if($expertise_list)
                            { 
                              foreach($expertise_list as $expertise_list) 
                              {
                            
                            ?>
                        <li> <a href="<?php echo base_url() ?>expertise_info?id=<?php echo $expertise_list->id; ?>"> <b> <?php echo $expertise_list->menuName; ?></b></a> </li>  
                            
                            
                            <?php } }?>
                         
                    </ul>-->
<ul class="sidebar-menu">
                        
                                                 <li> <a href="http://evolvelearningsolutions.com/TrainingDelivery"> <b> Training Delivery</b></a> </li>  
                            
                            
                                                    <li> <a href="http://evolvelearningsolutions.com/PerformanceImprovement"> <b> Performance Improvement</b></a> </li>  
                            
                            
                                                    <li> <a href="http://evolvelearningsolutions.com/InstructionalDesign"> <b> Instructional Design</b></a> </li>  
                            
                            
                                                    <li> <a href="http://evolvelearningsolutions.com/Coaching"> <b> Coaching</b></a> </li>  
                            
                            
                                                    <li> <a href="http://evolvelearningsolutions.com/KnowledgeManagement"> <b> Knowledge Management</b></a> </li>  
                            
                            
                                                     
                    </ul>
                </div>
                 
               

            </div>
            <!-- /Blog Sidebar -->

        </div>
    </div>
</main>
<!-- /Main -->

 