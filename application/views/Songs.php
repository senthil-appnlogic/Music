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
		<li class="active"><?php if($mode=="add"){ echo 'Add Songs'; }else{ echo 'Edit Songs'; }?></li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Songs<?php if($mode=="add"){?><small><?php echo 'You may Add Songs details here...';?></small><?php } else{?><small> <?php echo 'You may Edit Songs details here...';?></small><?php }?></small></h1>
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
			    <h4 class="panel-title"><?php if($mode=="add"){ echo 'Add Songs'; }else{ echo 'Edit Songs'; }?></h4>
			</div>
			<div class="panel-body">
			    <form <?php if($mode=="add") { ?> action="<?php echo site_url('MusicCtr/Songs/add');?>" <?php } else { ?> action="<?php echo site_url('MusicCtr/Songs/edit'.$SongsEdit[0]['ID']);?>" <?php } ?> method="post">
				<div class="well">
				    <div class="row">
					 <div class="form-group col-sm-4">
					    <label>Song Name</label>
						<input class="form-control input-sm" name="SongName" type="text" placeholder="Song Name">
					  </div>
					 <div class="form-group col-sm-4">
					    <label>Music Director</label>
					    <select class="form-control selectpicker" name="SongMusicDirector" data-style="btn-white btn-sm">
						<option  value="">Select</option>
					      <?php foreach($musicdirector as $row){?>
					      <option value="<?php echo $row['MUSICDIRECTOR_NAME']?>"><?php echo $row['MUSICDIRECTOR_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>Lyricist</label>
					    <select class="form-control selectpicker" name="SongLyricist" data-style="btn-white btn-sm">
						<option  value="">Select</option>
						<?php foreach($lyricist as $row){?>
						<option value="<?php echo $row['LYRICIST_NAME']?>"><?php echo $row['LYRICIST_NAME']?></option>
						<?php } ?>
					    </select>
					  </div>
				    </div>
				    <div class="row">
					 <div class="form-group col-sm-4">
					    <label>Singer</label>
					    <select class="form-control selectpicker" name="SongSinger" data-style="btn-white btn-sm" >
						<option  value="">Select</option>
						<?php foreach($singer as $row){?>
						<option value="<?php echo $row['SINGER_NAME']?>"><?php echo $row['SINGER_NAME']?></option>
						<?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>Movie</label>
					    <select class="form-control selectpicker" name="SongMovie" data-style="btn-white btn-sm">
						<option  value="">Select</option>
					      <?php foreach($movie as $row){?>
					      <option value="<?php echo $row['MOVIE_NAME']?>"><?php echo $row['MOVIE_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>Actor</label>
					    <select class="form-control selectpicker" name="SongActor" data-style="btn-white btn-sm">
						<option  value="">Select</option>
					      <?php foreach($actor as $row){?>
					      <option value="<?php echo $row['ACTOR_NAME']?>"><?php echo $row['ACTOR_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
				    </div>
				    <div class="row">
					 <div class="form-group col-sm-4 selectpicker">
					    <label>Actress</label>
					    <select class="form-control selectpicker" name="SongActress" data-style="btn-white btn-sm">
						<option  value="">Select</option>
					      <?php foreach($actress as $row){?>
					      <option value="<?php echo $row['ACTRESS_NAME']?>"><?php echo $row['ACTRESS_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>Director</label>
					    <select class="form-control selectpicker" name="SongDirector" data-style="btn-white btn-sm">
						<option  value="">Select</option>
						<?php foreach($director as $row){?>
					      <option value="<?php echo $row['DIRECTOR_NAME']?>"><?php echo $row['DIRECTOR_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>Production</label>
					    <select class="form-control selectpicker" name="SongProduction" data-style="btn-white btn-sm">
					    <option  value="">Select</option>
					      <?php foreach($production as $row){?>
					      <option value="<?php echo $row['PRODUCTION_NAME']?>"><?php echo $row['PRODUCTION_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
				    </div>
				    <div class="row">
					 <div class="form-group col-sm-4 selectpicker">
					    <label>Category</label>
					    <select class="form-control selectpicker" name="SongCategory" data-style="btn-white btn-sm">
						<option  value="">Select</option>
					      <?php foreach($category as $row){?>
					      <option value="<?php echo $row['CATEGORY_NAME']?>"><?php echo $row['CATEGORY_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
					 <div class="form-group col-sm-4">
					    <label>Language</label>
					    <select class="form-control selectpicker" name="SongLanguage" data-style="btn-white btn-sm">
						<option  value="">Select</option>
						<?php foreach($language as $row){?>
					      <option value="<?php echo $row['LANGUAGE_NAME']?>"><?php echo $row['LANGUAGE_NAME']?></option>
					      <?php } ?>
					    </select>
					  </div>
				    </div>
				</div>
				<div class="pager form-group">
				    <div class="col-md-12 control-label">
					<input type="hidden" name="proceed" value="<?php if($mode=="add"){ echo 'add'; }else{ echo 'update'; } ?>" />
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