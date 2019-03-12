<!DOCTYPE html>
<html lang="en">
<head>
<?php

require_once dirname(dirname(__FILE__)) . '/dbconnection/dbconnection.php';
?>
  <?php 
    if($details)
                       {     

                                                                                          
                      foreach ($details as $m_details)


                       {
                                                ?>
    <!-- Page title -->
    <title><?php echo $m_details->metaTitle; ?></title>

   

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="<?php echo $m_details->metaKeywords; ?>"   />
  <meta name="title" content="<?php echo $m_details->metaTitle; ?>" />
  <meta name="description" content="<?php echo $m_details->metaDescription;?>"/>
  <meta name="generator" content="evolvelearningsolutions" />
     
     <?php } } ?>  

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/images/logo.png">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/theme.css">

    <!-- TODO: Predefined Schemes (select one of the presented) -->
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/theme-persimmon.css" title="theme-persimmon">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/theme-atomic-tangerine.css" title="theme-atomic-tangerine">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/theme-yellow-sea.css" title="theme-yellow-sea">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/theme-rio-grande.css" title="theme-rio-grande">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/theme-vida-loca.css" title="theme-vida-loca">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/theme-mountain-meadow.css" title="theme-mountain-meadow">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/theme-java.css" title="theme-java">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/theme-mariner.css" title="theme-mariner">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/theme-medium-purple.css" title="theme-medium-purple">


</head>
<body>
<!-- Header -->
<header id="home" class="header">
					
    <!-- Navigation -->
    <nav id="navigation" class="navbar affix">

        <!-- Company Information -->
        <div class="information ">
            <div class="container">
                <div class="row">

                    <!-- Feedback -->
					<div class="col-md-2">
						<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'af,da,en,es,fi,fr,ja,nl,pl,ro,ru,sv,tl,it,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
					</div>
					
					
					
                    <div class="col-md-7">
                        <a href="mailto:akhilesh@evolvelearningsolutions.com"><span class="icon icon_mail_alt"></span> akhilesh@evolvelearningsolutions.com</a>
                        <a ><span class="icon icon_phone"></span> (+91) 971 170 4082 | (+91) 982 580 6005</a>
                        <a href="<?php echo base_url(); ?>/img/evolvelearningsolutions.pdf" title="Download" download><i class="fa fa-book"></i> Brochure</a>
                    </div>
                    <!-- /Feedback -->

                    <!-- Social -->
                    <div class="col-md-3">
                        <ul class="social">
			    <li><a href="https://www.facebook.com/evolvelearningsolutions" class="fa fa-facebook" target="_blank"></a></li>
                            <li><a href="https://twitter.com/akhilesh_evolve" class="fa fa-fw fa-twitter" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/company/evolve-learning-solutions" class="fa fa-fw fa-linkedin" target="_blank"></a></li>
                            <li><a href="https://www.youtube.com/channel/UClD90ct4DaxOKGHttZfKU-Q" class="fa fa-fw fa-youtube" target="_blank"></a></li>
                        </ul>
                    </div>
                    <!-- /Social -->

                </div>
            </div>
        </div>
        <!-- /Company Information -->

        <div class="container">

            <div class="row">
                <div class="col-md-3">

                    <!-- start logo -->
                        <a href="<?php echo base_url(); ?>" class="brand">
                            <?php 
                                $sql_image="select * from logo where status=1";
                                $qry_image=mysqli_query($link,$sql_image) or die(mysqli_error()); 
                                $row_image=mysqli_fetch_array($qry_image)
                            ?>
                            <!-- Logo Big -->
                            <img src="<?php echo base_url(); ?>/images/admin/logo/<?php echo $row_image['image']; ?>" class="logo-big" alt="">
                            <!-- /Logo Big -->

                            <!-- Logo Small -->
                            <img src="<?php echo base_url(); ?>/images/logo-small.png" class="logo-small" alt="">
                            <!-- /Logo Small -->

                        </a>
                     <!-- end logo -->
                        <!-- /Brand -->

                </div>
                
				<div class="col-md-9">
				<!-- /Navigation Header -->
					<label for="show-menu" class="top-show-menu"><i class="fa fa-navicon fa-2x"></i></label>
					<input type="checkbox" id="show-menu" role="button" />
					
					<ul class="menu-top" id="menu-top">
						
						<?php
                            
                            $menu="main";
                            $sql_menu="select * from menumgr where menuPosition='".$menu."'and status=1";
                            $qry_menu=mysqli_query($link,$sql_menu) or die(mysqli_error());
                            while($row_menu=mysqli_fetch_array($qry_menu)){
                            
                            ?>
                            <?php $nottodisplay = array("Home","blog_info");
								if(!in_array($row_menu['menuName'] , $nottodisplay)) {?>
                            <li class="menu-top-li">
                                <a  class="dropdown-toggle" href="<?php echo base_url(); ?><?php echo $row_menu['menuUrl']; ?>"><?php echo $row_menu['menuName']; ?></a>
                                 <!-- submenu logo -->
                                <?php if($row_menu['menuName']=="Expertise"){?>
                                <?php  } else { ?>
                                <?php }?>
                            </li>  
                            <?php }?>
                            <?php }?>
                              <!--Navigation -->
					</ul>
               
                </div>
                    

                </div>
            </div>

        </div>
    </nav>
    <!-- /Navigation -->

</header>
<!-- /Header -->