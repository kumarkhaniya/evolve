 


<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
			<br />
                <h1 class="title">The Skill</h1>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
			<br />
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo base_url(); ?>User/index">Home</a></li>
                    <li><?php echo $expertise_info[0]->menuName; ?></li>
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
		<?php /* <img class="img-responsive" src="<?php echo base_url(); ?>/images/admin/slider/training-delivery.jpg" /> */ ?>
		
		<?php /*  new dynamic image set  */ ?>
		
		
                           
                    <a href="">
                      <?php /* <img src="<?php echo base_url(); ?>/images/admin/image/<?php echo $image->image; ?>" alt="Evolve Gallery"> */ ?>
                       <?php /*  <img src="<?php echo base_url(); ?>/images/admin/Expertise/finalimage1.jpg" height="350px" width="1000px" alt="Evolve Gallery"> */ ?>
                        <img src="<?php echo base_url(); ?>/images/admin/Expertise/<?php  echo $expertise_info[0]->image_2; ?>" class="img-responsive" alt="Evolve Gallery">
                        
                        
                        
                    </a>
               
<br/><br/><br/>
                            
		
		
            <div class="col-md-3">
				<div class="widget">

                    <h4 class="title">Our expertise includes:</h4>
                    <ul class="sidebar-menu">
                        
                                                 <li> <a href="http://www.evolvelearningsolutions.com/TrainingDelivery"> <b> Training Delivery</b></a> </li>  
                            
                            
                                                    <li> <a href="http://www.evolvelearningsolutions.com/PerformanceImprovement"> <b> Performance Improvement</b></a> </li>  
                            
                            
                                                    <li> <a href="http://www.evolvelearningsolutions.com/InstructionalDesign"> <b> Instructional Design</b></a> </li>  
                            
                            
                                                    <li> <a href="http://www.evolvelearningsolutions.com/Coaching"> <b> Coaching</b></a> </li>  
                            
                            
                                                    <li> <a href="http://www.evolvelearningsolutions.com/KnowledgeManagement"> <b> Knowledge Management</b></a> </li>  
                            
                            
                                                     
                    </ul>

                </div>
			</div>
			<!-- Blog Content -->
            <div class="col-md-9">

                <!-- Posts List -->
                <div class="posts-list">

                    <!-- Single Post With Image -->
                    <article class="blog-post">

                              
                        <h2 class="title"><?php  echo $expertise_info[0]->menuName; ?></h2><hr />
                        <!-- /Post Title -->
                        <!-- Post Content -->
                        <div class="content">
                            <p>
                                <?php  echo $expertise_info[0]->menuDesc; ?>  
                            </p>
                           
                            <br />
                        </div>
                            
                        <!-- /Post Content -->

                        <!-- Read More Button -->
                        <div>
                             
                        </div>
                        <!-- /Read More Button -->

                    </article>
                    <!-- /Single Post With Image -->                   
                </div>
                <!-- /Posts List -->
            </div>
            <!-- /Blog Content -->

        </div>
    </div>
</main>
<!-- /Main -->

 