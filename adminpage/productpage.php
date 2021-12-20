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
                                <h1><a href="productcreatepage.php" class="btn btn-success"><i class="fa fa-plus-square-o"></i>New Product</a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li class="active">Product List</li>
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
                            <div class="card-header">
                                <strong class="card-title">Danh sách sản phẩm</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Photo</th>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                           <td class="serial">1.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-1.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">BLACK TIGHT DRESS </span> </td>
                                            <td> <span class="product">$199</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                                <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                           <td class="serial">2.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-2.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">BLUE SKY BUTTON DRESS</span> </td>
                                            <td> <span class="product">$249</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                               <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                           <td class="serial">3.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-3.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">SKY BLUE BRIDESMAID DRESSES</span> </td>
                                            <td> <span class="product">$254</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                                <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                           <td class="serial">4.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-4.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">V-NECK SHIRT</span> </td>
                                            <td> <span class="product">$499</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                                <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                           <td class="serial">5.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-5.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">BLUE SHIRT</span> </td>
                                            <td> <span class="product">$99</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                                <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                           <td class="serial">6.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-6.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">RADIUS JEANS</span> </td>
                                            <td> <span class="product">$190</span> </td>
                                            <td> <span class="product">Trousers</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                                <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                           <td class="serial">7.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-7.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">CASHMERE HERRINGBONE COAT</span> </td>
                                            <td> <span class="product">$599</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                                <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                           <td class="serial">8.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-8.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">PAVIA MESH TOP</span> </td>
                                            <td> <span class="product">$230</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                                <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                           <td class="serial">9.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-9.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">VANILAR SWEATER</span> </td>
                                            <td> <span class="product">$165</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                                <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                           <td class="serial">10.</td>
                                         <td class="avatar">
                                               <div class="round-img">
                                                   <a href="#"><img class="rounded-circle" src="images/avatar/product-10.jpg" alt=""></a>
                                               </div>
                                          </td>
                                          <td> #5469 </td>
                                            <td>  <span class="name">WHITE DRESS</span> </td>
                                            <td> <span class="product">$124</span> </td>
                                            <td> <span class="product">Shirt</span> </td>
                                            <td> <span class="product">1/11/2021</span> </td>
                                            
                                           <td>
                                              <span class="badge badge-complete">Active</span>
                                            </td>
                                            
                                            <td>
                                                <a href="producteditpage.php?id='.($i+1).'" type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                             <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>
                                            </td>
                                            
                                        </tr>
                                       }
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
