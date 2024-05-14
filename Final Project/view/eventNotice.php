<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: signin.php');
    }
    $allevents = getAllevents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Notices</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
        <h1>Event Notices</h1>
        <!-- <a href="home.php" > Back </a> |
        <a href="logout.php" > Logout </a>    
        <br>
        <br> -->
        <table class="list_table" border=1>
        <thead>
            <tr>
                <th>EVENT NAME</th>
                <th>DATE</th>
                <th>EVENT TYPE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($allevents as $allevent): ?>
            <tr>
                <td><?= $allevent['event_name']; ?></td>
                <td><?= $allevent['event_date']; ?></td>
                <td><?= $allevent['event_type']; ?></td>
                <td>
                    <a href="eventNoticeDetails.php?id=<?= $allevent['id']; ?>">Details</a> 
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
</body>
</html>