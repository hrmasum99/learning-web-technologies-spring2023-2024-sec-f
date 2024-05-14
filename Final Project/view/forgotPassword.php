<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="auth">
    <table style="width:30%;" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/otpsend.php" enctype="">
                <fieldset>
                    <legend>Forgot Password</legend>
                    Email:<input type="email" name="email" placeholder="i.e. anything@example.com" value="" required/><br>
                    <hr>
                    <input type="submit" name="submit" value="Send OTP" /> <br>
                </fieldset>
            </td>
        </tr>
    </table>
</div>
</body>
</html>

