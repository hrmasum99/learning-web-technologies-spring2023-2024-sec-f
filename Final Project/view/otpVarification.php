<!DOCTYPE html>
<html lang="en">
<head>
    <title>OTP Verification</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="auth">
    <table style="width:30%;" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/otpverify.php" enctype="">
                <fieldset>
                    <p> OTP sent successfully to your email. Please check your inbox or spam.</p>
                    <legend><b>VERIFY OTP</b></legend>
                    OTP:<input type="number" name="otp" min="0" value="" required><br>
                    <hr>
                    <input type="submit" name="submit" value="Verify OTP" />
                </fieldset>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
