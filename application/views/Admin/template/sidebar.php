
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">

            <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                
<!------------------------------------- Dashboard menu start-----------------------------  -->
                <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/admin/index')) { ?>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/index">
                            <i  class="icon-home"></i> <span class="title">Dashboard</span>
                        </a>
                    </li>
                <?php } else { ?>
                     
                    <li>
                        <a href="<?php echo base_url(); ?>admin/index">
                            <i  class="icon-home"></i> <span class="title">Dashboard</span>
                        </a>
                </li>
                <?php }?>
     <!------------------------------------- Subadmin menu start-----------------------------  -->
                 <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/admin/admin_user')) { ?>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/admin_user">
                            <i class="fa fa-male"></i> <span class="title">Admin Users</span>
                        </a>
                    </li>
                <?php } elseif((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/admin/admin_add_user')) { ?>
                     
                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/admin_user">
                            <i class="fa fa-male"></i> <span class="title">Admin Users</span>
                        </a>
                </li>
                <?php }else{?>
                
                <li>
                        <a href="<?php echo base_url(); ?>admin/admin_user">
                            <i class="fa fa-male"></i> <span class="title">Admin Users</span>
                        </a>
                </li>
                
                
                <?php }?>


       <!------------------------------------- profile start-----------------------------  -->          
                <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/profile')) { ?>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>Admin/profile">
                            <i  class="icon-user"></i> <span class="title">Profile</span>
                        </a>
                    </li>
                <?php } else { ?>
                     
                    <li>
                        <a href="<?php echo base_url(); ?>Admin/profile">
                            <i  class="icon-user"></i> <span class="title">Profile</span>
                        </a>
                </li>
                <?php }?>
                
                <!------------------------------------- setting start-----------------------------  -->
                    <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/settings')) { ?>

                     <li class="active open">
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">settings</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                                            
                                            <li class="active">
							<a href="<?php echo base_url(); ?>Admin/settings">
							<i class="fa fa-meh-o"></i>
							Logo</a>
						</li>
                                             
                                            
                                             
                                                <li>
							<a href="<?php echo base_url(); ?>Admin/Image">
							<i class="fa fa-file-image-o"></i>
							Image</a>
						</li>
                                                <li>
							<a href="<?php echo base_url(); ?>Admin/video">
							<i class="fa fa-video-camera"></i>
							Video</a>
						</li>
                                                <li>
							<a href="<?php echo base_url(); ?>Admin/silder">
							<i class="fa fa-file-image-o"></i>
							Slider</a>
						</li>
						 
						 
						 
						 
					</ul>
				</li>
                <?php } elseif ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/Image')) { ?>
                     
                                      <li class="active open">
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">settings</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                                            
                                            <li >
							<a href="<?php echo base_url(); ?>Admin/settings">
							<i class="fa fa-meh-o"></i>
							Logo</a>
						</li>
                                             
                                            
                                             
                                                <li class="active">
							<a href="<?php echo base_url(); ?>Admin/Image">
							<i class="fa fa-file-image-o"></i>
							Image</a>
						</li>
                                                <li>
							<a href="<?php echo base_url(); ?>Admin/video">
							<i class="fa fa-video-camera"></i>
							Video</a>
						</li>
                                                <li>
							<a href="<?php echo base_url(); ?>Admin/silder">
							<i class="fa fa-file-image-o"></i>
							Slider</a>
						</li>
						 
						 
						 
						 
					</ul>
				</li>        
                <?php }elseif ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/video')){?>
                                <li class="active open">
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">settings</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                                            
                                            <li >
							<a href="<?php echo base_url(); ?>Admin/settings">
							<i class="fa fa-meh-o"></i>
							Logo</a>
						</li>
                                             
                                            
                                             
                                                <li >
							<a href="<?php echo base_url(); ?>Admin/Image">
							<i class="fa fa-file-image-o"></i>
							Image</a>
						</li>
                                                <li class="active">
							<a href="<?php echo base_url(); ?>Admin/video">
							<i class="fa fa-video-camera"></i>
							Video</a>
						</li>
                                                <li>
							<a href="<?php echo base_url(); ?>Admin/silder">
							<i class="fa fa-file-image-o"></i>
							Slider</a>
						</li>
						 
						 
						 
						 
					</ul>
				</li>  
                              
                <?php }elseif ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/silder')){?>
                             <li class="active open">
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">settings</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                                            
                                            <li >
							<a href="<?php echo base_url(); ?>Admin/settings">
							<i class="fa fa-meh-o"></i>
							Logo</a>
						</li>
                                             
                                            
                                             
                                                <li >
							<a href="<?php echo base_url(); ?>Admin/Image">
							<i class="fa fa-file-image-o"></i>
							Image</a>
						</li>
                                                <li >
							<a href="<?php echo base_url(); ?>Admin/video">
							<i class="fa fa-video-camera"></i>
							Video</a>
						</li>
                                                <li class="active">
							<a href="<?php echo base_url(); ?>Admin/silder">
							<i class="fa fa-file-image-o"></i>
							Slider</a>
						</li>
						 
						 
						 
						 
					</ul>
				</li>  
                <?php }else{?>
                  <li class="">
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">settings</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                                            
                                            <li class="">
							<a href="<?php echo base_url(); ?>Admin/settings">
							<i class="fa fa-meh-o"></i>
							Logo</a>
						</li>
                                             
                                            
                                             
                                                <li>
							<a href="<?php echo base_url(); ?>Admin/Image">
							<i class="fa fa-file-image-o"></i>
							Image</a>
						</li>
                                                <li>
							<a href="<?php echo base_url(); ?>Admin/video">
							<i class="fa fa-video-camera"></i>
							Video</a>
						</li>
                                                <li>
							<a href="<?php echo base_url(); ?>Admin/silder">
							<i class="fa fa-file-image-o"></i>
							Slider</a>
						</li>
						 
						 
						 
						 
					</ul>
				</li>                   
                <?php } ?>
                                
            <!------------------------------------- menu start-----------------------------  -->
                <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/menu')) { ?>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/menu">
                            <i  class="fa fa-tasks"></i> <span class="title">Menu</span>
                        </a>
                    </li>
                <?php } elseif ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/menu_add')) { ?>
                     
                     <li class="active">
                        <a href="<?php echo base_url(); ?>Admin/menu">
                            <i  class="fa fa-tasks"></i> <span class="title">Menu</span>
                        </a>
                    </li>
                    
                <?php } else {?>
                
                    <li>
                        <a href="<?php echo base_url(); ?>Admin/menu">
                            <i  class="fa fa-tasks"></i> <span class="title">Menu</span>
                        </a>
                </li>
                    
                <?php }?>
                <!------------------------------------- category start-----------------------------  -->
                <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/category')) { ?>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/category">
                            <i  class="fa fa-tasks"></i> <span class="title">Category</span>
                        </a>
                    </li>
                <?php } elseif ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/category_add')) { ?>
                     
                     <li class="active">
                        <a href="<?php echo base_url(); ?>Admin/category">
                            <i  class="fa fa-tasks"></i> <span class="title">Category</span>
                        </a>
                    </li>
                    
                <?php } else {?>
                
                    <li>
                        <a href="<?php echo base_url(); ?>Admin/category">
                            <i  class="fa fa-tasks"></i> <span class="title">Category</span>
                        </a>
                </li>
                    
                <?php }?>
                
                <!------------------------------------- News start-----------------------------  -->
                <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/news')) { ?>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/news">
                            <i  class="fa fa-newspaper-o"></i> <span class="title">News</span>
                        </a>
                    </li>
                <?php } elseif ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/news_add')) { ?>
                     
                     <li class="active">
                        <a href="<?php echo base_url(); ?>Admin/news">
                            <i  class="fa fa-newspaper-o"></i> <span class="title">News</span>
                        </a>
                    </li>
                    
                <?php } else {?>
                
                    <li>
                        <a href="<?php echo base_url(); ?>Admin/news">
                            <i  class="fa fa-newspaper-o"></i> <span class="title">News</span>
                        </a>
                </li>
                    
                <?php }?>
                
                     
                
                 <!------------------------------------- Our Expertise start-----------------------------  -->
                <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/Expertise')) { ?>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/Expertise">
                            <i  class="fa fa-flask"></i> <span class="title">Our Expertise</span>
                        </a>
                    </li>
                <?php } elseif ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/Expertise_add')) { ?>
                     
                     <li class="active">
                        <a href="<?php echo base_url(); ?>Admin/Expertise">
                            <i  class="fa fa-flask"></i> <span class="title">Our Expertise</span>
                        </a>
                    </li>
                    
                <?php } else {?>
                
                    <li>
                        <a href="<?php echo base_url(); ?>Admin/Expertise">
                            <i  class="fa fa-flask"></i> <span class="title">Our Expertise</span>
                        </a>
                </li>
                    
                <?php }?>
                
                
                <!------------------------------------- training-programs start-----------------------------  -->
                <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/program')) { ?>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/program">
                            <i  class="fa fa-graduation-cap"></i> <span class="title">Training Programs</span>
                        </a>
                    </li>
                <?php } elseif ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/program_add')) { ?>
                     
                     <li class="active">
                        <a href="<?php echo base_url(); ?>Admin/program">
                            <i  class="fa fa-graduation-cap"></i> <span class="title">Training Programs</span>
                        </a>
                    </li>
                    
                <?php } else {?>
                
                    <li>
                        <a href="<?php echo base_url(); ?>Admin/program">
                            <i  class="fa fa-graduation-cap"></i> <span class="title">Training Programs</span>
                        </a>
                </li>
                    
                <?php }?>
                
                
                
                 <!-------------------------------------Blog -programs start-----------------------------  -->
                <?php if ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/blog')) { ?>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>Admin/blog">
                            <i  class="fa fa-rss"></i> <span class="title">Blog</span>
                        </a>
                    </li>
                <?php } elseif ((("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) == 'http://localhost/evolve/Admin/blog_add')) { ?>
                     
                     <li class="active">
                        <a href="<?php echo base_url(); ?>Admin/blog">
                            <i  class="fa fa-rss"></i> <span class="title">Blog</span>
                        </a>
                    </li>
                    
                <?php } else {?>
                
                    <li>
                        <a href="<?php echo base_url(); ?>Admin/blog">
                            <i  class="fa fa-rss"></i> <span class="title">Blog</span>
                        </a>
                </li>
                    
                <?php }?>
                
                
                
                 
                
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    