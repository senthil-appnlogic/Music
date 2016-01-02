<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
		
<!-- begin #content -->
    <div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Album</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Album View</h1>
    <!-- end page-header -->
    
    <!-- begin row -->
        <div class="row">
        <!-- begin col-12 -->
            <div class="col-md-12">
            <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    <h4 class="panel-title">Album View</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            <a class="btn btn-primary btn-sm " href="<?php echo site_url('MusicCtr/Album_Add/add'); ?>">
                                <i class="fa fa-plus fa-1x"></i>
                                <span class="f-s-14 f-w-500">Add </span>
                            </a>
                        </p>
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($musicAlbum as $row) { ?> 
                                    <tr>
                                        <td><?php echo $row['ALBUM_NAME']; ?></td>
                                        <td><?php echo $row['ALBUM_IMAGE']; ?></td>
                                        <td><a href="<?php echo site_url('MusicCtr/Album_Add/edit'.$row['ID']); ?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
                                            <a href="<?php echo site_url('MusicCtr/Album_Delete/'.$row['ID']); ?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa  fa-trash-o"></i> </a>
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <!-- end panel -->
            </div>
        <!-- end col-12 -->
        </div>
    <!-- end row -->
    </div>
<!-- end #content -->

<!-- begin theme-panel -->
<!-- end theme-panel -->

<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<!-- end page container -->
	
</body>

</html>


