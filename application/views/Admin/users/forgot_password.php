 
<html>
 
<head>
 
<title>forgot Password</title>
 
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
	<form class="login-form" action="<?php echo base_url(); ?>Admin/forgotpassword" method="post" id="login_form">
		<h3>Forget Password ?</h3>
                <?php if(isset($_GET['msg'])) { ?>
                <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>This Email ID Not Register.</div>
                <?php  }?>
		 <p>
			 Enter your e-mail address below to reset your password.
		</p>
                <div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
		</div>
		<div class="form-actions">
                    <a href="<?php echo base_url(); ?>Admin/login"><button type="button" id="back-btn" class="btn btn-default">Back</button></a>
			<button type="submit" class="btn btn-success uppercase pull-right" name="forgotpassword">Submit</button>
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
   
   email: {
		 validators: {
			
		 notEmpty: {
		 message: 'The email address is required and can\'t be empty'
		 
           },
		   emailAddress: {
		   message: 'The input is not a valid email address'
        },
      }
    }
    
 }

});



});
</script>
<!-- END BODY -->
</html>