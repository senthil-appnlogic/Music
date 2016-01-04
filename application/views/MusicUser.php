	<div id="content" class="content">
	    <!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">User</a></li>
		<li class="active"><?php if($mode=="add"){ echo 'Add User'; }else{ echo 'Edit User'; }?></li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">User<?php if($mode=="add"){?><small><?php echo 'You may Add Director details here...';?></small><?php } else{?><small> <?php echo 'You may Edit Director details here...';?></small><?php }?></h1>
	    <!-- end page-header -->
	    <!-- begin row -->
	    <div class="row">
		<!-- begin col-10 -->
		<div class="col-md-12">
		    <!-- begin panel -->
		    <div class="panel panel-inverse">
			<div class="panel-heading">
			    <div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			    </div>
			    <h4 class="panel-title"><?php if($mode=="add"){ echo 'Add User'; }else{ echo 'Edit User'; }?></h4>
			</div>
			<div class="panel-body">
			    <form <?php if($mode=="add") { ?> action="<?php echo site_url('MusicCtr/MusicUser/add');?>" <?php } else { ?> action="<?php echo site_url('MusicCtr/MusicUser/edit'.$MusicUserEdit[0]['ID']);?>" <?php } ?> class="form-horizontal" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">                   
				<div class="well">
				<legend class="pullmenu">User Details</legend>
				<div class="row">
				    <div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">Name</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="UserName" value="<?php if($mode=="add"){ }else{ echo $MusicUserEdit[0]['USERNAME']; } ?>" type="text" placeholder="User Name">
					    </div>
					</div>
				    </div>
				    <div class="col-md-8">
					<label class="col-md-4">Active?</label>
					    <div class="col-md-12">
						<input type="checkbox" name="check">
						<input name="active_yn" id="active_yn" type="hidden" value="">
					    </div>
				    </div>
                                    <div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">Email</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="UserEmail" value="<?php if($mode=="add"){ }else{ echo $MusicUserEdit[0]['EMAIL']; } ?>" type="Email" placeholder="User Email">
					    </div>
					</div>
				    </div>
                                    <div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">Password</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="UserPassword" value="<?php if($mode=="add"){ }else{ echo $MusicUserEdit[0]['PASSWORD']; } ?>" type="text" placeholder="User Password">
					    </div>
					</div>
				    </div>
                                </div>
				                                        
				<div class="pager form-group">
				    <div class="col-md-7 control-label">
					<input type="hidden" name="proceed" value="<?php if($mode=="add"){ echo 'add'; }else{ echo 'update'; } ?>" />
					<button type="submit" class="btn btn-sm btn-success" name="submit_form" id="submit_but" value="Save">Save</button>
					<button class="btn btn-sm btn-info" id="clear_data"  type="button">Reset</button>
					<button class="btn btn-sm btn-danger" onclick="window.history.back();" type="button">Cancel</button>
				    </div>
				</div>
				</div>
			    </form>
			</div>
		    </div>
		</div>
	    </div>
	    <!-- begin scroll to top btn -->
	    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	    <!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
    </body>
</html>
