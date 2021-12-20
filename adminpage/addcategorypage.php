<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include "layouts/headeradmin.php" ?>
</head>
<body>
    <!-- Left Panel -->
        <?php include "layouts/menuadmin.php" ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include "layouts/menutopadmin.php" ?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><a href="categorypage.php" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back </a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li class="active">Add Category</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <strong>NEW CATEGORY</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="CategoryController.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="txt_catename" class=" form-control-label">Category Name</label></div>
                                        <div class="col-12 col-md-9"><small class="form-text text-muted">You must fill this field</small><input type="text" id="txt_catename" name="txt_catename" placeholder="Name" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="cbx_rootcate" class=" form-control-label">Root Category</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="cbx_rootcate" id="cbx_rootcate" class="form-control">
                                                <option value="0"> -- </option>
                                                <option value="1">Fashion & Beauty</option>
                                                <option value="2">Kid & Babies clothes</option>
                                                <option value="3">Men & Woman clothes</option>
                                                <option value="4">Gadgets</option>
                                                <option value="5">Accessories</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="cbx_status" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="cbx_status" id="cbx_status" class="form-control">
                                                <option value="0">In use</option>
                                                <option value="1">Not in use</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <button type="submit" name="btn_create" class="btn btn-success" style= "margin-left: 10px">
                                            <i class="fa fa-dot-circle-o"></i> Create
                                        </button>
                                        <button type="reset" name="btn_reset" class="btn btn-danger" style= "margin-left: 10px">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>


    <?php include "layouts/Footeradmin.php" ?>
</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
    <?php include "layouts/scriptadmin.php" ?>


</body>
</html>
