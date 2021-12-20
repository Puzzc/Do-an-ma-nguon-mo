<?php
function showCate($a = array()){
    echo '<div class="table-stats order-table ov-h">';
    echo '<caption><h1>CATEGORY LIST</h1></caption>';
    echo '    <table border="1" class="table" >';
    echo '        <thead>';
    echo '            <tr>';
    echo '                <th class="serial">Category ID</th>';
    echo '                <th>Root Category</th>';
    echo '                <th>Category Name</th>';
    echo '                <th>Status</th>';
    echo '                <th>Action</th>';
    echo '            </tr>';
    echo '        </thead>';
    echo '        <tbody>';
    foreach($a as $cate){
        echo '            <tr>';
        echo '                <td class="serial"> #5550 </td>';
        if($cate["rootcate"]==0)
            echo '                <td> <span class="product">  </span> </td>';
        else if($cate["rootcate"]==1)
            echo '                <td> <span class="product"> Fashion & Beauty </span> </td>';
        else if($cate["rootcate"]==2)
            echo '                <td> <span class="product"> Kid & Babies clothes </span> </td>';
        else if($cate["rootcate"]==3)
            echo '                <td> <span class="product"> Men & Woman clothes </span> </td>';
        else if($cate["rootcate"]==4)
            echo '                <td> <span class="product"> Gadgets </span> </td>';
        else
            echo '                <td> <span class="product"> Accessories </span> </td>';
        echo '                <td>  <span class="name">'.$cate["catename"].'</span> </td>';
        
        if($cate["status"]==0)
            echo '                <td> <span class="product"> In use </span> </td>';
        else
            echo '                <td> <span class="product"> Not in use </span> </td>';
        echo '                <td>';
        echo '                    <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>';
        echo '                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>';
        echo '                </td>';
        echo '            </tr>';
    }
    echo '        </tbody>';
    echo '    </table>';
    echo '<div>'; 
}

function showCateDetail($cateDetail){
    echo '<div class="table-stats order-table ov-h">';
    echo '<caption><h1>CATEGORY DETAIL</h1></caption>';
    echo '    <table border="1" class="table" >';
    echo '        <thead>';
    echo '            <tr>';
    echo '                <th class="serial">Category ID</th>';
    echo '                <th>Root Category</th>';
    echo '                <th>Category Name</th>';
    echo '                <th>Status</th>';
    echo '                <th>Action</th>';
    echo '            </tr>';
    echo '        </thead>';
    echo '        <tbody>';
    echo '            <tr>';
    echo '                <td class="serial"> #5550 </td>';
    if($cateDetail["rootcate"]==0)
        echo '                <td> <span class="product">  </span> </td>';
    else if($cateDetail["rootcate"]==1)
        echo '                <td> <span class="product"> Fashion & Beauty </span> </td>';
    else if($cateDetail["rootcate"]==2)
        echo '                <td> <span class="product"> Kid & Babies clothes </span> </td>';
    else if($cateDetail["rootcate"]==3)
        echo '                <td> <span class="product"> Men & Woman clothes </span> </td>';
    else if($cateDetail["rootcate"]==4)
        echo '                <td> <span class="product"> Gadgets </span> </td>';
    else
        echo '                <td> <span class="product"> Accessories </span> </td>';
    echo '                <td>  <span class="name">'.$cateDetail["catename"].'</span> </td>';
    
    if($cateDetail["status"]==0)
        echo '                <td> <span class="product"> In use </span> </td>';
    else
        echo '                <td> <span class="product"> Not in use </span> </td>';
    echo '                <td>';
    echo '                    <a href="editcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>';
    echo '                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>';
    echo '                </td>';
    echo '            </tr>';
    echo '        </tbody>';
    echo '    </table>';
    echo '<div>'; 
}

function isCateExist($catename, $a = array()){
    $isExist = false;
    $cateDetail;
    foreach($a as $cate){
        foreach($cate as $key=>$value){
            if($key == "catename"  && $value == $catename){
                $cateDetail = $cate;
                $isExist = true;
            }
        }
    }
    $cateDetail["isE"] = $isExist;
    return $cateDetail;
}

$txt_catename = $_POST["txt_catename"];
$cbx_rootcate = $_POST["cbx_rootcate"];
$cbx_status = $_POST["cbx_status"];

$arrCate = array();
$cate_1 = array("catename"=>"Shirt", "rootcate"=>"2", "status"=>"0");
array_push($arrCate, $cate_1);

if (empty($_POST["txt_catename"])) {
    echo "<span style='color:red;'><h1>Error: Category name can not be empty.<h1></span>";
} else {
    $txt_catename = $_POST["txt_catename"];
    if(!preg_match("/^[a-zA-Z+&']*$/",$txt_catename)) {
        echo "<span style='color:red;'><h1>Error: Category name only accept character, &, ' and space.<h1></span>";
    } else {
        $cateDetail = isCateExist($txt_catename, $arrCate);
        if($cateDetail["isE"]){
            echo '<script>alert("Category name was existed!")</script>';
            showCateDetail($cateDetail);
        }
        else {
            $cate_2 = array("catename"=>$txt_catename, "rootcate"=>$cbx_rootcate, "status"=>$cbx_status);
            array_push($arrCate, $cate_2);
            showCate($arrCate);
        }
    }
}












?>