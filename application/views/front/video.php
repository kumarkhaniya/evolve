<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
			<br />
                <h1 class="title">Video</h1>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
			<br />
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo base_url(); ?>User/index">Home</a></li>
                    <li>Video</li>
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
                       $count=count($video);
                       if($video)
                       {
                           foreach($video as $video)
                           {
                       
                     ?>   
                     <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo $video->name;  ?>"></iframe>
                    </div>
                     </div>  
                       <?php }}  ?>


                </div>  

                 
                

            </div>
             

        </div>
    </section>

     

</main>
<!-- /Main -->

 