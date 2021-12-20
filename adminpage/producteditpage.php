pe html>
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
                                <a href="productpage.php" class="btn btn-success"><i class="fa fa-undo"></i>Back</a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li class="active">Edit Product</li>
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
                                <strong class="card-title text-light">Product Information</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_productname" name="txt_productname"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ID-input" class=" form-control-label">ID Input</label></div>
                                        <div class="col-12 col-md-9"><input type="ID" id="txt_email" name="txt_ID"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Quantify</label></div>
                                        <div class="col-12 col-md-9"><input type="quantify" id="txt_password" name="txt_quantify"  class="form-control"></div>
                                    </div>
                                   
                                   
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Category</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="cbx_category" id="selectSm" class="form-control-sm form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Shirt</option>
                                                <option value="2">Trousers</option>
                                           
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Sex</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="inline-radio1" name="rdg_sex" value="option1" class="form-check-input">Male
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="inline-radio2" name="rdg_sex" value="option2" style="margin-left: 20px" class="form-check-input">Female
                                                </label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Photo</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-avatar" name="file-photo" class="form-control-file"></div>
                                    </div>
                                     <div class="row form-group">
                                         <button type="submit" name="btn_update" class="btn btn-primary" style="margin-left:10px">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                                         <button type="reset" name="btn_reset" class="btn btn-danger" style="margin-left:10px">
                                    <i class="fa fa-ban"></i> Reset
                                     </div>
                                </button>
                                </form>
                            </div>
                            <div class="card-footer">
                                
                            </div>
                        </div>
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
