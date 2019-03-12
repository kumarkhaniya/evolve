<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
	$(window).scroll(function () {
	var scrollY = $(window).scrollTop();			
        if(scrollY > 500) {
            //alert("test");
            $('.affixscroll').addClass('fixed');
        }else{
           // $('.affixscroll').css({'position': 'relative'});
             $('.affixscroll').removeClass('fixed');
//alert("sdf");

}	
	});
	
});
</script>

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">
            <!-- Page Title -->
            <div class="col-md-8">
<br />
                <h1 class="title">Training Programs</h1>
            </div>
            <!-- /Page Title -->
            <!-- Breadcrumbs -->
            <div class="col-md-4">
<br />
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo base_url(); ?>User/index">Home</a></li>
                    <li>Training Programs</li>
                </ul>
            </div>
            <!-- /Breadcrumbs -->
        </div>
    </div>
</section>
<!-- /Section: Page Header -->

<!-- Main -->
<br /><br />
<main class="main-container">
    <div class="container">
                <?php foreach($program as $program)  ?>
<div class="row">
<div class="col-md-6">
<img class="img-responsive" src="<?php echo base_url(); ?>/images/admin/menu/<?php echo $program->image; ?>" />
</div>
<div class="col-md-6">
<p><?php echo $program->menuDesc; ?></p>
</div>
</div>
<br /><br />
        <div class="row">
            <table class="table table-bordered text-center table-responsive affixscroll">
  <thead>
<tr class="row">
  <th class="text-center th-program col-xs-5">Program</th>
  <th class="text-center th-program col-xs-7">Program Overview</th>
</tr>
  </thead>
              <?php
    $count = count($program_list);
    if ($program_list) {
        foreach ($program_list as $program_list) {
            ?>
            
            
             <div class="row">
                  <?php $menu_id=$program_list->id;
        
        $link = mysqli_connect("localhost", "evolvele_user", "evolve@2016", "evolvele_evolve");
                                            $sql = "select * From program where id='".$menu_id."' ";      
                                            $query = mysqli_query($link, $sql);
                                            $rows= mysqli_fetch_array($query); 
                                             
                                              ?>
            <!-- Blog Content -->
            <table class="table table-bordered text-center table-responsive">
  <thead>
 
  </thead>
  <tbody>
<tr class="row">
  <td class="text-left col-xs-5"><?php echo $rows['menuName'] ?></td>
  <td class="text-left col-xs-7"><?php echo $rows['menuDesc'] ?></td>
</tr>
  </tbody>
</table>
            <!-- /Blog Content -->
        </div>
            
         <?php }
    }
    ?>
  
            <!-- /Blog Content -->
        </div>
    </div>
</main>
<!-- /Main -->