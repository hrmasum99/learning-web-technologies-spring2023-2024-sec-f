<?php
    require_once('../model/userModel.php');

    $customer= $_COOKIE['flag'];
    $eventname= $_REQUEST['event_name'];
    $tickettype= $_REQUEST['ticket_type'];
    $quantity= $_REQUEST['quantity'];
    $discount= $_REQUEST['discount_coupon'];

    $getname= getAnUser($customer);
    $name=  $getname[0]['name'];

    $tickets= ['customer_name'=>$name, 'event_name'=> $eventname, 'ticket_type'=> $tickettype, 'quantity'=> $quantity, 'discount_coupon'=> $discount, 'username'=>$customer];
    $status= createTicketsell($tickets);

    if($status){
        echo "Purchase successful.";
        //header('location: ../view/customerdash.php');
    }else{
        echo "Purchase Failed! Please try again.";
    } 
?>