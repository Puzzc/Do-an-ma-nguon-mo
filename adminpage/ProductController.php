<?php
function showProducts($arr = array()){
    echo'<div class="table-stats order-table ov-h">';
    echo'<caption><h1>Danh sách sản phẩm</h1></caption>';
                                echo'<table border="1" class="table ">';
                                    echo'<thead>';
                                       echo' <tr>';
                                            echo'<th class="avatar">Photo</th>';
                                           echo' <th>ID</th>';
                                           echo' <th>Productname</th>';
                                            echo'<th>Status</th>';
                                            
                                          
                                         
                                        echo'</tr>';
                                   echo' </thead>';
                                   echo' <tbody>';
                                       
                                   foreach($arr as $product){
                                       echo' <tr>';
                                     
                                       echo'     <td class="photo">';
                                       echo'         <div class="round-img">';
                                       echo'             <a href="#"><img class="rounded-circle" src="images/avatar/product-1.jpg" alt=""></a>';
                                       echo'         </div>';
                                            echo'</td>';
                                            echo'<td> #5469 </td>';
                                            echo'<td>  <span class="name">'.$product["productname"].'</span> </td>';
                                            echo'<td> <span class="product">'.$product["ID"].'</span> </td>';
                                            
                                            echo'<td>';
                                            echo'    <span class="badge badge-complete">Active</span>';
                                            echo'</td>';
                                            
                                            
                                            
                                        echo'</tr>';
                                       }
                                         
                                    echo'</tbody>';
                                echo'</table>';
                            echo'</div>';
}


function showProductDetail($productDetail){
    echo'<div class="table-stats order-table ov-h">';
    echo'<caption><h1>Thông tin chi tiết sản phẩm</h1></caption>';
                                echo'<table border="1" class="table ">';
                                    echo'<thead>';
                                       echo' <tr>';
                                            echo'<th class="avatar">Photo</th>';
                                           echo' <th>ID</th>';
                                           echo' <th>Productname</th>';
                                            echo'<th>Status</th>';
                                            
                                          
                                         
                                        echo'</tr>';
                                   echo' </thead>';
                                   echo' <tbody>';
                                       
                                   
                                       echo' <tr>';
                                     
                                       echo'     <td class="photo">';
                                       echo'         <div class="round-img">';
                                       echo'             <a href="#"><img class="rounded-circle" src="images/avatar/product-1.jpg" alt=""></a>';
                                       echo'         </div>';
                                            echo'</td>';
                                            echo'<td> #5469 </td>';
                                            echo'<td>  <span class="name">'.$productDetail["productname"].'</span> </td>';
                                            echo'<td> <span class="product">'.$productDetail["ID"].'</span> </td>';
                                            
                                            echo'<td>';
                                            echo'    <span class="badge badge-complete">Active</span>';
                                            echo'</td>';
                                            
                                            
                                            
                                        echo'</tr>';
    
                                         
                                    echo'</tbody>';
                                echo'</table>';
                            echo'</div>';
}

function isProductExist($ID,$arrProducts=array()){
    $laProduct=false;
    $productDetail;
    foreach($arrProducts as $product){
        foreach ($product as $key => $value){
            if($key=="ID" && $value==$ID){
                $productDetail=$product;
                $laProduct=true;
                
            }
        }
    }
    $productDetail["isExist"]=$laProduct;
    return $productDetail;
}

$txt_productname=$_POST["txt_productname"];
$txt_ID=$_POST["txt_ID"];
$txt_quantify=$_POST["txt_quantify"];
$cbx_category=$_POST["cbx_category"];
$rdg_sex=$_POST["rdg_sex"];
$file_photo=$_FILES['file-photo']['name'];

$product_01=array("productname"=>"aolen","ID"=>"002","quantify"=>"100","category"=>"2","sex"=>"male","file_photo"=>"/images/product-1.jpg");
$arrProducts= array();
 array_push($arrProducts,$product_01);

$productDetail= isProductExist($txt_ID,$arrProducts);


if($productDetail["isExist"]){
    //header("Location : producteditpage.php?id=".productDetail["ID"]);
    showProductDetail($productDetail);
}else{
    
    $product_02=array("productname"=>$txt_productname,"ID"=>$txt_ID,"quantify"=>$txt_quantify,"category"=>$cbx_category,"sex"=>$rdg_sex,"file-photo"=>$file_photo);
    array_push($arrProducts,$product_02);
    showProducts($arrProducts);
}
?>

