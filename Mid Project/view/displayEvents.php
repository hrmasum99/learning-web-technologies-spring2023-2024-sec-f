<?php
    require_once('../model/userModel.php');

    $keyword = $_REQUEST['keyword'];
    $date = $_REQUEST['date'];
    $event_type = $_REQUEST['type'];

   
        $arg = ['event_name'=> $keyword, 'event_type'=>$event_type, 'event_date'=> $date];
        $status = searchEvents($arg);
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
                <td>EVENT NAME</td>
                <td>EVENT DATE</td>
                <td>EVENT TIME</td>
                <td>EVENT PLASE</td>
                <td>EVENT TYPE</td>
                <td>ACTION</td>
            </tr>
            <?php for($i=0; $i<count($status); $i++){?>
            <tr>
                <td><?php echo $status[$i]['event_name']; ?></td>
                <td><?=$status[$i]['event_date'] ?></td>
                <td><?php echo $status[$i]['event_time']; ?></td>
                <td><?=$status[$i]['event_place'] ?></td>
                <td><?=$status[$i]['event_type'] ?></td>
                <td>
                    <a href="purchaseTicket.php?id=<?=$status[$i]['id']?>"> Buy Tickets </a> 
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>