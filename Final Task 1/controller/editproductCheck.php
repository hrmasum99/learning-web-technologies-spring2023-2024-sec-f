<?php
    require_once('../model/userModel.php');

    $id = $_REQUEST['pID'];
    $pname= $_REQUEST['name'];
    $quantity= $_REQUEST['quantity'];
    $price= $_REQUEST['price'];


    $status= updateProduct($id, $pname, $quantity, $price);

    if($status){
        echo "update successful.";
    }else{
        echo "Update Failed! Please try again.";
    } 
?>