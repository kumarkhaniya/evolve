 
<div class="page-content-wrapper">
    <div class="page-content">

        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Admin User <small>Add New Sab Users</small></h1>
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
                <a href="<?php echo base_url(); ?>Admin/allusers">Admin User</a>

            </li>

        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>Admin List
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
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">

                                        <a href="<?php echo base_url(); ?>admin/admin_add_user" class="btn green">Add New <i class="fa fa-plus"></i></a>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Mobile No.
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Role
                                    </th>
                                    <th>
                                        Action
                                    </th>



                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $i = 0;
                                $count = count($users_data);
                                if ($count) {
                                    foreach ($users_data as $user_data) {
                                        $i+=count($user_data);
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $user_data->user_name; ?></td>
                                            <td><?php echo $user_data->number; ?></td>
                                            <td><?php echo $user_data->email; ?></td>
                                            <td><?php echo $user_data->role; ?></td>
                                            <td> 



                                                <div class="actions">
                                                    <?php if (($user_data->status) == 1) { ?>

                                                        <a class="btn btn-circle btn-icon-only blue" href="<?php echo base_url(); ?>admin/admin_add_user?status=0&id=<?php echo $user_data->id; ?>">
                                                            <i class="fa fa-plus" title="Active" aria-hidden="true"></i>
                                                        </a>

                                                        <?php } else { ?>
<a class="btn btn-circle btn-icon-only blue" href="<?php echo base_url(); ?>admin/admin_add_user?status=1&id=<?php echo $user_data->id; ?>">
                                                            <i class="fa fa-minus" title="Deactive" aria-hidden="true"></i>
                                                        </a>

                                                    <?php } ?>




                                                    <?php if (($user_data->role) == 'Main Admin') {
                                                        ?>
                                                    <?php } else { ?>
                                                        <a class="btn btn-circle btn-icon-only red" href="<?php echo base_url(); ?>Admin/admin_add_user?delete=page&id=<?php echo $user_data->id; ?>">
                                                            <i class="icon-trash"></i>
                                                        </a>
                                                    <?php } ?>



                                                </div>


                                            </td>

                                            </div>   
                                        </tr>


                                    <?php }
                                } ?>


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>
</div>




<!-- END CONTENT -->
</div>


<script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>/assets/admin/pages/scripts/table-editable.js"></script>
<script>
    jQuery(document).ready(function () {
        
        TableEditable.init();
    });
</script>