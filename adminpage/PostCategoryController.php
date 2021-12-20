<?php
function showPosC($a = array()){
    echo '    <div class="table-stats order-table ov-h">';
    echo '<caption><h1>POST CATEGORY LIST</h1></caption>';
    echo '    <table border="1px" class="table ">';
    echo '        <thead>';
    echo '            <tr>';
    echo '                <th><i class="ti-layout-width-full"></i></th>';
    echo '                <th class="serial">Post Category ID</th>';
    echo '                <th>Category Name</th>';
    echo '                <th>Date Create</th>';
    echo '                <th>Action</th>';
    echo '            </tr>';
    echo '        </thead>';
    echo '        <tbody>';
    foreach($a as $posc){
        echo '            <tr>';
        echo '                <td><input type="checkbox" class="switch-input" ></td>';
        echo '                <td class="serial"> 7001 </td>';
        echo '                <td>  <span class="name">'.$posc["postcname"].'</span> </td>';
        echo '                <td> <span class="product">'.$posc["date"].'</span> </td>';
        echo '                <td>';
        echo '                    <a href="editpostcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>';
        echo '                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>';
        echo '                </td>';
        echo '            </tr>';
    }
    echo '        </tbody>';
    echo '    </table>';
    echo '    </div>';
}

function showPosCDetail($poscDetail){
    echo '    <div class="table-stats order-table ov-h">';
    echo '<caption><h1>POST CATEGORY DETAIL</h1></caption>';
    echo '    <table border="1px" class="table ">';
    echo '        <thead>';
    echo '            <tr>';
    echo '                <th><i class="ti-layout-width-full"></i></th>';
    echo '                <th class="serial">Post Category ID</th>';
    echo '                <th>Category Name</th>';
    echo '                <th>Date Create</th>';
    echo '                <th>Action</th>';
    echo '            </tr>';
    echo '        </thead>';
    echo '        <tbody>';
    echo '            <tr>';
    echo '                <td><input type="checkbox" class="switch-input" ></td>';
    echo '                <td class="serial"> 7001 </td>';
    echo '                <td>  <span class="name">'.$poscDetail["postcname"].'</span> </td>';
    echo '                <td> <span class="product">'.$poscDetail["date"].'("d/m/Y")</span> </td>';
    echo '                <td>';
    echo '                    <a href="editpostcategorypage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>';
    echo '                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>';
    echo '                </td>';
    echo '            </tr>';
    echo '        </tbody>';
    echo '    </table>';
    echo '    </div>';
}

function isPostCExist($poscname, $a = array()){
    $isExist = false;
    $poscDetail;
    foreach($a as $posc){
        foreach($posc as $key=>$value){
            if($key == "postcname"  && $value == $poscname){
                $poscDetail = $posc;
                $isExist = true;
            }
        }
    }
    $poscDetail["isE"] = $isExist;
    return $poscDetail;
}

$txt_postcname = $_POST["txt_postcname"];
$date = date('d/m/Y');


$arrPostC = array();
$posc_1 = array("postcname"=>"Seeding", "date"=>"20/11/2021");
array_push($arrPostC, $posc_1);



if (empty($_POST["txt_postcname"])) {
    echo "<span style='color:red;'><h1>Error: Post Category name can not be empty.<h1></span>";
} else {
    $txt_postcname = $_POST["txt_postcname"];
    if(!preg_match("/^[a-zA-Z ]*$/",$txt_postcname)) {
        echo "<span style='color:red;'><h1>Error: Post Category name only accept character and space.<h1></span>";
    } else {
        $poscDetail = isPostCExist($txt_postcname, $arrPostC);
        if($poscDetail["isE"]){
            echo '<script>alert("Post Category name was existed!")</script>';
            showPosCDetail($poscDetail);
        }
        else {
            $posc_2 = array("postcname"=>$txt_postcname, "date"=>$date);
            array_push($arrPostC, $posc_2);
            showPosC($arrPostC);
        }
    }
}


?>