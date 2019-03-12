 
<div class="page-content-wrapper">
    <div class="page-content">

        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Category Form  <small>Add new category</small></h1>
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
                <a href="<?php echo base_url(); ?>Admin/category">Category</a>

            </li>

        </ul>

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-tasks"></i>Add Category
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
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo base_url(); ?>Admin/category" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                                    <label class="control-label col-md-3"> Name <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="name" data-required="1" class="form-control"placeholder="Your Category Name"/>
                                    </div>
                                </div>
                                   
                              <div class="form-group last">
                                    <label class="control-label col-md-3">Description   
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="ckeditor form-control" name="editor" rows="6" data-error-container="#editor2_error"></textarea>
                                        <div id="editor2_error">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3"> Meta Title 
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="title" data-required="1" class="form-control"placeholder="Enter Meta Title"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3"> Meta Description  
                                    </label>
                                    <div class="col-md-4">
                                         
                                        <textarea class="form-control" name="menu_desc">
                                            

                                        </textarea>
                                            
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3"> Meta Keywords
                                    </label>
                                    <div class="col-md-4">
  <input type="text" data-required="1" class="form-control"placeholder="enter Meta Keywords" name="keyword"/>
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
                        <!-- END FORM-->
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
</div>


<script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>/assets/admin/pages/scripts/form-validation.js"></script>

<!-- END PAGE LEVEL STYLES -->
<script>
    jQuery(document).ready(function () {

        FormValidation.init();
    });
</script>


