<div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Widget settings form goes here
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn blue">Save changes</button>
                                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE HEAD -->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>News</h1>
                        </div>
                         
                    </div>
                    <!-- END PAGE HEAD -->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                         
                        
                        <li>
                            <a href="<?php echo base_url(); ?>Admin/news">News</a>
                        </li>
                    </ul>
                     
        
        
             
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>News List
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

                                        <a href="<?php echo base_url(); ?>Admin/news_add" class="btn green">Add New <i class="fa fa-plus"></i></a>


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
                                        Name
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                      
                                    <th>
                                        Action
                                    </th>



                                </tr>
                            </thead>
                      <tbody>

                                <?php
                                $i = 0;
                                $count = count($image);
                                if ($count) {
                                    foreach ($image as $image) {
                                        $i+=count($image);
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $image->name; ?></td>
                                             
                                            <td><img src="<?php echo base_url(); ?>images/admin/news/<?php echo $image->image; ?>" height="50px" width="50px"></td>
                                             <td><?php echo $image->date; ?></td>
                                            <td> 



                                                <div class="actions">
                                                    <?php if (($image->status) == 1) { ?>

                                                        <a class="btn btn-circle btn-icon-only blue" href="<?php echo base_url(); ?>Admin/news?status=0&id=<?php echo $image->id; ?>">
                                                            <i class="fa fa-plus" title="Active" aria-hidden="true"></i>
                                                        </a>

                                                        <?php } else { ?>
<a class="btn btn-circle btn-icon-only blue" href="<?php echo base_url(); ?>Admin/news?status=1&id=<?php echo $image->id; ?>">
                                                            <i class="fa fa-minus" title="Deactive" aria-hidden="true"></i>
                                                        </a>

                                                    <?php } ?>




                                                     
                                                        <a class="btn btn-circle btn-icon-only green " href="<?php echo base_url(); ?>Admin/news?edit=page&id=<?php echo $image->id; ?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    <a class="btn btn-circle btn-icon-only red" href="<?php echo base_url(); ?>Admin/news?delete=page&id=<?php echo $image->id; ?>">
                                                            <i class="icon-trash"></i>
                                                        </a>
                                                    



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
                                     
   
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
   
   <script src="<?php echo base_url(); ?>/assets/admin/pages/scripts/table-editable.js"></script>
<script>
    jQuery(document).ready(function () {
        
        TableEditable.init();
    });
</script>
         
      