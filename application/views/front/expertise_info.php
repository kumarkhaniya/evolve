 


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

            <!-- Blog Content -->
            <div class="col-md-12">

                <!-- Posts List -->
                <div class="posts-list">

                    <!-- Single Post With Image -->
                    <article class="blog-post">

                        <!-- Post Image -->
                        <div class="image">
                            <img src="<?php echo base_url(); ?>/images/admin/slider/Banner_Evolve2.jpg" />
                        </div> 
                           
                              
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

 