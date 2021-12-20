<?php
function showUsers($arr = array()){
    echo'<div class="table-stats order-table ov-h">';
    echo'<caption><h1>Danh sách người dùng</h1></caption>';
                                echo'<table border="1" class="table ">';
                                    echo'<thead>';
                                       echo' <tr>';
                                            echo'<th class="avatar">Avatar</th>';
                                           echo' <th>ID</th>';
                                           echo' <th>Username</th>';
                                           echo' <th>Email</th>';
                                            echo'<th>Status</th>';
                                            
                                          
                                         
                                        echo'</tr>';
                                   echo' </thead>';
                                   echo' <tbody>';
                                       
                                   foreach($arr as $user){
                                       echo' <tr>';
                                     
                                       echo'     <td class="avatar">';
                                       echo'         <div class="round-img">';
                                       echo'             <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>';
                                       echo'         </div>';
                                            echo'</td>';
                                            echo'<td> #5469 </td>';
                                            echo'<td>  <span class="name">'.$user["username"].'</span> </td>';
                                            echo'<td> <span class="product">'.$user["email"].'</span> </td>';
                                            
                                            echo'<td>';
                                            echo'    <span class="badge badge-complete">Active</span>';
                                            echo'</td>';
                                            
                                            
                                            
                                        echo'</tr>';
                                       }
                                         
                                    echo'</tbody>';
                                echo'</table>';
                            echo'</div>';
}


function showUserDetail($userDetail){
    echo'<div class="table-stats order-table ov-h">';
    echo'<caption><h1>Thông tin chi tiết người dùng</h1></caption>';
                                echo'<table border="1" class="table ">';
                                    echo'<thead>';
                                       echo' <tr>';
                                            echo'<th class="avatar">Avatar</th>';
                                           echo' <th>ID</th>';
                                           echo' <th>Username</th>';
                                           echo' <th>Email</th>';
                                            echo'<th>Status</th>';
                                            
                                          
                                         
                                        echo'</tr>';
                                   echo' </thead>';
                                   echo' <tbody>';
                                       
                                   
                                       echo' <tr>';
                                     
                                       echo'     <td class="avatar">';
                                       echo'         <div class="round-img">';
                                       echo'             <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>';
                                       echo'         </div>';
                                            echo'</td>';
                                            echo'<td> #5469 </td>';
                                            echo'<td>  <span class="name">'.$userDetail["username"].'</span> </td>';
                                            echo'<td> <span class="product">'.$userDetail["email"].'</span> </td>';
                                            
                                            echo'<td>';
                                            echo'    <span class="badge badge-complete">Active</span>';
                                            echo'</td>';
                                            
                                            
                                            
                                        echo'</tr>';
    
                                         
                                    echo'</tbody>';
                                echo'</table>';
                            echo'</div>';
}

function isUserExist($email,$arrUsers=array()){
    $laUser=false;
    $userDetail;
    foreach($arrUsers as $user){
        foreach ($user as $key => $value){
            if($key=="email" && $value==$email){
                $userDetail=$user;
                $laUser=true;
                
            }
        }
    }
    $userDetail["isExist"]=$laUser;
    return $userDetail;
}

$txt_username=$_POST["txt_username"];
$txt_email=$_POST["txt_email"];
$txt_password=$_POST["txt_password"];
$cbx_role=$_POST["cbx_role"];
$rdg_sex=$_POST["rdg_sex"];
$chk_basketball= isset($_POST["chk_basketball"]) ? $_POST["chk_basketball"] : "";
$chk_baseball=isset($_POST["chk_basetball"]) ? $_POST["chk_basetball"] : "";
$chk_football=isset($_POST["chk_football"]) ? $_POST["chk_football"] : "";
$file_avatar=$_FILES['file-avatar']['name'];

$user_01=array("username"=>"lehiep","email"=>"lehiep@gmail.com","password"=>"123456","role"=>"2","sex"=>"male","prefer"=>"basketball,football","file_avatar"=>"/images/admin.jpg");
$arrUsers= array();
 array_push($arrUsers,$user_01);

$userDetail= isUserExist($txt_email,$arrUsers);


if($userDetail["isExist"]){
    //header("Location : usereditpage.php?id=".userDetail["email"]);
    showUserDetail($userDetail);
}else{
    $strSoThich = $chk_basketball.",".$chk_baseball.",".$chk_football;
    $user_02=array("username"=>$txt_username,"email"=>$txt_email,"password"=>$txt_password,"role"=>$cbx_role,"sex"=>$rdg_sex,"prefer"=>$strSoThich,"file_avatar"=>$file_avatar);
    array_push($arrUsers,$user_02);
    showUsers($arrUsers);
}
?>

