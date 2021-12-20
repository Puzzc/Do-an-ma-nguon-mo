<?php
function showPost($a = array()){
echo ' <div class="card-header">';
echo '<strong class="card-title"><h1>POST INFORMATION</h1></strong>';
echo '</div>';
echo '<div class="card-body">';
echo '<table border = "1px id="bootstrap-data-table" class="table table-striped table-bordered">';
echo '    <thead>';
echo '        <tr>';
echo '            <th>Post Number</th>';
echo '            <th>Title</th>';
echo '            <th>Author</th>';
echo '            <th>Date Posted</th>';
echo '            <th>Post Category</th>';
echo '            <th>Content</th>';
echo '            <th><i class="ti-layout-width-full"></i></th>';
echo '        </tr>';
echo '    </thead>';
echo '    <tbody>';
foreach($a as $post){
    echo '    <tr>';
    echo '      <td>001</td>';
    echo '      <td>'.$post["title"].'</td>';
    echo '      <td>'.$post["author"].'</td>';
    echo '      <td>'.$post["date"].'</td>';
    if($post["posc"]==0)
        echo '                <td> Promotion </td>';
    else if($post["posc"]==1)
        echo '                <td> Advertising </td>';
    else if($post["posc"]==2)
        echo '                <td> Tips & Hacks </td>';
    else if($post["posc"]==3)
        echo '                <td> Instruction </td>';
    else
        echo '                <td> Seeding </td>';
    echo '      <td>'.$post["content"].'</td>';
    echo '      <td><input type="checkbox" class="switch-input" ></td>';
    echo '    </tr>';
}
echo '        </tbody>';
echo '    </table>';
echo '</div>';
}

function showPostDetail($postDetail){
    echo '    <div class="card-body">';
    echo '<strong class="card-title"><h1>POST DETAIL</h1></strong>';
    echo '    <table border="1px" id="bootstrap-data-table" class="table table-striped table-bordered">';
    echo '        <thead>';
    echo '            <tr>';
    echo '            <th>Invoice ID</th>';
    echo '            <th>Date</th>';
    echo '            <th>User Name</th>';
    echo '            <th>Total</th>';
    echo '            <th>Discount</th>';
    echo '            <th>Status</th>';
    echo '            <th>Action</th>';
    echo '            </tr>';
    echo '        </thead>';
    echo '        <tbody>';
    echo '          <tr>';
    echo '            <td>001</td>';
    echo '            <td>'.$postDetail["title"].'</td>';
    echo '            <td>'.$postDetail["author"].'</td>';
    echo '            <td>'.$postDetail["date"].'</td>';
    if($postDetail["posc"]==0)
        echo '                <td> Promotion </td>';
    else if($postDetail["posc"]==1)
        echo '                <td> Advertising </td>';
    else if($postDetail["posc"]==2)
        echo '                <td> Tips & Hacks </td>';
    else if($postDetail["posc"]==3)
        echo '                <td> Instruction </td>';
    else
        echo '                <td> Seeding </td>';
    echo '            <td>'.$postDetail["content"].'</td>';
    echo '            <td><input type="checkbox" class="switch-input" ></td>';
    echo '          </tr>';
    echo '        </tbody>';
    echo '    </table>';
    echo '</div>';
}

function isPostExist($title, $a = array())
{
    $isExist = false;
    $postDetail;
    foreach($a as $post){
        foreach($post as $key=>$value){
            if($key == "title"  && $value == $title){
                $postDetail = $post;
                $isExist = true;
            }
        }
}
    $postDetail["isE"] = $isExist;
    return $postDetail;
}

$txt_title = $_POST["txt_title"];
$txt_author = $_POST["txt_author"];
$cbx_posc = $_POST["cbx_posc"];
$txa_content = $_POST["txa_content"];
$date = date('d/m/Y');

$arrPost = array();
$post_1 = array("title"=>"How to wash cotton cloth", "author"=>"admin", "date"=>"20/11/2021", "posc"=>"3", "content"=>"To wash the cotton cloth first thing you need is ...");
array_push($arrPost, $post_1);


if (empty($_POST["txt_title"])) {
    echo "<span style='color:red;'><h1>Error: Title can not be empty.<h1></span>";
} else {
    if (empty($_POST["txt_author"])) {
        echo "<span style='color:red;'><h1>Error: Author name can not be empty.<h1></span>";
    } else {
        $txt_author = $_POST["txt_author"];
        if(!preg_match("/^[a-zA-Z ]*$/",$txt_author)) {
            echo "<span style='color:red;'><h1>Error: Author name only accept character and space.<h1></span>";
        } else {
            $postDetail = isPostExist($txt_title, $arrPost);
            if($postDetail["isE"]){
                echo '<script>alert("Post was existed!")</script>';
                showPostDetail($postDetail);
            }
            else{
            $post_2 = array("title"=>$txt_title, "author"=>$txt_author, "date"=>$date, "posc"=>$cbx_posc, "content"=>$txa_content);
            array_push($arrPost, $post_2);
            showPost($arrPost);
            }
        }
    }
}

?>