<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.6/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Mar 2015 08:04:57 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Music</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url(); ?>application/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>application/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>application/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>application/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url(); ?>application/assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
        
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Music</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter keyword" />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">5</span>
						</a>
						<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="<?php echo base_url(); ?>application/assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="<?php echo base_url(); ?>application/assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url(); ?>application/assets/img/user-13.jpg" alt="" /> 
							<span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo site_url('MusicCtr/Logout'); ?>">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<!--<div class="image">
							<a href="javascript:;"><img src="<?php echo base_url(); ?>application/assets/img/user-13.jpg" alt="" /></a>
							
						</div>-->
						<div class="info">
							<i class="fa fa-user fa-2x" style="color: white;"></i>
							Admin
							<!--<small>Front end developer</small>-->
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="has-sub active">
						<a href="<?php echo site_url('MusicCtr/MusicUser_View'); ?>">
						    <i class="fa fa-laptop"></i>
						    <span>User</span>
					    </a>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/MusicDirector_View'); ?>">
						    <i class="fa fa-keyboard-o"></i>
						    <span>Music Directors</span>
					    </a>
					</li>
                                        <li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/Singer_View'); ?>">
						    <i class="fa fa-align-left"></i> 
						    <span>Singers</span>
						</a>
					</li>
                                        <li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/Lyricist_View'); ?>">
						    <i class="fa fa-pencil"></i> 
						    <span>Lyricist</span>
						</a>
					</li>
                                        <li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/Actor_View'); ?>">
						    <i class="fa fa-male"></i> 
						    <span>Actor</span>
						</a>
					</li>
                                        <li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/Actress_View'); ?>">
						    <i class="fa fa-female"></i> 
						    <span>Actress</span>
						</a>
					</li>
                                        <li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/Director_View'); ?>">
						    <i class="fa fa-user-secret"></i> 
						    <span>Director</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/Production_View'); ?>">
						    <i class="fa fa-building"></i> 
						    <span>Production</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/Album_View'); ?>">
						    <i class="fa fa-video-camera"></i> 
						    <span>Album</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/Category_View'); ?>">
						    <i class="fa fa-video-camera"></i> 
						    <span>Category</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('MusicCtr/Language_View'); ?>">
						    <i class="fa fa-video-camera"></i> 
						    <span>Language</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <i class="fa fa-music"></i> 
						    <span>songs</span>
						</a>
					</li>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
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
	<script src="<?php echo base_url(); ?>application/assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/js/dashboard.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->	
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url(); ?>application/assets/plugins/DataTables/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/DataTables/js/dataTables.autoFill.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/DataTables/js/dataTables.colReorder.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/DataTables/js/dataTables.colVis.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/DataTables/js/dataTables.fixedHeader.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/DataTables/js/dataTables.keyTable.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/DataTables/js/dataTables.tableTools.js"></script>
        <script src="<?php echo base_url(); ?>application/assets/js/table-manage-tabletools.demo.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/js/table-manage-combine.demo.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/js/table-manage-responsive.demo.min.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/plugins/DataTables/js/dataTables.responsive.js"></script>
	<script src="<?php echo base_url(); ?>application/assets/js/table-manage-default.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
                        //TableManageTableTools.init();
			//TableManageResponsive.init();
			TableManageDefault.init();
		});
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.6/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Mar 2015 08:07:10 GMT -->
</html>

