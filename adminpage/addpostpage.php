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
                                <h1><a href="postpage.php" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back </a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Post</a></li>
                                    <li class="active">New Post</li>
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
                                <strong>POST CREATE</strong>
                            </div>
                            <div class="card-body card-block">
                            <form action="PostController.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="form-group">
                                    <label class=" form-control-label">Title</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bookmark"></i></div>
                                        <input tpye="text" id="txt_title" name="txt_title" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Author</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                        <input tpye="text" id="txt_author" name="txt_author" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Post Category</label>
                                    <div class="col-12 col-md-12">
                                            <select name="cbx_posc" id="cbx_posc" class="form-control">
                                                <option value="0">Promotion</option>
                                                <option value="1">Advertising</option>
                                                <option value="2">Tips & Hacks</option>
                                                <option value="3">Instruction</option>
                                                <option value="4">Seeding</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Content</label>
                                    <div class="input-group">
                                        <div class="col-12">
                                            <textarea name="txa_content" id="txa_content" rows="12" placeholder="Content..." class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="btn_create" class="btn btn-success" style= "margin-left: 10px">
                                        <i class="fa fa-dot-circle-o"></i> Create
                                    </button>
                                    <button type="reset" name="btn_reset" class="btn btn-danger" style= "margin-left: 10px">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
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
