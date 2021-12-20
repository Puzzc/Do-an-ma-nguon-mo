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
                                <h1><a href="addinvoicepage.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Invoice </a>
                                <a href="editinvoicepage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button></h1>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Inventory</li>
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
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Invoice ID</th>
                                            <th>Date</th>
                                            <th>User Name</th>
                                            <th>Total</th>
                                            <th>Discount</th>
                                            <th>Status</th>
                                            <th><i class="ti-layout-width-full"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>2021-6-15</td>
                                        <td>Phuc</td>
                                        <td>$320,80</td>
                                        <td>$300,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td>2021-6-15</td>
                                        <td>Garrett Winters</td>
                                        <td>$170,75</td>
                                        <td>$0</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>2021-6-15</td>
                                        <td>Hiep</td>
                                        <td>$86,00</td>
                                        <td>$30,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>004</td>
                                        <td>2021-6-15</td>
                                        <td>Quang</td>
                                        <td>$433,06</td>
                                        <td>$86,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>005</td>
                                        <td>2021-6-15</td>
                                        <td>Quoc</td>
                                        <td>$162,70</td>
                                        <td>$60,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>006</td>
                                        <td>2021-6-16</td>
                                        <td>Ezra</td>
                                        <td>$372,00</td>
                                        <td>$76,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>007</td>
                                        <td>2021-6-16</td>
                                        <td>San</td>
                                        <td>$137,500</td>
                                        <td>0</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>008</td>
                                        <td>2021-6-17</td>
                                        <td>Ron</td>
                                        <td>$327,90</td>
                                        <td>$100,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>009</td>
                                        <td>2021-6-17</td>
                                        <td>Francis</td>
                                        <td>$205,50</td>
                                        <td>$86,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>010</td>
                                        <td>2021-6-18</td>
                                        <td>Edin</td>
                                        <td>$103,60</td>
                                        <td>$0</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>011</td>
                                        <td>2021-6-20</td>
                                        <td>Lui</td>
                                        <td>$90,56</td>
                                        <td>$10,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>012</td>
                                        <td>2021-6-21</td>
                                        <td>Eslee</td>
                                        <td>$342,00</td>
                                        <td>$90,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>013</td>
                                        <td>2021-6-21</td>
                                        <td>Sisco</td>
                                        <td>$470,60</td>
                                        <td>$200,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>014</td>
                                        <td>2021-11-1</td>
                                        <td>Ruu</td>
                                        <td>$313,50</td>
                                        <td>$106,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>015</td>
                                        <td>2021-11-5</td>
                                        <td>Vit</td>
                                        <td>$385,75</td>
                                        <td>$186,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>016</td>
                                        <td>2021-11-8</td>
                                        <td>Lee</td>
                                        <td>$198,50</td>
                                        <td>$98,00</td>
                                        <td>Not paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>017</td>
                                        <td>2021-11-10</td>
                                        <td>New York</td>
                                        <td>$725,00</td>
                                        <td>$386,00</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>018</td>
                                        <td>2021-11-11</td>
                                        <td>Nest</td>
                                        <td>$237,50</td>
                                        <td>$0</td>
                                        <td>Paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>019</td>
                                        <td>2021-11-12</td>
                                        <td>Lodo</td>
                                        <td>$132,00</td>
                                        <td>$86,00</td>
                                        <td>Not paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>020</td>
                                        <td>2021-11-15</td>
                                        <td>Eburgh</td>
                                        <td>$217,50</td>
                                        <td>$17,00</td>
                                        <td>Not paid</td>
                                        <td><input type="checkbox" class="switch-input" ></td>
                                    </tr>
                                    <tr>
                                        <td>021</td>
                                        <td>2021-11-15</td>
                                        <td>Nork</td>
                                        <td>$345,00</td>
                                        <td>$40,00</td>
                                        <td>Not paid</td>
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
