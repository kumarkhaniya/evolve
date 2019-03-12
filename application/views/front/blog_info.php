 

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
			<br />
                <h1 class="title">Blog - Posts List</h1>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
			<br />
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="<?php echo base_url(); ?>User/inedx">Home</a></li>
                    <li>Blog</li>
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
        <div class="row">
            <?php foreach($blog_info as $blog_info) ?>
			<div class="col-md-3 ">
			<p>&nbsp;</p>
				<i class="fa fa-clock-o fa-2x"></i> &nbsp; <?php echo $blog_info->date; ?> <br /><br />
				<i class="fa fa-tag fa-2x"></i> &nbsp; <?php echo $blog_info->name; ?> <br />
				 
			</div>
			<div class="col-md-6"><br />
				<h3><?php echo $blog_info->title; ?></h3>
				<hr />
				<img class="img-responsive" src="<?php echo base_url(); ?>images/admin/blog/<?php echo $blog_info->image; ?>" style="    width: 300px;" />
				
				<hr />
				<p class="text-jusitify"><?php echo $blog_info->menuDesc; ?></p>
				
                                <p class="text-jusitify"><?php echo $blog_info->blog_desc; ?></p>				
			<!--	<img class="img-responsive" src="<?php echo base_url(); ?>images/admin/blog/<?php //echo $blog_info->image; ?>" style="    width: 300px;" /> -->
				<br />
				<!-- AddToAny BEGIN -->


<!-- <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="line-height: 32px;">
				 
				<a href="http://www.addtoany.com/add_to/facebook?linkurl=http%3A%2F%2F192.185.104.105%2F~evolvele%2Fblog_info%3Fid%3D1&amp;linkname=Evolve%20Learning%20Solutions&amp;linknote=" class="a2a_button_facebook" target="_blank" rel="nofollow"><span class="a2a_svg a2a_s__default a2a_s_facebook a2a_img_text" ></span> </a>
				<a class="a2a_button_twitter" target="_blank" href="/#twitter" rel="nofollow"><span class="a2a_svg a2a_s__default a2a_s_twitter" ></span><span class="a2a_label">Twitter</span></a>
				<a class="a2a_button_google_plus" target="_blank" href="/#google_plus" rel="nofollow"><span class="a2a_svg a2a_s__default a2a_s_google_plus" ></span><span class="a2a_label">Google+</span></a>
				<a class="a2a_button_linkedin" target="_blank" href="/#linkedin" rel="nofollow"><span class="a2a_svg a2a_s__default a2a_s_linkedin" ></span><span class="a2a_label">LinkedIn</span></a>
				<div style="clear: both;"></div></div> -->


<?php /*
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
				 
				<a  href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fjoecalloway.com%2Fthe-five-friends-how-to-engage-employees%2F&amp;t=The%20Five%20Friends%3A%20How%20to%20Engage%20Employees"class="a2a_button_facebook"> </a>
				<a class="a2a_button_twitter"></a>
				<a class="a2a_button_google_plus"></a>
				<a class="a2a_button_linkedin"></a>
				</div>
*/?>

<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
				
				<!-- AddToAny END -->
			</div>
			<div class="col-md-3"><br />
				<h3>Recent Blog</h3>
				<hr />
				<ul class="well sidebar-nav nav">
                     
                    <?php $count=count($blog_info_desc);
                    if($blog_info_desc)
                    {
                        foreach($blog_info_desc as $blog_info_desc)
                        {
                     
                        
                     
?>
		      <li class="sidebar-brand">
                        <a href="<?php echo base_url() ?>blog_info?id=<?php echo $blog_info_desc->id; ?>"> <?php echo $blog_info_desc->title; ?>  </a>
                     </li>
                    <?php } } ?>
                </ul>
			</div>
        </div>
    </div>
</main>
<!-- /Main -->
<br /><br /><br />

 