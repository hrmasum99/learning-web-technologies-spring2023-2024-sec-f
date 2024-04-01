<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <table width="100%" border="1">
        <tr>
            <td>
                <b>&emsp;X Company</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   
                <a href="home.php">Home</a> |
                <a href="registration.php">Registration</a> |
                <a href="login.php">Login</a>
            </td>
        </tr>
        <tr>
            <td>
                <h2>Registration Page</h2>
                <form action="#" method="post">
                    <fieldset>
                        <legend>Register</legend>
                        Name:<input type="text" id="name" name="name" required><br><br>
                        Email:<input type="email" id="email" name="email" required><br><br>
                        User Name:<input type="text" id="username" name="username" required><br><br>
                        Password:<input type="password" id="password" name="password" required><br><br>
                        Confirm Password:<input type="password" id="confirm_password" name="confirm_password" required><br><br>
                        Date of Birth:<input type="date" id="dob" name="dob" required><br><br>
                        Gender:
                        <select id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select><br><br>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </fieldset>
                </form>
                <a href="login.php">Already have an account? Login here</a><br>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                Copyright &copy; 2024
            </td>
        </tr>
    </table>
</body>
</html>
