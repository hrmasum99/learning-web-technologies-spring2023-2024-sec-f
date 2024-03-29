<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
</head>
<body>
    <table width="30%" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/signupCheck.php" enctype="">
                    <fieldset>
                        <legend><b>SIGNUP</b></legend>
                        Name:               <input type="text" name="name" value="" required><br><br>
                        Email:              <input type="email" name="email" value="" required><br><br>
                        Phone:              <input type="number" name="phone" min="0" value="" required><br><br>
                        User Name:          <input type="text" name="username" value="" required><br><br>
                        Password:           <input type="password" name="password" value="" required><br><br>
                        Confirm Password:   <input type="password" name="confirm_password" value="" required><br><br>
                        Gender:             <select name="gender" required>
                                            <option value="" selected disabled>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="other">Other</option>
                                            </select><br><br>
                        Date of Birth:      <input type="date" name="dob" value="" required><br><br>
                        User Type:          <select name="usertype" required>
                                            <option value="" selected disabled>Select User Type</option>
                                            <option value="Host">Host</option>
                                            <option value="Customer">Customer</option>
                                            </select> <br><br>
                        <input type="checkbox" name="check[]" value="" required/>I agree to the <a href="termsAndConditions.php">terms and conditions</a> <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="reset" value="Reset" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="submit" value="Submit" /><br>
                        <p>Already have an account! <a href="signin.php">Sign In</a> Or, back to <a href="home.php">Home</a></p>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
