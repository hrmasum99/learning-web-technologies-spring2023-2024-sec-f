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

    function getUsername($username){
        $con = dbConnection();
        $sql = "select username from users where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getEmail($email){
        $con = dbConnection();
        $sql = "select * from users where email='{$email}'";
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

    function createUser($user){
        $con = dbConnection();
        $sql = "insert into users values('', '{$user['name']}', '{$user['email']}', '{$user['phone']}', '{$user['username']}', '{$user['password']}', '{$user['gender']}', '{$user['dob']}', '{$user['usertype']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
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

    function createEvent($event_name, $event_date, $event_time, $event_place, $event_type, $amount) {
        $con = dbConnection();
        $sql = "INSERT INTO events (event_name, event_date, event_time, event_place, event_type, amount) 
                VALUES ('$event_name', '$event_date', '$event_time', '$event_place', '$event_type', '$amount')";
        
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
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

    function getEventAmountByName($eventname){
        $con = dbConnection();
        $sql = "SELECT amount FROM events WHERE event_name = '$eventname'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['amount'];
    }


    function getEventNameById($event_id){
        $con = dbConnection();
        $sql = "SELECT event_name FROM events WHERE id = '$event_id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['event_name'];
    }

    // function getEventByID($id){
    //     $con = dbConnection();
    //     $sql = "select * FROM events WHERE id = '$id'";
    //     $result = mysqli_query($con, $sql);
    //     $username = [];
    //     while($row = mysqli_fetch_assoc($result)){
    //         array_push($username, $row);
    //     }
    //     return $username;
    // }

    function getEventdetails($id) {
        $con = dbConnection();
        $sql = "select * FROM events WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        $details = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($details, $row);
        }
        return $details;
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

    function getSumAttendeeByEvent($ename){
        $con = dbConnection();
        $sql = "SELECT SUM(quantity) AS totalAttendees FROM ticketsells WHERE event_name = '$ename'";
        $result = mysqli_query($con, $sql);
        $sum = 0; 
        while($row = mysqli_fetch_assoc($result)){
            $sum = $row['totalAttendees'];
        }
        return $sum;
    }

    function getAllAttendeesByEvent($ename){
        $con = dbConnection();
        $sql = "SELECT * FROM ticketsells WHERE event_name = '$ename'";
        $result = mysqli_query($con, $sql);
        $all = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($all, $row);
        }
        return $all;
    }
    
    function makePayment($amount, $event_name, $bkash_number, $username){
        $con = dbConnection();
        $sql = "INSERT INTO payment (amount, event_name, bkash_number, username) 
                VALUES ('$amount', '$event_name', '$bkash_number', '$username')";
        
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function insertSponsorship($company_name, $address,  $details, $reference, $contact_number, $sponsor_for, $email) {
        $con = dbConnection();
        $sql = "INSERT INTO sponsorship_details (company_name, address,  details, reference, contact_number, sponsor_for, email) VALUES ('$company_name', '$address', '$details', '$reference', '$contact_number', '$sponsor_for', '$email')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function getAllSponsorships(){
        $con = dbConnection();
        $sql = "SELECT * FROM sponsorship_details";
        $result = mysqli_query($con, $sql);
        $sponsorships = [];
    
        while($row = mysqli_fetch_assoc($result)){
            array_push($sponsorships, $row);
        }
    
        return $sponsorships;
    }
    function getAllPayments(){
        $con = dbConnection();
        $sql = "SELECT * FROM payment";
        $result = mysqli_query($con, $sql);
        $payments = [];
    
        while($row = mysqli_fetch_assoc($result)){
            array_push($payments, $row);
        }
    
        return $payments;
    }

    function getPaymentdetails($id) {
        $con = dbConnection();
        $sql = "select * FROM payment WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        $details = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($details, $row);
        }
        return $details;
    }

    function getTransactions($username) {
    $con = dbConnection();
    $sql = "select * FROM payment WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    $name = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($name, $row);
    }
    return $name;
    }

    function getSumPaymentByEvent($ename){
        $con = dbConnection();
        $sql = "SELECT SUM(amount) AS totalAmount FROM payment WHERE event_name = '$ename'";
        $result = mysqli_query($con, $sql);
        $sum = 0; 
        while($row = mysqli_fetch_assoc($result)){
            $sum = $row['totalAmount'];
        }
        return $sum;
    }

    function getAllPaymentByEvent($ename){
        $con = dbConnection();
        $sql = "SELECT * FROM payment WHERE event_name = '$ename'";
        $result = mysqli_query($con, $sql);
        $all = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($all, $row);
        }
        return $all;
    }

