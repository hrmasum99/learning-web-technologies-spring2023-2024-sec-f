<?php 
require_once('../model/userModel.php');
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}

$status= getAllSP();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SP List</title>
    <link rel="stylesheet" href="../assets/css/venue_m.css">
</head>
<body>
        <fieldset>
                    <legend style="text-align: center;"><b>List of SPs</b></legend>

        <table class="list_table" border=1>
        <thead>
            <tr>
                <th>SP ID</th>
                <th>Role</th>
                <th>Speaker & Performer name</th>
                <th>Bio </th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0; $i<count($status); $i++){?>
            <tr>
                <td><?php echo $status[$i]['id']; ?></td>
                <td><?=$status[$i]['role'] ?></td>
                <td><?=$status[$i]['name'] ?></td>
                <td><?=$status[$i]['bio'] ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
            </fieldset>
</body>
</html>