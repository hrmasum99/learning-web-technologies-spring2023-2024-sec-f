<?php
    //require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username ==  $password ){   
        setcookie('flag', 'ADMIN', time()+3000, '/');
        header('location: ../view/dash.php');
        }else{
            echo "invalid User!";
        }  

?>