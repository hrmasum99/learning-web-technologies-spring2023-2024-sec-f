<?php 
require_once('../model/userModel.php');
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}

$status= getAllVenue();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Venue List</title>
    <link rel="stylesheet" href="../assets/css/venue_m.css">
</head>
<body>
        <fieldset>
                    <legend style="text-align: center;"><b>List of Venues</b></legend>

        <table class="list_table" border=1>
        <thead>
            <tr>
                <th>VENUE ID</th>
                <th>VENUE NAME</th>
                <th>LOCATION</th>
                <th>CAPACITY</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0; $i<count($status); $i++){?>
            <tr>
                <td><?php echo $status[$i]['id']; ?></td>
                <td><?=$status[$i]['venue_name'] ?></td>
                <td><?=$status[$i]['location'] ?></td>
                <td><?=$status[$i]['capacity'] ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
            </fieldset>
</body>
</html>