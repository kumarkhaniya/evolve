 
<html>
 
<head>
 
<title>Wabodryms | Login Options - Lock Screen 1</title>
 
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url() ?>/assets/admin/pages/css/lock.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url() ?>/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>/assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url() ?>/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
<div class="page-lock">
	<div class="page-logo">
		<a class="brand" href="index.html">
<!--		<img src="<?php echo base_url() ?>/assets/admin/layout4/img/logo-big.png" alt="logo"/>-->
		</a>
	</div>
	<div class="page-body">
		<div class="lock-head">
			 Locked
		</div>
            <?php foreach($user_profile as $user) ?>
		<div class="lock-body">
			<div class="pull-left  ">
				<img src="<?php echo base_url(); ?>images/admin/profile/<?php echo $user->photo; ?>" class="lock-avatar">
			</div>
			<form class="lock-form pull-left" action="<?php echo base_url()?>Admin/lock" method="post" id="login_form">
                            <?php if(isset($_GET['msg'])) { ?>
                            <div class="alert alert-danger">
                                <strong>Warning!</strong>  password Doesn't Match.
                            </div>
                         <?php }  ?>
				<h4><?php echo $user->user_name; ?></h4>
                                <input type="hidden" name="email" value="<?php echo $user->email; ?>">
				<div class="form-group">
					<input type="password" class="form-control"  name="password"  placeholder="Password" autocomplete="off">
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success uppercase" name="submit">Login</button>
				</div>
			</form>
		</div>
		 
	</div>
	<div class="page-footer-custom">
		 2016 &copy; Wabodryms. Admin Dashboard Template.
	</div>
</div>
 
<script src="<?php echo base_url() ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url() ?>/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
 
<script src="<?php echo base_url() ?>/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>plugins/bootstrapvalidator/bootstrapValidator.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrapvalidator/bootstrapValidator.css"/>
<script type="text/javascript">
$(document).ready(function() {
$('#login_form').bootstrapValidator({
   
 fields: {
   
    
   password: {
		validators: {
		notEmpty: {
		message: 'The password is required and can\'t be empty'
       },
     }
  }
 }

});



});
</script>
<script>
jQuery(document).ready(function() {    
 
Layout.init(); // init current layout
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>