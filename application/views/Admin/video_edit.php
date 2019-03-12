<link href="<?php echo base_url() ?>/assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo base_url() ?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<div class="page-content-wrapper">
    <div class="page-content">

        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Video Edit Form  <small>Add Edit Video</small></h1>
            </div>

        </div>
        <!-- END PAGE HEAD -->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo base_url(); ?>Admin/index">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>Admin/settings">setting</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>Admin/video">Image</a>

            </li>

        </ul>

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-photo"></i>Edit Video
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            
                            <a href="javascript:;" class="reload">
                            </a>
                            <a href="javascript:;" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form1">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo base_url(); ?>Admin/edit_video" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <div class="form-body">

                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <?php foreach ($video as $video)  ?>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Name <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="name" data-required="1" class="form-control"placeholder="Your Image Name" value="<?php echo $video->name; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3"> 
                                    </label>
                                    <div class="col-md-4">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                              <img src="<?php echo base_url(); ?>images/admin/video/<?php echo $video->video; ?>" alt=""/>
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                            </div>
                                            <div>
                                                <span class="btn default btn-file">
                                                    <span class="fileinput-new">
                                                        Select image </span>
                                                    <span class="fileinput-exists">
                                                        Change </span>
                                                    <input type="file" name="file_name">
                                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                               <input type="hidden" name="old_image" value="<?php echo $video->video; ?>">
                                                    

                                                </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
                                                    Remove </a>
                                            </div>
                                        </div> 

                                    </div>
                                </div>
                                 
                                <div class="form-group last">
                                    <label class="control-label col-md-3">Description   
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="ckeditor form-control" name="editor" rows="6" data-error-container="#editor2_error"><?php echo $video->video_desc;  ?></textarea>
                                        <div id="editor2_error">
                                        </div>
                                    </div>
                                </div>





                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">

                                        <button type="submit" class="btn green" name="submit_image">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
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