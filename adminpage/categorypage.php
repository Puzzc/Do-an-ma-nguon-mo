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
                                <h1><a href="addcategorypage.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category </a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Category</li>
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
                                <strong class="card-title">CATEGORY LIST</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">Category ID</th>
                                            <th>Root Category</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial"> #5550 </td>
                                            <td>  <span class="name">Men & Woman clothes</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td>
                                                <span class="badge badge-complete">In use</span>
                                            </td>
                                            <td>
                                                <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial"> #5551 </td>
                                            <td>  <span class="name">Men & Woman clothes</span> </td>
                                            <td> <span class="product">Pants</span> </td>
                                            <td>
                                                <span class="badge badge-complete">In use</span>
                                            </td>
                                            <td>
                                                <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial"> #5552 </td>
                                            <td>  <span class="name">  </span> </td>
                                            <td> <span class="product">Sales</span> </td>
                                            <td>
                                                <span class="badge badge-complete">In use</span>
                                            </td>
                                            <td>
                                                <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial"> #5553 </td>
                                            <td>  <span class="name">Kid & Babies clothes</span> </td>
                                            <td> <span class="product">Baby Children's Jacket</span> </td>
                                            <td>
                                                <span class="badge badge-pending">Not in use</span>
                                            </td>
                                            <td>
                                            <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial"> #5554 </td>
                                            <td>  <span class="name">Kid & Babies clothes</span> </td>
                                            <td> <span class="product">Baby Romper</span> </td>
                                            <td>
                                                <span class="badge badge-complete">In use</span>
                                            </td>
                                            <td>
                                            <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial"> #5555 </td>
                                            <td>  <span class="name">Kid & Babies clothes</span> </td>
                                            <td> <span class="product">Baby Girls' Dress</span> </td>
                                            <td>
                                                <span class="badge badge-complete">In use</span>
                                            </td>
                                            <td>
                                            <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial"> #5556 </td>
                                            <td>  <span class="name">Accessories</span> </td>
                                            <td> <span class="product">Ear Ring</span> </td>
                                            <td>
                                                <span class="badge badge-complete">In use</span>
                                            </td>
                                            <td>
                                                <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial"> #5557 </td>
                                            <td>  <span class="name">Accessories</span> </td>
                                            <td> <span class="product">Necklace</span> </td>
                                            <td>
                                                <span class="badge badge-complete">In use</span>
                                            </td>
                                            <td>
                                                <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
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