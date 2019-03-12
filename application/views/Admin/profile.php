
<link href="<?php echo base_url() ?>/assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo base_url() ?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>

<div class="page-content-wrapper">
    <div class="page-content">

        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>User Account <small>user account page</small></h1>
            </div>

        </div>
        <!-- END PAGE HEAD -->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo base_url() ?>Admin/index">Home</a>
                <i class="fa fa-circle"></i>
            </li>

            <li>
                <a href="<?php echo base_url() ?>Admin/profile">User Account</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <?php foreach ($user_profile as $user)
            
            ?>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar" style="width:250px;">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">

                            <?php if (($user->photo) == "") { ?>
                                <img src="<?php echo base_url() ?>/images/admin/profile/user.png" class="img-responsive" alt="">
                            <?php } else { ?>
                                <img src="<?php echo base_url() ?>/images/admin/profile/<?php echo $user->photo; ?>" class="img-responsive" alt="">
                            <?php } ?>
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php echo $user->user_name; ?>
                            </div>
                            <div class="profile-usertitle-job">
                                <?php echo $user->role; ?>
                            </div>
                        </div><br>


                    </div>

                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            <form action="<?php echo base_url() ?>Admin/profile" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                                <div class="form-body">

                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button>
                                                        You have some form errors. Please check below.
                                                    </div>
                                                    <div class="alert alert-success display-hide">
                                                        <button class="close" data-close="alert"></button>
                                                        Your form validation is successful!
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Frist Name <span class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" name="name" data-required="1" class="form-control"placeholder="Your Frist Name" value="<?php echo $user->first_name; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Last Name <span class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" name="lname" data-required="1" class="form-control"placeholder="Your Last Name" value="<?php echo $user->last_name; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">User Name <span class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" name="user_name" data-required="1" class="form-control"placeholder="Your User Name" value="<?php echo $user->user_name; ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Email Address <span class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo $user->email; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Date Of Birth &nbsp;&nbsp;</label>
                                                        <div class="col-md-4">
                                                            <input name="dob" type="date" class="form-control" value="<?php echo $user->dob; ?>"/>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Gender <span class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="radio-list" data-error-container="#form_2_membership_error">                                
                                                                <?php if (($user->gender) == "Male") { ?>
                                                                    <label>
                                                                        <input type="radio" name="gender1" value="Male" checked=""/>
                                                                        Male </label>
                                                                    <label>
                                                                    <?php } else { ?>
                                                                        <label>
                                                                            <input type="radio" name="gender1" value="Male"/>
                                                                            Male </label>
                                                                        <label>
                                                                        <?php } ?>

                                                                        <?php if (($user->gender) == "Female") { ?>
                                                                            <label>
                                                                                <input type="radio" name="gender1" value="Female" checked=""/>
                                                                                Female </label>
                                                                            <label>
                                                                            <?php } else { ?>
                                                                                <label>
                                                                                    <input type="radio" name="gender1" value="Female"/>
                                                                                    Female</label>
                                                                                <label>
                                                                                <?php } ?>


                                                                                </div>
                                                                                <div id="form_2_membership_error">
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3">Contact Number &nbsp;&nbsp;</label>
                                                                                    <div class="col-md-4">
                                                                                        <input name="number" type="number" class="form-control" placeholder="Your Contact Number" value="<?php echo $user->number; ?>" />
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3">Address  

                                                                                    </label>
                                                                                    <div class="col-md-4">
                                                                                        <textarea class="form-control" name="address">
                                                                                            <?php echo $user->address; ?>
                                                                                        </textarea>

                                                                                    </div>
                                                                                </div>







                                                                                </div>
                                                                                <div class="form-actions">
                                                                                    <div class="row">
                                                                                        <div class="col-md-offset-3 col-md-9">

                                                                                            <button type="submit" class="btn green" name="submit">Submit</button>
                                                                                            <button type="button" class="btn default">Cancel</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </form>  
                                                                                </div>
                                                                                <!-- END PERSONAL INFO TAB -->
                                                                                <!-- CHANGE AVATAR TAB -->
                                                                                <div class="tab-pane" id="tab_1_2">

                                                                                    <form action="<?php echo base_url() ?>Admin/profile" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                                                                        <div class="form-group">
                                                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                                                                                </div>
                                                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                                                                </div>
                                                                                                <div>
                                                                                                    <span class="btn default btn-file">
                                                                                                        <span class="fileinput-new">
                                                                                                            Select image </span>
                                                                                                        <span class="fileinput-exists">
                                                                                                            Change </span>
                                                                                                        <input type="file" name="file">

                                                                                                    </span>
                                                                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
                                                                                                        Remove </a>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="margin-top-10">

                                                                                            <input type="submit" value="submit" name="submit_image" class="btn green-haze">
                                                                                            <a href="<?php echo base_url() ?>Admin/index" class="btn default">Cancel </a>
                                                                                            <input type="hidden" name="old_file" value="<?php echo $user->photo ?>">
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <!-- END CHANGE AVATAR TAB -->
                                                                                <!-- CHANGE PASSWORD TAB -->
     <div class="tab-pane" id="tab_1_3">
      <form action="<?php echo base_url()?>Admin/change_password" id="form_sample_2" class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <div class="form-body">
<?php if(isset($_GET['msg'])) { ?>
                <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>The old password aer not match</div>
                <?php  }?>
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                 
                                  
                                <div class="form-group">
                                    <label class="control-label col-md-3">Current Password <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input name="name" type="password" class="form-control" placeholder="Your Current Password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">New Password <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input name="lname" type="password" class="form-control" placeholder="Your New Password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Re-type New Password <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input name="user_name" type="password" class="form-control" placeholder="Your Re-type New Password  " />
                                    </div>
                                </div>
                               
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                         
                                        <button type="submit" class="btn green" name="submit_password">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>   
         
         
     </div>

                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                <!-- END PROFILE CONTENT -->
                                                                                </div>
                                                                                </div>
                                                                                <!-- END PAGE CONTENT-->
                                                                                </div>
                                                                                </div>
                                                                                <!-- END CONTENT -->
                                                                                </div>


                                                                                <script src="<?php echo base_url() ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

                                                                                <script src="<?php echo base_url() ?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
                                                                                <script src="<?php echo base_url() ?>/assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
                                                                                <!-- END PAGE LEVEL SCRIPTS -->
                                                                                <script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
                                                                                <script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/ckeditor/ckeditor.js"></script>
                                                                                <script src="<?php echo base_url(); ?>/assets/admin/pages/scripts/form-validation.js"></script>

                                                                                <script>
                                                                                    jQuery(document).ready(function () {

                                                                                        Profile.init(); // init page demo
                                                                                        FormValidation.init();
                                                                                    });
                                                                                </script>
                                                                                <!-- END JAVASCRIPTS -->
