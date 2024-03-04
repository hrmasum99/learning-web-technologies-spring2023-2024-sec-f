<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        /* Style the fieldset */
        fieldset {
            width: 400px; /* Define width */
        }
        /* Style the HR element */
        hr {
            width: 400px; /* Set width to fill the container */
            margin: 10px 0; /* Add margin for spacing */
        }
    </style>
</head>
<body>
    <table style="width: 720px;" border="1">
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
                <fieldset>
                    <legend>LOGIN</legend>
                    User Name:<input type="text" id="username" name="username"> <br>
                    Password :<input type="password" id="password" name="password">
                    <hr>
                    <input type="checkbox" id="remember_me" name="remember_me">Remember me
                    <br> <br>
                    <button type="submit">Submit</button> <a href="forgot_password.html">Forgot Password?</a><br>   
                </fieldset>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                 Copyright &copy; 2024
            </td>
        </tr>
    </table>
</body>
</html>
