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
    <script src="../assets/js/script.js"></script>
</head>
<body>
        <fieldset>
                    <legend style="text-align: center;"><b>SP Management</b></legend>

        <table class="list_table" border=1>
        <thead>
            <tr>
                <th>SP ID</th>
                <th>ROLE</th>
                <th>SP NAME</th>
                <th>SP BIO</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0; $i<count($status); $i++){?>
            <tr>
                <td><?php echo $status[$i]['id']; ?></td>
                <td><?=$status[$i]['role'] ?></td>
                <td><?=$status[$i]['name'] ?></td>
                <td><?=$status[$i]['bio'] ?></td>
                <td>
                    <a href="updatesp.php?id=<?=$status[$i]['id']?>"> Edit </a> 
                </td>
                <td>
                    <a href="#" onclick="deleteDataSP(<?=$status[$i]['id']?>)">Delete</a>
                    <!-- <a href="../controller/spDeleteController.php?id=<?=$status[$i]['id']?>" onclick="deleteData()"> Delete </a>  -->
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
            </fieldset>
</body>
</html>