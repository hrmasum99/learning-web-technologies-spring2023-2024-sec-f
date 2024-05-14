<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>

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
    <table width="40%" border="0" align="center">
        <tr>
            <td>
                <fieldset>
                    <legend><b>CHANGE PASSWORD</b></legend>
                    <form id="cngPass" method="POST" action="../controller/passChange.php" enctype="">
                        New Password: <input type="password" id="new_password" name="new_password" ><br>
                        <div id="error_newPass"></div><hr>
                        Retype New Password: <input type="password" id="confirm_password" name="confirm_password" ><br>
                        <div id="error_conPass"></div><hr>
                        <!-- <input type="submit" name="submit" value="Submit" /> -->
                        <button type="submit" name="submit" onclick="cngPass()" class="button">Submit</button>
                    </form>
                </fieldset>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
