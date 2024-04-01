<!DOCTYPE html>
<html>
<head>
    <title>Gender</title>
    <style>
        /* Style the fieldset */
        fieldset {
            width: 250px; /* Define width */
        }
        hr {
            width: 250px; /* Set width to fill the container */
            margin: 10px 0; /* Add margin for spacing */
        }
    </style>
</head>
<body>

<form action="" method="post">
<fieldset>
    <legend><b>GENDER</b></legend>
    <table>
        <tr>
            <td>
                <input type="radio" name="gender" value="Male" <?php 
                if(isset($_POST['gender']) && $_POST['gender']=="Male") echo "checked"; 
                ?>/>Male
                <input type="radio" name="gender" value="Female" <?php 
                if(isset($_POST['gender']) && $_POST['gender']=="Female") echo "checked"; 
                ?>/>Female
                <input type="radio" name="gender" value="Other" <?php 
                if(isset($_POST['gender']) && $_POST['gender']=="Other") echo "checked"; 
                ?>/>Other
                
            </td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Submit"/></td>
        </tr>
    </table>
    </fieldset>
</form>

<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["gender"])) {
        $gender = $_POST["gender"];
        echo "Selected gender: $gender";
    } else {
        echo "At least one gender must be selected.";
    }
}
?>

</body>
</html>

