<?php 
require_once('../model/userModel.php');
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$id =  $_GET['id'];

$status= getAttendee($id);
$username=  $status[0]['username'];

$getdetails= getUserdetails($username);
//$name=  $getaname[0]['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Attendee Details</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
        <h1>Attendees Details</h1>
        <!-- <a href="home.php" > Back </a> |
        <a href="logout.php" > Logout </a>    
        <br>
        <br> -->
        <table class="list_table" border=1>
        <thead>
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>GENDER</th>
                <th>DATE OF BIRTH</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0; $i<count($getdetails); $i++){?>
            <tr>
                <td><?php echo $getdetails[$i]['name']; ?></td>
                <td><?php echo $getdetails[$i]['email']; ?></td>
                <td><?=$getdetails[$i]['phone'] ?></td>
                <td><?=$getdetails[$i]['gender'] ?></td>
                <td><?=$getdetails[$i]['dob'] ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>