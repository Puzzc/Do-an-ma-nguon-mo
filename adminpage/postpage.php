<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include "layouts/headeradmin.php" ?>

    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">


</head>
<body>
    <!-- Left Panel -->
    <?php include "layouts/menuadmin.php" ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include "layouts/menutopadmin.php" ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><a href="addpostpage.php" class="btn btn-primary"><i class="fa fa-plus"></i> New Post </a>
                                <a href="editpostpage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit Post</a>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete Post</button></h1>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Post</li>
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

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">POST INFORMATION</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Post Number</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Date Posted</th>
                                            <th>Post Category</th>
                                            <th>Content</th>
                                            <th><i class="ti-layout-width-full"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>How to wash cotton cloth</td>
                                        <td>admin</td>
                                        <td>20/11/2021</td>
                                        <td>Instruction</td>
                                        <td>To wash the cotton cloth first thing you need is ...</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td>Nivira is better than you thing!</td>
                                        <td>admin</td>
                                        <td>20/11/2021</td>
                                        <td>Seeding</td>
                                        <td>Low price, easy to use, many type to choose...</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>Newest Winter 2021 Collection</td>
                                        <td>admin</td>
                                        <td>21/11/2021</td>
                                        <td>Advertising</td>
                                        <td>This winter designer W.J give us some looks about ...</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>004</td>
                                        <td>5 ways to make your old clothes look trending</td>
                                        <td>admin</td>
                                        <td>21/11/2021</td>
                                        <td>Tips & Hacks</td>
                                        <td>Your have a lots of old stuff but don't want to throw away...</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>005</td>
                                        <td>Black Fridays sales is staring now!</td>
                                        <td>admin</td>
                                        <td>22/11/2021</td>
                                        <td>Promotion</td>
                                        <td>From 18/11/2021 to 1/12/2021 we will bring you ...</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>006</td>
                                        <td>Trending fashion winter 2021</td>
                                        <td>admin</td>
                                        <td>22/11/2021</td>
                                        <td>Seeding</td>
                                        <td>This winter the look is so different...</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    </tbody>
                                </table>
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
    <?php include "layouts/scriptadmindatatable.php" ?>

</body>
</html>
