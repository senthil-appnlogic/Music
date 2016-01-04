//<?php
//print_r($musicdirector);
//print_r($director);
//print_r($production);
//print_r($album);
//print_r($actress);
//print_r($actor);
//print_r($album);
//exit;
//?>
	<div id="content" class="content">
	    <!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Songs</a></li>
		<li class="active">Add Songs</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Songs<small> You may add Songs details here...</small></h1>
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
			    <h4 class="panel-title">Add Songs</h4>
			</div>
			<div class="panel-body">
			    <form action="<?php echo site_url('MusicCtr/Songs_Add');?>" method="post">
				<div class="well">
				    <div class="row">
					 <div class="form-group col-sm-4">
					    <label>SONGS</label>
					    <select class="form-control selectpicker" data-style="btn-white btn-sm">
					      
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>MUSIC DIRECTOR</label>
					    <select class="form-control selectpicker" data-style="btn-white btn-sm">
					      <?php foreach($musicdirector as $row){?>
					      <option value="<?php echo $row['MUSICDIRECTOR_NAME']?>"><?php echo $row['MUSICDIRECTOR_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>LYRICST</label>
					    <select class="form-control selectpicker" data-style="btn-white btn-sm">
					      <option>select</option>
					    </select>
					  </div>
				    </div>
				    <div class="row">
					 <div class="form-group col-sm-4">
					    <label>SINGER</label>
					    <select class="form-control selectpicker" data-style="btn-white btn-sm" >
					      <option>select</option>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>MOVIES</label>
					    <select class="form-control selectpicker" data-style="btn-white btn-sm">
					      <?php foreach($album as $row){?>
					      <option value="<?php echo $row['ALBUM_NAME']?>"><?php echo $row['ALBUM_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>ACTOR</label>
					    <select class="form-control selectpicker" data-style="btn-white btn-sm">
					      <?php foreach($actor as $row){?>
					      <option value="<?php echo $row['ACTOR_NAME']?>"><?php echo $row['ACTOR_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
				    </div>
				    <div class="row">
					 <div class="form-group col-sm-4 selectpicker">
					    <label>ACTRESS</label>
					    <select class="form-control selectpicker" data-style="btn-white btn-sm">
					      <?php foreach($actress as $row){?>
					      <option value="<?php echo $row['ACTRESS_NAME']?>"><?php echo $row['ACTRESS_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>DIRECTOR</label>
					    <select class="form-control selectpicker" data-style="btn-white btn-sm">
						<?php foreach($director as $row){?>
					      <option value="<?php echo $row['DIRECTOR_NAME']?>"><?php echo $row['DIRECTOR_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>PRODUCTION</label>
					    <select class="form-control selectpicker" data-style="btn-white btn-sm">
					      <?php foreach($production as $row){?>
					      <option value="<?php echo $row['PRODUCTION_NAME']?>"><?php echo $row['PRODUCTION_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
				    </div>
				</div>
				<div class="pager form-group">
				    <div class="col-md-12 control-label">
					<button type="submit" class="btn btn-sm btn-success" name="submit_form" id="submit_but" value="Save">Save</button>
					<button class="btn btn-sm btn-info" id="clear_data"  type="button">Reset</button>
					<button class="btn btn-sm btn-danger" type="button">Cancel</button>
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