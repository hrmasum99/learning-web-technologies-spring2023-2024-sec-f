<?php
    require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $usertype = $_REQUEST['usertype'];

    if(($username == "Admin" || $username == "admin") && $password == "Admin123"){   
        setcookie('flag', 'ADMIN', time()+3000, '/');
        header('location: ../view/admindash.php');
        }else{
       
        $status = login($username, $password, $usertype);

        if($status){
            if($usertype == "Host"){
                setcookie('flag', $username, time()+3000, '/');
                header('location: ../view/hostdash.php');
            }elseif($usertype == "Customer"){
                setcookie('flag', $username, time()+3000, '/');
                header('location: ../view/customerdash.php');
            }
        }else{
            echo "invalid User!";
        }  
    }
?>