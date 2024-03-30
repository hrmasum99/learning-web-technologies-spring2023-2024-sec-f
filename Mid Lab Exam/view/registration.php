<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <fieldset>
    <legend><b>Registration Form</b></legend>
    <form method="post" action="../controller/regCheck.php" enctype="">
        First Name: <input type="text" name="firstname" value=""/><br><br>
        
        Last Name:  <input type="text" name="lastname" value=""/><br><br>
        
        Date of Birth:<input type="date" name="dob" value=""/><br><br>
        
        Gender: <!-- with required validation -->
            <input type="radio" name="gender" value="" required/> Male
            <input type="radio" name="gender" value="" required/> Female
        <br><br>
        Phone:  <input type="number" name="phone" min="0" value="" /><br><br>
        Email:  <input type="email" name="email" value="" /><br><br>
        
        Password:   <input type="password" name="password" value="" /><br><br>

        Confirm Password:   <input type="password" name="confirm_password" value="" /><br><br>
        
        <button type="submit">Register</button>
    </form>
    </fieldset>
</body>
</html>
