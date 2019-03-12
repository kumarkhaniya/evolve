<!DOCTYPE html>
<html lang="en">
<head>
<?php

require_once dirname(dirname(__FILE__)) . '/dbconnection/dbconnection.php';
?>
    <!-- Page title -->
    <title>Evolve Learning Solutions</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/images/logo.png">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/theme.css">

    <!-- TODO: Predefined Schemes (select one of the presented) -->
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-persimmon.css" title="theme-persimmon">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-atomic-tangerine.css" title="theme-atomic-tangerine">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-yellow-sea.css" title="theme-yellow-sea">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-rio-grande.css" title="theme-rio-grande">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-vida-loca.css" title="theme-vida-loca">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-mountain-meadow.css" title="theme-mountain-meadow">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-java.css" title="theme-java">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-mariner.css" title="theme-mariner">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-medium-purple.css" title="theme-medium-purple">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>/css/theme-lavender-magenta.css" title="theme-lavender-magenta">

</head>
<body>
<!-- Header -->
<header id="home" class="header">

    <!-- Navigation -->
    <nav id="navigation" class="navbar affix">

        <!-- Company Information -->
        <div class="information">
            <div class="container">
                <div class="row">

                    <!-- Feedback -->
					<div class="col-md-2">
						<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'af,da,de,es,fi,fr,ja,nl,pl,ro,ru,sv,tl,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</div>
					
                    <div class="col-md-7">
                        <a ><span class="icon icon_mail_alt"></span> akhilesh@evolvelearningsolutions.com</a>
                        <a ><span class="icon icon_phone"></span> (+91) 971-170-4082 | (+91) 982-580-6005</a>
                        <a href="img/evolve-document.pdf" title="Download Our E-Broucher" download><i class="fa fa-book"></i> Download</a>
                    </div>
                    <!-- /Feedback -->

                    <!-- Social -->
                    <div class="col-md-3">
                        <ul class="social">
			    <li><a href="https://www.facebook.com/evolvelearningsolutions" class="fa fa-fw fa-facebook" target="_blank"></a></li>
                            <li><a href="#" class="fa fa-fw fa-twitter" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/company/evolve-learning-solutions" class="fa fa-fw fa-linkedin" target="_blank"></a></li>
                            <li><a href="#" class="fa fa-fw fa-youtube" target="_blank"></a></li>
                        </ul>
                    </div>
                    <!-- /Social -->

                </div>
            </div>
        </div>
        <!-- /Company Information -->

        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <!-- Navigation Header -->
                    <div class="navbar-header">

                        <!-- Toggle Button -->
                        <button type="button"
                                class="navbar-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#main-menu"
                                aria-expanded="false"
                                aria-controls="main-menu">

                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>
                        <!-- /Toggle Button -->

                    <!------------------------start logo------------------------->
                        <a href="<?php echo base_url(); ?>User/index" class="brand">
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
                     <!------------------------end logo------------------------->
                        <!-- /Brand -->

                    </div>
                    <!-- /Navigation Header -->

                    <!-- Navigation -->
                    <div id="main-menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                             <!------------------------menu logo------------------------->
                            <?php
                            
                            $menu="main";
                            $sql_menu="select * from menumgr where menuPosition='".$menu."'and status=1";
                            $qry_menu=mysqli_query($link,$sql_menu) or die(mysqli_error());
                            while($row_menu=mysqli_fetch_array($qry_menu)){
                            
                            ?>
                            <li class="dropdown">
                                <a  class="dropdown-toggle" href="<?php echo base_url(); ?><?php echo $row_menu['menuUrl']; ?>"><?php echo $row_menu['menuName']; ?></a>
                                 <!------------------------submenu logo------------------------->
                                <?php if($row_menu['menuName']=="Expertise"){?>
                             
                                
                                        <ul class="dropdown-menu">
                                            <?php
                                    
                                     $menu1="6";
                                     $sql_submenu="select * from expertise where status=1";
                                     $qry_submenu=mysqli_query($link,$sql_submenu) or die(mysqli_error());
                                      while($row_menu=mysqli_fetch_array($qry_submenu)){
                                     
                                    
                                    ?>
                      <li> <a href="<?php echo base_url() ?>expertise_info"><?php echo $row_menu['menuName']; ?></a> </li>
                                         <?php }?>
                               </ul>
                                 
                               
                                
                                 
                                <?php  } else { ?>
                                 
                                <?php }?>
                                 
                                
                             </li>  
                            <?php }?>
                              <!------------------------start logo------------------------->
                                 
                                 
                             
                        </ul>
                    </div>
                    

                </div>
            </div>

        </div>
    </nav>
    <!-- /Navigation -->

</header>
<!-- /Header -->