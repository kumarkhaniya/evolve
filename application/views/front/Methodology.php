 

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">
            <!-- Page Title -->
            <div class="col-md-8">
			<br />
                <h1 class="title">The Approach</h1>
            </div>
            <!-- /Page Title -->
            <!-- Breadcrumbs -->
            <div class="col-md-4">
			<br />
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo base_url(); ?>User/index">Home</a></li>
                    <li>The Approach</li>
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
            <div class="col-md-4">
				<img class="img-responsive" src="<?php echo base_url(); ?>/img/Our-Methodology1.png" />
            </div>
            <?php foreach($methodlogy as $methodlogy) ?>
			<div class="col-md-8">
				<?php echo $methodlogy->menuDesc; ?>
			</div>
            <!-- /Blog Content -->
        </div>
		<br />
		<div class="row">
			<div class="col-md-12">
				<img class="img-responsive" src="<?php echo base_url(); ?>/images/admin/menu/<?php echo $methodlogy->image; ?>" />
			</div>
		</div>
    </div>
</main>
<!-- /Main -->
<br /><br /><br />

 