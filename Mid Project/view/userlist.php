<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    $users = getAlluser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Users list</title>
</head>
<body>
        <h1>Users List</h1>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>PHONE</td>
                <td>USER NAME</td>
                <td>PASSWORD</td>
                <td>GENDER</td>
                <td>DOB</td>
                <td>USER TYPE</td>
                <td>action</td>
            </tr>
            <?php for($i=0; $i<count($users); $i++){?>
            <tr>
                <td><?php echo $users[$i]['uID']; ?></td>
                <td><?php echo $users[$i]['name']; ?></td>
                <td><?php echo $users[$i]['email']; ?></td>
                <td><?php echo $users[$i]['phone']; ?></td>
                <td><?=$users[$i]['username'] ?></td>
                <td><?=$users[$i]['password'] ?></td>
                <td><?=$users[$i]['gender'] ?></td>
                <td><?=$users[$i]['dob'] ?></td>
                <td><?=$users[$i]['usertype'] ?></td>
                <td>
                    <a href="updateuser.php?id=<?=$attendees[$i]['uID']?>"> Edit </a> |
                    <a href="deleteuser.php?id=<?=$attendees[$i]['uID']?>"> Delete </a> 
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>