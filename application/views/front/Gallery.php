 <link href="<?php echo base_url(); ?>dist/css/lightgallery.css" rel="stylesheet"> 
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
			<br />
                <h1 class="title">Gallery</h1>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
			<br />
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo base_url(); ?>User/index">Home</a></li>
                    <li>Gallery</li>
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

    <div class="demo-gallery container">

            <ul id="lightgallery" class="list-unstyled row">
			
			<?php 
                       $count=count($image);
                       if($image)
                       {
                           foreach($image as $image)
                           {
                       
                     ?>  
					 

                <li class="col-md-4" data-responsive="img/index-sir.jpg" data-src="<?php echo base_url(); ?>/images/admin/image/<?php echo $image->image; ?>" data-sub-html="<h4></h4><p></p>">
                    <a href="">
                        <img src="<?php echo base_url(); ?>/images/admin/image/<?php echo $image->image; ?>" alt="Evolve Gallery">
                    </a>
                </li>

				
				 <?php   }    }  ?>
                 
                
            </ul>
        </div>

     

</main>
<!-- /Main -->

 