	<div id="content" class="content">
	    <!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Director</a></li>
		<li class="active">Add Director</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Director<small> You may add Director details here...</small></h1>
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
			    <h4 class="panel-title">Add Director</h4>
			</div>
			<div class="panel-body">
			    <form action="<?php echo base_url('MusicCtr/Director_Add'); ?>" class="form-horizontal" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">                   
				<div class="well">
				<legend class="pullmenu">Director Details</legend>
				<div class="row">
				    <div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">Name</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="DirectorName" value="" type="text" placeholder="Director Name">
					    </div>
					</div>
				    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <div class="col-md-12 ImageView AdjustPadding" style="padding-bottom:20px;"  >
                                        <label class="col-md-6">Image</label>
                                            <div class="form-group">
                                                <div class="col-md-12" id="gallery">
                                                    <div class="ImageView AdjustPadding" style="padding-bottom:20px;"  >
                                                    
                                                    <img src="<?php echo site_url('/application/assets/img/no-image.png');?>" class="col-md-12 previewimage gott2 img-responsive" id="dummy1" style="height: 185px; width: 200px;" >
                                                    <input type="file" id="preview" name="DirectorImage" onchange="attachmentss(this);" class="col-md-12">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
				                                        
				<div class="pager form-group">
				    <div class="col-md-7 control-label">
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
  <script>
    function attachmentss($this) {
  
var oFReader = new FileReader();
oFReader.readAsDataURL($this.files[0]);
oFReader.onload = function (oFREvent) {
    
$($this).parents('.ImageView').find('img').attr("src",  oFREvent.target.result);

};
};



</script>