// function getUserdetails($username) {
//     $con = dbConnection();
//     $sql = "select * FROM users WHERE username = '$username'";
//     $result = mysqli_query($con, $sql);
//     $name = [];
//     while($row = mysqli_fetch_assoc($result)){
//         array_push($name, $row);
//     }
//     return $name;
// }

    // function getAllUser(){
    //     $con = dbConnection();
    //     $sql = "select * from users";
    //     $result = mysqli_query($con, $sql);
    //     $users = [];

    //     while($row = mysqli_fetch_assoc($result)){
    //         array_push($users, $row);
    //     }

    //     return $users;
    // }

    function getUserById($id){
        $con = dbConnection();
        $sql = "select * from users where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    // function updateUserpass($password,$email){
    //     $con = dbConnection();
    //     $sql = "update users set password = '$password' where email = '$email'";
    //     if(mysqli_query($con, $sql)) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }


    // function createUser($user){
    //     $con = dbConnection();
    //     $sql = "insert into users values('', '{$user['username']}',  '{$user['password']}','{$user['email']}', '{$user['usertype']}')";       
    //     if(mysqli_query($con, $sql)){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
    function createVenue($data){
        $con = dbConnection();
        $sql = "insert into venue values('', '{$data['venue_name']}', '{$data['location']}', '{$data['capacity']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function updateVenue($data){
        $con = dbConnection();
        $id = $data['id'];
        $venuename = $data['venue_name']; 
        $location = $data['location']; 
        $capacity = $data['capacity']; 
        $sql = "UPDATE venue set venue_name = '$venuename' , location = '$location', capacity = '$capacity' WHERE id = '$id'";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteVenue($id) {
        $con = dbConnection();
        $sql = "DELETE FROM venue where id = '$id'";
        $data = mysqli_query($con, $sql);

        header("location: ../view/venuelistMGT.php");
    }

    function getVenueById($id){
        $con = dbConnection();
        $sql = "select * from venue where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    function getAllVenue(){
        $con = dbConnection();
        $sql = "select * from venue";
        $result = mysqli_query($con, $sql);
        $venues = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($venues, $row);
        }

        return $venues;
    }

    function createSP($data){
        $con = dbConnection();
        $sql = "insert into sp values('', '{$data['role']}', '{$data['name']}', '{$data['bio']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function updateSP($data){
        $con = dbConnection();
        $id = $data['id'];
        $role = $data['role']; 
        $name = $data['name']; 
        $bio = $data['bio']; 
        $sql = "UPDATE sp set role = '$role' , name = '$name', bio = '$bio' WHERE id = '$id'";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteSP($id) {
        $con = dbConnection();
        $sql = "DELETE FROM sp where id = '$id'";
        $data = mysqli_query($con, $sql);

        header("location: ../view/splistMGT.php");
    }

    function getSPById($id){
        $con = dbConnection();
        $sql = "select * from sp where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    function getAllSP(){
        $con = dbConnection();
        $sql = "select * from sp";
        $result = mysqli_query($con, $sql);
        $sps = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($sps, $row);
        }

        return $sps;
    }

    function deleteUser($id){

    $con = dbConnection();
    $sql = "DELETE FROM users WHERE id = $id";
    if(mysqli_query($con, $sql)){

        return true;
    } else {

        return false;
    }
}
// function getUserdetails($username) {
//     $con = dbConnection();
//     $sql = "select * FROM users WHERE username = '$username'";
//     $result = mysqli_query($con, $sql);
//     $name = [];
//     while($row = mysqli_fetch_assoc($result)){
//         array_push($name, $row);
//     }
//     return $name;
// }



function addAgendaItem($agenda_item, $agenda_time) {
    $con = dbConnection();
    $sql = "INSERT INTO agenda (agenda_item, agenda_time) VALUES ('$agenda_item', '$agenda_time')";
        
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
function getAllAgendaItems() {
    $con = dbConnection();
    $sql = "SELECT * FROM agenda";
    $result = mysqli_query($con, $sql);
    $agendaItems = [];

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $agendaItems[] = $row;
        }
    }

    return $agendaItems;
}


    

function updateUser($user){
    $con = dbConnection();
    $id = $user['id']; 
    $username = $user['username']; 
    $password = $user['password']; 
    $email = $user['email']; 
    $usertype = $user['usertype']; 

    $sql = "UPDATE users SET username='$username', password='$password', email='$email', usertype='$usertype' WHERE id=$id";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

?>