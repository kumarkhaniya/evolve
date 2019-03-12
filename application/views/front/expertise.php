 

<!-- Section: Page Header -->
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
                    <li>The Skill</li>
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
            <?php foreach($expertise as $expertise) ?>
            <div class="col-md-4">
				<img class="img-responsive" src="<?php echo base_url(); ?>/images/admin/menu/<?php echo $expertise->image; ?>" />
            </div>
            
			<div class="col-md-8">
				<?php echo $expertise->menuDesc; ?>
                            
                            
                             <div class="widget">

                    <h4 class="title">Our expertise includes:</h4>
                    <ul class="sidebar-menu">
                        
                         <?php 
                            $count=count($expertise_list);
                            if($expertise_list)
                            { 
                              foreach($expertise_list as $expertise_list) 
                              {
                            
                            ?>
                        <li> <a href="<?php echo base_url() ?><?php echo $expertise_list->menuUrl;  ?>"> <b> <?php echo $expertise_list->menuName; ?></b></a> </li>  
                            
                            
                            <?php } }?>
                         
                    </ul>

                </div>
			</div>
            <!-- /Blog Content -->
        </div>
		<br />
                <div class="row">
                    
                </div>
		 
    </div>
</main>
<!-- /Main -->
<br /><br /><br />

 