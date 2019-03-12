 
<?php

 //$link = mysqli_connect("localhost", "root", "", "evolvele_evolve");   
 $link = mysqli_connect("localhost", "evolvele_user", "evolve@2016", "evolvele_evolve");   
?>

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
                    <li>Site Map</li>
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
        <div class="col-sm-12 sitemap">
        
            <h3>Evolve Learning Solutions Sitemap :</h3>
            <ul>
            <?php 

                            $menu="main";
                            $sql_menu="select * from menumgr where menuPosition='".$menu."'and status=1";
                            $qry_menu=mysqli_query($link,$sql_menu) or die(mysqli_error());
                            while($row_menu=mysqli_fetch_array($qry_menu)){           


             ?>
                <li><i class="fa fa-play"></i> <a href="<?php echo base_url(); ?><?php echo $row_menu['menuUrl']; ?>"><strong> <?php echo $row_menu['menuName']; ?></strong></a>


                        <?php if($row_menu['menuName']=="The Skill"){?>

                            <ul>
                            <?php
                                    
                                  
                                     $sql_submenu="select * from expertise where status=1";
                                     $qry_submenu=mysqli_query($link,$sql_submenu) or die(mysqli_error());
                                      while($row_menu=mysqli_fetch_array($qry_submenu)){
                                     
                                    
                                    ?>

                                    <li><i class="fa fa-play"></i><a href="<?php echo base_url() ?><?php echo $row_menu['menuUrl']; ?>"><strong> <?php echo $row_menu['menuName']; ?></strong></a></li>
                                    <?php }?>

                            </ul>
                             <?php } else {  ?>
                                 
                                <?php } ?>



                </li> 

                <?php } ?>  
                 
            </ul>   
        </div>
    </div>
</div>
</main>
<style>
.sitemap ul li {line-height:2;}
.sitemap ul li a{font-size:17px;}
</style>
<!-- /Main -->
<br /><br />
 
  