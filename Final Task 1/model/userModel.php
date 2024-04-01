<?php 
    require_once('db.php');


    function getAllUser(){
        $con = dbConnection();
        $sql = "select * from employee";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function getUserById($id){

    }

    function createUser($user){
        $con = dbConnection();
        $sql = "insert into employee values('', '{$user['Name']}', '{$user['ContactNo']}', '{$user['Username']}', '{$user['Password']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteUser($id){
        $con = dbConnection();
        $sql = "delete form employee where eID = '$id'";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function updateEmployee($pass,$username){
        $con = dbConnection();
        $sql = "update employee set password = '$pass' where email = '$username'";
        if(mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }


    
    function getEmployeedetails($username) {
        $con = dbConnection();
        $sql = "select * FROM employee WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        $name = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($name, $row);
        }
        return $name;
    }


    function searchEmployee($arg){
        $con = dbConnection();
        if($arg['uname'] == "" && $arg['id'] == ""){
            $sql = "select * FROM employee WHERE Name LIKE '%" . $arg['name'] . "%'";
            $result = mysqli_query($con, $sql);
            $events = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($events, $row);
            }
    
            return $events;
        } elseif($arg['uname'] == ""){
            $sql = "select * FROM employee WHERE Name LIKE '%" . $arg['name'] . "%' AND eID = '{$arg['id']}'";
            $result = mysqli_query($con, $sql);
            $events = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($events, $row);
            }
    
            return $events;
        } elseif($arg['id'] == ""){
            $sql = "select * FROM employee WHERE Name LIKE '%" . $arg['name'] . "%' AND Username = '{$arg['uname']}'";
            $result = mysqli_query($con, $sql);
            $events = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($events, $row);
            }
    
            return $events;
        } else {
            $sql = "select * FROM events";
            $result = mysqli_query($con, $sql);
            $events = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($events, $row);
            }
    
            return $events;
        }
    }
    

?>