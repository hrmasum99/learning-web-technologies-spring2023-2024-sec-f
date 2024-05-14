<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    $attendees = getAllattendee();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Attendees list</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
        <h1>Attendees List</h1>
        <!-- <a href="home.php" > Back </a> |
        <a href="logout.php" > Logout </a>    
        <br>
        <br> -->
        <table class="list_table" border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>CUSTOMER NAME</th>
                <th>EVENT</th>
                <th>TICKET TYPE</th>
                <th>QUANTITY</th>
                <th>DISCOUNT COUPON</th>
                <th>USER NAME</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($attendees as $attendee): ?>
            <tr>
                <td><?= $attendee['id']; ?></td>
                <td><?= $attendee['customer_name']; ?></td>
                <td><?= $attendee['event_name']; ?></td>
                <td><?= $attendee['ticket_type']; ?></td>
                <td><?= $attendee['quantity']; ?></td>
                <td><?= $attendee['discount_coupon']; ?></td>
                <td><?= $attendee['username']; ?></td>
                <td>
                    <!-- <a href="edit.php?id=<?=$attendees[$i]['id']?>"> EDIT </a> |
                    <a href="delete.php?id=<?=$attendees[$i]['id']?>"> DELETE </a> | -->
                    <a href="attendeedetails.php?id=<?= $attendee['id']; ?>">Details</a> 
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
</body>
</html>