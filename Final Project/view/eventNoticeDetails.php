<?php 
require_once('../model/userModel.php');
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$id =  $_GET['id'];

$getdetails= getEventdetails($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Details</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
        <h1>Event Details</h1>

        <table class="list_table" border=1>
        <thead>
            <tr>
                <th>Event Descriptions</th>
                <th>Ticket Price</th>
                <th>Purchase Ticket</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0; $i<count($getdetails); $i++){?>
            <tr>
                <td><?php echo $getdetails[$i]['event_details']; ?></td>
                <td><?=$getdetails[$i]['amount']; ?></td>
                <td>
                    <a href="purchaseTicket.php">Click here</a> 
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>