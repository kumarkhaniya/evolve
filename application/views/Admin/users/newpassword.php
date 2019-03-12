 
<html>
 
<head>
 
<title>New Password</title>
 
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
 
 
<link href="<?php echo base_url();?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 
<link href="<?php echo base_url();?>/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
 

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
 
<div class="logo">
	 
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?php echo base_url(); ?>Admin/newpassword" method="post" id="login_form">
		<h3>New Password </h3>
                <?php if(isset($_GET['msg'])) { ?>
                <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>This Email ID Not Register.</div>
                <?php  }?>
                <input type="hidden" value="<?php echo $_GET['id']; ?>" name="user_id">
		  
                <div class="form-group">
	<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="New password" name="password"/>
		</div>
                <div class="form-group">
	<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type New Password" name="c_password"/>
		</div>
		<div class="form-actions">
                     
			<button type="submit" class="btn btn-success uppercase" name="newpasword">Submit</button>
		</div>
		 
		 
		 
		 
		 
	</form>
	 
	 
</div>
<div class="copyright">
	 2016 © Wabodryms. Admin Dashboard Template.
</div>
 
<!-- END JAVASCRIPTS -->
</body>
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
		message: 'The New Password is required and can\'t be empty'
       },
     }
  },
  c_password: {
		validators: {
		notEmpty: {
		message: 'The Re-type New password is required and can\'t be empty'
       },
       identical: {
                    field: 'password',
                    message: 'The New password and Re-type password are not the same'
                }
     }
  }
 }

});



});
</script>
<!-- END BODY -->
</html>