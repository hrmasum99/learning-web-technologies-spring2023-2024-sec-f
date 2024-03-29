<?php 
    require_once('db.php');

    function login($username, $password, $usertype){
        $con = dbConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}' and usertype='{$usertype}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getAllUser(){
        $con = dbConnection();
        $sql = "select * from users";
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
        $sql = "insert into users values('', '{$user['name']}', '{$user['email']}', '{$user['phone']}', '{$user['username']}', '{$user['password']}', '{$user['gender']}', '{$user['dob']}', '{$user['usertype']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteUser($id){
        $con = dbConnection();
        $sql = "delete form users where id = '$id'";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function updateUser($user){

    }

    function updateUserpass($pass,$email){
        $con = dbConnection();
        $sql = "update users set password = '$pass' where email = '$email'";
        if(mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function getAnUser($username) {
        $con = dbConnection();
        $sql = "select name FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        $name = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($name, $row);
        }
        return $name;
    }
    
    function getUserdetails($username) {
        $con = dbConnection();
        $sql = "select * FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        $name = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($name, $row);
        }
        return $name;
    }

    function getEventname(){
        $con = dbConnection();
        $sql = "select event_name from events";       
        $result = mysqli_query($con, $sql);
        $events = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($events, $row);
        }

        return $events;
    }

    function createTicketsell($ticket){
        $con = dbConnection();
        $sql = "insert into ticketsells values('', '{$ticket['customer_name']}', '{$ticket['event_name']}', '{$ticket['ticket_type']}', '{$ticket['quantity']}', '{$ticket['discount_coupon']}', '{$ticket['username']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getAllattendee(){
        $con = dbConnection();
        $sql = "select * from ticketsells";
        $result = mysqli_query($con, $sql);
        $attendees = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($attendees, $row);
        }

        return $attendees;
    }

    function getAttendee($id){
        $con = dbConnection();
        $sql = "select username FROM ticketsells WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        $username = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($username, $row);
        }
        return $username;
    }

    function getAllevents(){
        $con = dbConnection();

        $sql = "select * from events";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function searchEvents($arg){
        $con = dbConnection();
        if($arg['event_type'] == "" && $arg['event_date'] == ""){
            $sql = "select * FROM events WHERE event_name LIKE '%" . $arg['event_name'] . "%'";
            $result = mysqli_query($con, $sql);
            $events = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($events, $row);
            }
    
            return $events;
        } elseif($arg['event_type'] == ""){
            $sql = "select * FROM events WHERE event_name LIKE '%" . $arg['event_name'] . "%' AND event_date = '{$arg['event_date']}'";
            $result = mysqli_query($con, $sql);
            $events = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($events, $row);
            }
    
            return $events;
        } elseif($arg['event_date'] == ""){
            $sql = "select * FROM events WHERE event_name LIKE '%" . $arg['event_name'] . "%' AND event_type = '{$arg['event_type']}'";
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