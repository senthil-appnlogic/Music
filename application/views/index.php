<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<style>
    .Franch_Lg {
    color: white;
    font-family: sans-serif;
    font-size: 18px;
    font-weight: bold;
}
</style>
<head>
	<meta charset="utf-8" />
	<?php //echo $error; ?>
	<title>Music| Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url(); ?>application/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/css/animate.min.css" rel="stylesheet" />
	
	<link href="<?php echo base_url(); ?>application/assets/css/style.css" rel="stylesheet" />
	
	<link href="<?php echo base_url(); ?>application/assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image"><img src="<?php echo base_url(); ?>application/assets/img/login-bg/music5.jpg" data-id="login-cover-image" alt="" /></div>
	    <div class="login-cover-bg"></div>
	</div>
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
	    
	    
        <div class="login login-v2" data-pageload-addclass="animated flipInX">
            <!-- begin brand -->
            <div class="login-header">
               
	     
	    </div>
            <!-- end brand -->
            <div class="login-content">
		 <div class="brand">
                    <span class="Franch_Lg"><img class="Franch_log" src="<?php echo base_url(); ?>application/assets/img/4.jpg" data-id="login-cover-image" alt="" />Music Website Admin</span><br><br>
                    <!--<h5>--><span>Sign in to continue admin</span><!--</h5>-->
                </div>
		 <br>
			
                <form action="<?php echo base_url(); ?>MusicCtr" method="POST" class="margin-bottom-0">
                
		    <div class="form-group m-b-20">
                        <input type="text" class="form-control" name="userId" placeholder="User ID" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control" name="password" placeholder="Password" />
                    </div>
                    <div class="checkbox m-b-20">
                        <label>
                            <input type="checkbox" /> Remember Me
                        </label>
                    </div>
                    <div class="login-buttons">
			
                        <button type="submit"  value="yes" name="proceed" class="btn btn-success btn-block Frch_butn">Sign in</button>
                    </div>
		</form>
            </div>
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>application/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>application/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>application/assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>application/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>application/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url(); ?>application/assets/js/login-v2.demo.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function()
		{
			App.init();
			LoginV2.init();
		});
	</script>
	
</body>

</html>

