<?php 
require_once('../model/userModel.php');
if(!isset($_COOKIE['flag'])){
    header('location: signin.php');
}
$id =  $_REQUEST['id'];
$getdetails= getPaymentdetails($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transaction Details</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
        <h1>Transaction Details</h1>

        <table class="list_table" border=1>
        <thead>
            <tr>
                <th>EVENT NAME</th>
                <th>AMOUNT</th>
                <th>BKASH ACCOUNT</th>
                <th>TRANSACTION ID</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0; $i<count($getdetails); $i++){?>
            <tr>
                <td><?php echo $getdetails[$i]['event_name']; ?></td>
                <td><?=$getdetails[$i]['amount']; ?></td>
                <td><?php echo $getdetails[$i]['bkash_number']; ?></td>
                <td><?=$getdetails[$i]['id']; ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>