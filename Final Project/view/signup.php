<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
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
    <!-- <div id="error"></div> -->
<div class="auth">
    <table width="37%" border="0" align="center">
        <tr>
            <td>
                <form id="form" method="post" action="../controller/signupCheck.php" enctype="">
                    <fieldset>
                        <legend><b>SIGNUP</b></legend>
                        Name:               <input type="text" id="name" name="name" value="" /><br>
                                            <div id="error_name"></div><hr>
                        Email:              <input type="email" id="email" name="email" value="" /><br>
                                            <div id="error_email"></div><hr>
                        Phone:              <input type="text" id="phone"name="phone" value="" /><br>
                                            <div id="error_phone"></div><hr>
                        User Name:          <input type="text" id="username" name="username" value="" /><br>
                                            <div id="error_uname"></div><hr>
                        Password:           <input type="password" id="password" name="password" value="" /><br>
                                            <div id="error_pass"></div><hr>
                        Confirm Password:   <input type="password" id="confirm_password" name="confirm_password" value="" /><br>
                                            <div id="error_conpass"></div><hr>
                        Gender:             <select id="gender" name="gender" >
                                            <option value="" selected disabled>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="other">Other</option>
                                            </select><br>
                                            <div id="error_gender"></div><hr>
                        Date of Birth:      <input type="date" id="dob" name="dob" value="" /><br>
                                            <div id="error_dob"></div><hr>
                        User Type:          <select id="usertype" name="usertype" >
                                            <option value="" selected disabled>Select User Type</option>
                                            <option value="Host">Host</option>
                                            <option value="Customer">Customer</option>
                                            </select> <br>
                                            <div id="error_user"></div><hr>
                        <input type="checkbox" id="check" name="check" />I agree to the 
                        <a class="links" href="termsAndConditions.php">terms and conditions</a> <br><div id="error_check"></div><hr>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="reset" value="Reset" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <!-- <input type="submit" name="submit" value="Submit" onclick="signup()"/><br> -->
                        <button type="submit" name="submit" onclick="signup()" class="button">Submit</button>
                        <!-- <input type="button" name="submit" value="Sign Up" onclick="signup()" /> -->
                        <p>Already have an account! <a class="links" href="signin.php">Sign In</a> 
                        Or, back to <a class="links" href="home.php">Home</a></p>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
