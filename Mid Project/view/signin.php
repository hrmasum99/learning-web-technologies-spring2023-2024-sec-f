<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signin Page</title>
</head>
<body>
    <table width="25%" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/signinCheck.php" enctype="">
                <fieldset>
                    <legend><b>SIGN IN</b></legend>
                    User Name:<input type="text" name="username" value="" required/> <br><br>
                    Password :<input type="password" name="password" value="" required/>
                    <hr>
                    User Type:<select name="usertype" required>
                                    <option value="" selected disabled>Select User Type</option>
                                    <option value="Host">Host</option>
                                    <option value="Customer">Customer</option>
                                    <option value="Admin">Admin</option>
                    </select> <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="signin" value="Sign In" /> <br><br>
                    <a href="forgotPassword.php">Forgot Password?</a><br> 
                    <p>Don't have an account? <a href="signup.php">Sign Up Now</a></p>
                    <p>Or, back to <a href="home.php">Home</a></p>
                </fieldset>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
