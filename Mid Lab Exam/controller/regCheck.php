<?php
    //require_once('../model/userModel.php');
    require_once('validations.php');

    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $dob = $_REQUEST['dob'];
    // $gender = $_REQUEST['gender'];
    $gender = $_REQUEST['gender'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $conpass = $_REQUEST['confirm_password'];

    if($firstname == "" || $lastname == "" || $email == "" || $dob == ""){
        echo "Null name/email/dob";
    }elseif(!ctype_alpha(substr($firstname, 0, 1))) {
        echo "First character must be a letter";
    }elseif(!ctype_alpha(substr($lastname, 0, 1))) {
        echo "First character must be a letter";
    }elseif(str_word_count($firstname) < 1){
        echo "First name must contains at least one word";
    }elseif(str_word_count($lastname) < 1){
        echo "Last name must contains at least one word";
    }elseif(isValidNameWord($firstname)){
        echo "Name can contain a-z or A-Z or dot(.) or dash(-)";
    }elseif(isValidNameWord($lastname)){
        echo "Name can contain a-z or A-Z or dot(.) or dash(-)";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    }else {
        header('location: ../view/home.php');
        // $user = ['name'=> $name, 'email'=>$email, 'phone'=> $phone, 'username'=> $username, 'password'=>$password, 'gender'=> $gender, 'dob'=> $dob, 'usertype'=> $usertype];
        // $status = createUser($user);
        // if($status){
        //     header('location: ../view/signin.php');
        // }else{
        //     echo "DB error! Please try again";
        // }
    
    }
?>