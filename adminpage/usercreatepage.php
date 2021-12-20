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
                                <a href="userpage.php" class="btn btn-success"><i class="fa fa-undo"></i>Back</a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Users</a></li>
                                    <li class="active">Create User</li>
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
                                <strong class="card-title text-light">User Information</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="UserController.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_username" name="txt_username"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="txt_email" name="txt_email"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="txt_password" name="txt_password"  class="form-control"></div>
                                    </div>
                                   
                                   
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Role</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="cbx_role" id="selectSm" class="form-control-sm form-control">
                                                <option value="0">Please select</option>
                                                <option value="1" selected=>User</option>
                                                <option value="2">Admin</option>
                                           
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Sex</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check" style="margin-left: -20px">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="rdo_male" name="rdg_sex" value="male" checked class="lbsRadio">Male
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="rdo_female" name="rdg_sex" value="female" style="margin-left: 40px" class="lbsRadio">Female
                                                </label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Preferece</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <input type="checkbox" id="chk_basketball" name="chk_basketball" value="basketball" class="form-check-input">Basketball
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox2" class="form-check-label ">
                                                        <input type="checkbox" id="chk_baseball" name="chk_baseball" value="baseball" class="form-check-input"> Baseballl
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="chk_baseball" name="chk_football" value="footballl" class="form-check-input"> Football
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Avatar</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-avatar" name="file-avatar" class="form-control-file"></div>
                                    </div>
                                     <div class="row form-group">
                                         <button type="submit" name="btn_create" class="btn btn-primary" style="margin-left:10px">
                                    <i class="fa fa-dot-circle-o"></i> Create
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
