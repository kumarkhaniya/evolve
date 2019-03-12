  
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

    <section>
        <div class="container">

            <!-- Project -->
            <div class="row">

                <div class="projects-list">
                     <?php 
                       $count=count($image);
                       if($image)
                       {
                           foreach($image as $image)
                           {
                       
                     ?>   
                    <div class="col-sm-3 col-xs-12 project-image">
                        <a href="<?php echo base_url(); ?>/images/admin/image/<?php echo $image->image; ?>" class="image-popup">
                            <div class="gallery-image">
                                <img src="<?php echo base_url(); ?>/images/admin/image/<?php echo $image->image; ?>">
                            </div>
                        </a>
<br />
<!-- 
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
				 
				<a  href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fjoecalloway.com%2Fthe-five-friends-how-to-engage-employees%2F&amp;t=The%20Five%20Friends%3A%20How%20to%20Engage%20Employees"class="a2a_button_facebook"> </a>
				<a class="a2a_button_twitter"></a>
				<a class="a2a_button_google_plus"></a>
				<a class="a2a_button_linkedin"></a>
				</div>
				<script async src="https://static.addtoany.com/menu/page.js"></script>
				 -->
                         
                    </div>
                       <?php }}  ?>


                </div>

                 
                

            </div>
             

        </div>
    </section>

     

</main>
<!-- /Main -->

 