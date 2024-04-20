<!DOCTYPE html>
<html>
<head>
    <title>Blood Group</title>
    <script src="script.js"></script>
    <style>
        /* Style the fieldset */
        fieldset {
            width: 250px; /* Define width */
        }
        /* Style the HR element */
        hr {
            width: 250px; /* Set width to fill the container */
            margin: 10px 0; /* Add margin for spacing */
        }
    </style>
</head>
<body>
    <fieldset>
    <legend><b>BLOOD GROUP</b></legend>
    <form method="post" action="">
        <select id="Blood" name="blood_group">
            <option value=""></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <hr>
        <input type="button" name="submit" value="submit" onclick="bloodGroupCheck()"/> 
        <h4 id="message"></h4>
        <br><br>
    </fieldset>
    </form>
</body>
</html>
