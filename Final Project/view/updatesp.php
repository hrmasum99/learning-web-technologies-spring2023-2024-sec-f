<?php 
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: signin.php');
    }
    $id =  $_GET['id'];

    $result = getSPById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>New SP</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/venueReq.js"></script>

<style>
.button {
    width: auto;
    padding: 10px 20px;
    background-color: #224bd2;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
    text-align: center;
    text-decoration: none;
    /* display: inline-block; */
    font-size: 16px; 
    transition-duration: 0.4s;
    box-shadow: 0 9px #999;
}

.button:hover {
    background-color: #0415ce;
}

.button:active {
    background-color: #0415ce; 
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}
</style>
</head>
<body>

<div class="auth">
    <table width="37%" border="0" align="center">
        <tr>
            <td>
                <form id="newsp" method="post" action="../controller/spUpdateController.php" enctype="">
                <fieldset>
                        <legend><b>UPDATE Speaker & Performer Information</b></legend>
                        ID:             
                        <input type="text" id="id" name="id" value="<?php echo $result['id']; ?>" /><br>
                        Role:  
                        <select name="role" >
                            <option value="<?php echo $result['role']; ?>" selected disabled>Select Role</option>
                            <option value="Speaker">Speaker</option>
                            <option value="Performer">Performer</option>
                        </select>
                        <div id="error_role"></div><hr><br>

                        Name:       
                        <input type="text" id="name" name="name" value="<?php echo $result['name']; ?>" /><br>
                        <div id="error_name"></div><hr>

                        Bio:        
                        <input type="text" id="bio" name="bio" value="<?php echo $result['bio']; ?>" /><br>
                        <div id="error_bio"></div><hr>

                        <input type="reset" name="reset" value="Reset" />
                        <button type="submit" name="submit" onclick="sp()" class="button">Submit</button>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</div>
</body>
</html>


