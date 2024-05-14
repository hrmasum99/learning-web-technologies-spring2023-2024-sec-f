<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signin Page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <script src="../assets/js/script.js"></script> -->
    <script src="../assets/js/loginRequest.js"></script>

<style>
.button {
    width: 100%;
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
<!-- <div id="error"></div> -->
    <div class="auth">
    <table width="30%" border="0" align="center">
        <tr>
            <td>
                <form id="login" method="post" action="../controller/signinCheck.php" enctype="">
                <fieldset>
                    <legend><b>SIGN IN</b></legend>
                    User Name:<input type="text" id="username" name="username" value="" /> <br>
                    <div id="error_uname"></div><hr>
                    Password :<input type="password" id="password" name="password" value="" />
                    <div id="error_pass"></div><hr>
                    User Type:<select id="usertype" name="usertype" >
                                    <option value="" selected disabled>Select User Type</option>
                                    <option value="Host">Host</option>
                                    <option value="Customer">Customer</option>
                                    <option value="Admin">Admin</option>
                    </select> <br><div id="error_user"></div><hr>
                    <div id="error_check"></div>

                    <!-- <input type="submit" name="signin" value="Sign In" onclick="signin()"/> <br><br> -->
                    <button type="submit" name="submit" onclick="signin()" class="button">Sing In</button> <br><br>
                    <!-- <input type="button" name="submit" value="Sign In" onclick="signin()" /> -->
                    <a class="links" href="forgotPassword.php">Forgot Password?</a><br> 
                    <p>Don't have an account? <a class="links" href="signup.php">Sign Up Now</a></p>
                    <p>Or, back to <a class="links" href="home.php">Home</a></p>
                </fieldset>
            </td>
        </tr>
    </table>
</div>
    </form>
</body>
</html>
