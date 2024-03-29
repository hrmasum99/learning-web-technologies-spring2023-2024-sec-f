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
</head>
<body>
        <h1>Attendees List</h1>
        <!-- <a href="home.php" > Back </a> |
        <a href="logout.php" > Logout </a>    
        <br>
        <br> -->
        <table border=1>
            <tr>
                <td>ID</td>
                <td>CUSTOMER NAME</td>
                <td>EVENT</td>
                <td>TICKET TYPE</td>
                <td>QUANTITY</td>
                <td>DISCOUNT COUPON</td>
                <td>USER NAME</td>
                <td>ACTION</td>
            </tr>
            <?php for($i=0; $i<count($attendees); $i++){?>
            <tr>
                <td><?php echo $attendees[$i]['id']; ?></td>
                <td><?=$attendees[$i]['customer_name'] ?></td>
                <td><?php echo $attendees[$i]['event_name']; ?></td>
                <td><?=$attendees[$i]['ticket_type'] ?></td>
                <td><?=$attendees[$i]['quantity'] ?></td>
                <td><?=$attendees[$i]['discount_coupon'] ?></td>
                <td><?=$attendees[$i]['username'] ?></td>
                <td>
                    <!-- <a href="edit.php?id=<?=$attendees[$i]['id']?>"> EDIT </a> |
                    <a href="delete.php?id=<?=$attendees[$i]['id']?>"> DELETE </a> | -->
                    <a href="attendeedetails.php?id=<?=$attendees[$i]['id']?>"> Details </a> 
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>