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
                                <h1><a href="invoicepage.php" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back </a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Invoice</a></li>
                                    <li class="active">Edit Invoice</li>
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
                            <div class="card-header bg-success">
                                <strong>INVOICE DETAIL</strong>
                            </div>

                            <div class="card-body card-block">

                                <div class="form-group">
                                    <label class=" form-control-label">User Name</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                        <input tpye="text" id="txt_username" name="txt_username" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. Abc</small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Total</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input type="number" id="txt_total" name="txt_total" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 999</small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Discount</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input type="number" id="txt_discount" name="txt_discount" class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 99</small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Status</label>
                                    <div class="col-12 col-md-12">
                                            <select name="cbx_status" id="cbx_status" class="form-control">
                                                <option value="0">Paid</option>
                                                <option value="1">Not paid</option>
                                            </select>
                                        </div>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" name="btn_update" class="btn btn-success" style= "margin-left: 10px">
                                        <i class="fa fa-dot-circle-o"></i> Update
                                    </button>
                                    <button type="reset" name="btn_reset" class="btn btn-danger" style= "margin-left: 10px">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
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
