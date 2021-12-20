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
                                <h1><a href="addpostcategorypage.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Post Category </a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Post Category</li>
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
                                <strong class="card-title">POST CATEGORY LIST</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th><i class="ti-layout-width-full"></i></th>
                                            <th class="serial">Post Category ID</th>
                                            <th>Category Name</th>
                                            <th>Date Create</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" class="switch-input" ></td>
                                            <td class="serial"> 7001 </td>
                                            <td>  <span class="name">Promotion</span> </td>
                                            <td> <span class="product">16/11/2021</span> </td>
                                            <td>
                                                <a href="editpostcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><input type="checkbox" class="switch-input" ></td>
                                            <td class="serial"> 7002 </td>
                                            <td>  <span class="name">Advertising</span> </td>
                                            <td> <span class="product">16/11/2021</span> </td>
                                            <td>
                                                <a href="editpostcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox" class="switch-input" ></td>
                                            <td class="serial"> 7003 </td>
                                            <td>  <span class="name">Tips & Hacks</span> </td>
                                            <td> <span class="product">18/11/2021</span> </td>
                                            <td>
                                                <a href="editpostcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox" class="switch-input" ></td>
                                            <td class="serial"> 7004 </td>
                                            <td>  <span class="name">Instruction</span> </td>
                                            <td> <span class="product">20/11/2021</span> </td>
                                            <td>
                                                <a href="editpostcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox" class="switch-input" ></td>
                                            <td class="serial"> 7005 </td>
                                            <td>  <span class="name">Seeding</span> </td>
                                            <td> <span class="product">20/11/2021</span> </td>
                                            <td>
                                                <a href="editpostcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
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