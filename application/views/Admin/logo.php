
<link href="<?php echo base_url() ?>/assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo base_url() ?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>

<div class="page-content-wrapper">
    <div class="page-content">

        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Logo<small>Add New Logo</small></h1>
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
                <a href="<?php echo base_url() ?>Admin/settings">settings</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->



        <div class="row">

            <div class="profile-content1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light">
                            <form action="<?php echo base_url() ?>Admin/logo" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
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

                           <input type="submit" value="submit" name="submit_logo" class="btn green-haze">
                                    <a href="<?php echo base_url() ?>Admin/index" class="btn default">Cancel </a>

                                </div>
                            </form>

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
