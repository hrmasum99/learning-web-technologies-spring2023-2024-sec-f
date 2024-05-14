<?php 
require_once('../model/userModel.php');
if(!isset($_COOKIE['flag'])){
        header('location: signin.php');
    }
    $ename = $_GET['name'];

    $sum1 = getSumAttendeeByEvent($ename);
    $sum2 = getSumPaymentByEvent($ename);

    $allAtt = getAllAttendeesByEvent($ename);
    $allPay = getAllPaymentByEvent($ename);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting and Analysis</title>
    <link rel="stylesheet" href="../assets/css/r_a_analysis.css"/>
</head>
<body>
    <table border="1" align="center" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="2">
                <h1>Reporting AND Analysis</h1> <hr>
                <h3><?php echo $ename;?></h3>
            </td>
        </tr>
        <tr>
            <td>
                <h2>Event Overview</h2>
                <p>Total Attendees: <?php echo $sum1;?></p>
                <p>Total Revenue: <?php echo $sum2;?></p>
                <!-- <p>Engagement Metrics: 80% satisfaction rate</p> -->
            </td>
        </tr>
        <tr>
            <td>
                <!-- Attendee list -->
                <h2>Attendance list</h2> 
                <table border="1" cellpadding="5" cellspacing="0">
                    <tr>
                        <th>CUSTOMER NAME</th>
                        <th>TICKET TYPE</th>
                        <th>QUANTITY</th>
                    </tr>
                    <?php for($i=0; $i<count($allAtt); $i++){?>
                    <tr>
                        <td><?php echo $allAtt[$i]['customer_name']; ?></td>
                        <td><?php echo $allAtt[$i]['ticket_type']; ?></td>
                        <td><?=$allAtt[$i]['quantity']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <!-- payment  -->
                <h2>Revenue list</h2> 
                <table border="1" cellpadding="5" cellspacing="0">
                    <tr>
                        <th>TRANSACTION ID</th>
                        <th>ACCOUNT NUMBER</th>
                        <th>AMOUNT</th>
                    </tr>
                    <?php for($i=0; $i<count($allPay); $i++){?>
                    <tr>
                        <td><?php echo $allPay[$i]['id']; ?></td>
                        <td><?php echo $allPay[$i]['bkash_number']; ?></td>
                        <td><?=$allPay[$i]['amount']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
        <!-- <tr>
            <td>
            <h2>Demographics</h2>
                <p>Attendee demographics:</p>
                <ul>
                    <li>Age: 25-45</li>
                    <li>Gender: Male (60%), Female (40%)</li>
                    <li>Location: New York (40%), Los Angeles (30%), Chicago (20%), Other (10%)</li>
                </ul>
            </td>
        </tr> -->
    </table>
</body>
</html>
