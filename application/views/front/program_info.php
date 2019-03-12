 
<?php foreach($program_info as $program_info) ?>
<section class="section-page-header">
    <div class="container">
        <div class="row">
            <!-- Page Title -->
            <div class="col-md-8">
			<br />
                <h1 class="title"><?php  echo $program_info->menuName; ?></h1>
            </div>
            <!-- /Page Title -->
            <!-- Breadcrumbs -->
            <div class="col-md-4">
			<br />
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php  echo base_url(); ?>User/index">Home</a></li>
                    <li><?php  echo $program_info->menuName; ?></li>
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
		<h3>Our <?php  echo $program_info->menuName; ?></h3>
		<hr />
		<div class="row">
			<div class="col-md-6">
				<img class="img-responsive" src="<?php echo base_url(); ?>images/admin/program/<?php echo $program_info->image; ?>" />
			</div>
			<div class="col-md-6">
                            <p><?php  echo $program_info->menuDesc; ?></p> 
			</div>
		</div>
		<br /><br />
        <div class="row">
            <!-- Blog Content -->
            <table class="table table-bordered text-center">
			  <thead>
				<tr>
				  <th class="text-center th-program">Program</th>
				  <th class="text-center th-program">Program Overview</th>
				  <th class="text-center th-program">Best Suited For</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td><?php  echo $program_info->menuName; ?></td>
				  <td><?php  echo $program_info->menuDesc; ?></td>
				  <td>All customer service professionals</td>
				</tr>
			  </tbody>
			</table>
            <!-- /Blog Content -->
        </div>
    </div>
</main>
<!-- /Main -->
<br /><br /><br />

 
 