<!DOCTYPE html>
<html>
<head>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url(); ?>/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url(); ?>/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>/assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url(); ?>/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
  <script type="text/javascript">
    var uri = window.location.toString();
    if (uri.indexOf("?") > 0) {
        var clean_uri = uri.substring(0, uri.indexOf("?"));
        window.history.replaceState({}, document.title, clean_uri);
    }
</script>
</head>
<body class="login">
    <div class="menu-toggler sidebar-toggler">
</div>
 
  <div class="logo">
	<a href="index.html">
<!--	<img src="<?php echo base_url(); ?>/assets/admin/layout4/img/logo-big.png" alt=""/>-->
	</a>
</div>
    
  <!-- /.login-logo -->
  <div class="content">
     

    <form action="<?php echo base_url(); ?>Admin/login" id="login_form" method="post" class="login-form">
        <center><img src="<?php echo base_url(); ?>//images/admin/logo/logo.png" class="logo-big" alt="" style="
    width: 50%;
    margin-bottom: 25px;
  "></center>
        <?php if(isset($_GET['msg'])) { ?>
    <div class="alert alert-danger">
  <strong>Warning!</strong> Email Or password Doesn't Match.
</div>
          <?php }  ?>
      <div class="form-group">
          <input type="email" name="email" class="form-control form-control-solid placeholder-no-fix" placeholder="Email" autocomplete="off">
        
      </div>
      <div class="form-group">
          <input type="password" class="form-control form-control-solid placeholder-no-fix"  name="password" class="form-control" placeholder="Password" autocomplete="off">
         
      </div>
      <div class="form-actions">
	         <button type="submit" name="submit" class="btn btn-success uppercase">Login</button>
			<label class="rememberme check">
			

		</div>
        <div class="create-account">
			<p>
                <a href="<?php echo base_url(); ?>Admin/forgotpassword" id="register-btn" class="uppercase">Forgot Password?</a>
			</p>
		</div>
    </form>
    
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
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
    },
   password: {
		validators: {
		notEmpty: {
		message: 'The password is required and can\'t be empty'
       },
     }
  },
 }

});



});
</script>



</body>
</html>
