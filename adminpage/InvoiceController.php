<?php
function showInvo($a = array()){
echo '    <div class="card-body">';
echo '<caption><h1>INVOICE LIST</h1></caption>';
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
foreach($a as $invo){
    echo '            <tr>';
    echo '                <td>001</td>';
    echo '                <td>'.$invo["date"].'</td>';
    echo '                <td>'.$invo["username"].'</td>';
    echo '                <td>'.$invo["total"].'</td>';
    echo '                <td>'.$invo["discount"].'</td>';
    if($invo["status"]==0)
        echo '                <td> <span class="product"> In use </span> </td>';
    else
        echo '                <td> <span class="product"> Not in use </span> </td>';
    echo '                <td>';
    echo '                    <a href="editinvoicepage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit';
    echo '                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>';
    echo '                </td>';
    echo '            </tr>';
}
echo '        </tbody>';
echo '    </table>';
echo '</div>';
}

function showInvoDetail($invoDetail){
    echo '    <div class="card-body">';
    echo '<caption><h1>INVOICE DETAIL</h1></caption>';
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
    echo '            <tr>';
    echo '                <td>001</td>';
    echo '                <td>'.$invoDetail["date"].'</td>';
    echo '                <td>'.$invoDetail["username"].'</td>';
    echo '                <td>'.$invoDetail["total"].'</td>';
    echo '                <td>'.$invoDetail["discount"].'</td>';
    if($invoDetail["status"]==0)
        echo '                <td> <span class="product"> In use </span> </td>';
    else
        echo '                <td> <span class="product"> Not in use </span> </td>';
    echo '                <td>';
    echo '                    <a href="editinvoicepage.php" class="btn btn-success"><i class="fa fa-edit"></i>Edit';
    echo '                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button>';
    echo '                </td>';
    echo '            </tr>';
    echo '        </tbody>';
    echo '    </table>';
    echo '</div>';
}

function checkDiscount($d,$t)
{
    if($d==0&&$t==0)
        return false;
    else if($d>=$t)
        return true;
    else
        return false;
}

$txt_date = date('d/m/Y');
$txt_username = $_POST["txt_username"];
$txt_total = $_POST["txt_total"];
$txt_discount = $_POST["txt_discount"];
$cbx_status = $_POST["cbx_status"];

$arrInvo = array();
$invo_1 = array("date"=>"16/11/2021", "username"=>"Phuc", "total"=>100, "discount"=>50, "status"=>"0");
array_push($arrInvo, $invo_1);


if (empty($_POST["txt_username"])) {
    echo "<span style='color:red;'><h1>Error: User name can not be empty.<h1></span>";
} else {
    $txt_username = $_POST["txt_username"];
    if(!preg_match("/^[a-zA-Z ]*$/",$txt_username)) {
        echo "<span style='color:red;'><h1>Error: User name only accept character and space.<h1></span>";
    } else {
        if ((!isset($_POST["txt_total"]))||$_POST["txt_total"]<0) {
            echo "<span style='color:red;'><h1>Error: Total can not be empty or negative.<h1></span>";
        } else {
            if ((!isset($_POST["txt_discount"])||$_POST["txt_discount"]<0)) {
                echo "<span style='color:red;'><h1>Error: Discount name can not be empty or negative.<h1></span>";
            } else {
                $valid = checkDiscount($txt_discount, $txt_total);
                if($valid){
                    //echo 'alert("Discount can not be equals or higher than total")';
                    echo "<span style='color:red;'><h1>Error: Discount name can not be empty or negative.<h1></span>";
                    header("Location: addinvoicepage.php");
                }
                else{
                $invo_2 = array("date"=>$txt_date, "username"=>$txt_username, "total"=>$txt_total, "discount"=>$txt_discount, "status"=>$cbx_status);
                array_push($arrInvo, $invo_2);
                showInvo($arrInvo);
                }
            }
        }
    }
}












?>