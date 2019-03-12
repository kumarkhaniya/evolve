 

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
			<br />
                <h1 class="title">About Us</h1>
                
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
			<br />
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo base_url(); ?>index">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
            <!-- /Breadcrumbs -->

        </div>
    </div>
</section>
<!-- /Section: Page Header -->

<!-- Main -->
<main class="main-container">
    <div class="container">
<?php foreach($about as $about ) ?>
        <div class="row">
            <!-- <div class="col-md-4">
				<img class="img-responsive" src="<?php echo base_url(); ?>images/admin/menu/<?php echo $about->image; ?>" />
            </div> -->
			
			<!-- Our History -->
            <div class="col-md-12">
                <p class="text-justify">
                    <?php echo $about->menuDesc; ?> 
                </p>
<p class="text-justify">
                                    
                                    <?php echo $about->desc1; ?> 
				
				</p>
            </div>

            <!-- Our History -->
        </div>
		
		<hr />
		<br />
		<div class="row">
			<div class="col-md-6">
				 <img class="img-responsive" src="<?php echo base_url(); ?>img/index-sir.jpg"> <br /><br /><br />
 			<h4 class="abt-content" style="width: 62%;">Our core values and guiding principles</h4>
				 
				<p>
                                    <?php echo $about->desc2;  ?>
                                    </p>
                                
			</div>
			<div class="col-md-6 text-justify">
<?php
                             $count = count($vision);
                             if ($vision) {
                             foreach ($vision as $vision) {
                            ?>
                            <h4 class="abt-content"><?php echo $vision->menuName; ?></h4>
					
					<p> 
                                            <?php echo $vision->menuDesc; ?>
                                                </p>
                            
                                <?php }}  ?>
				 
			</div>
		</div>
<hr />
         
        
    </div>
</main>
<!-- /Main -->
<br /><br />
 