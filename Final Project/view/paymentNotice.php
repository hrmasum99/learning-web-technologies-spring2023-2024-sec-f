<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: signin.php');
    }
    $username =  $_COOKIE['flag'];

    $alltrans= getTransactions($username);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transactions</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
        <h1>Transactions</h1>
        <!-- <a href="home.php" > Back </a> |
        <a href="logout.php" > Logout </a>    
        <br>
        <br> -->
        <table class="list_table" border=1>
        <thead>
            <tr>
                <th>SL NO</th>
                <th>TRANSACTION ID</th>
                <th>AMOUNT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php $x = 0; ?>
            <?php foreach($alltrans as $allts): ?>
            <tr>
                <td><?= $x=$x+1; ?></td>
                <td><?= $allts['id']; ?></td>
                <td><?= $allts['amount']; ?></td>
                <td>
                    <a href="paymentNoticeDetails.php?id=<?= $allts['id']; ?>">Details</a> 
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
</body>
</html>