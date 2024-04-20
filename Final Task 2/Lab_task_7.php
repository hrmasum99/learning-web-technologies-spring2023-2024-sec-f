<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
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
    <legend><b>PROFILE PICTURE</b></legend>
    <form method="post" action="">
        User Id <input type="text" id="uId" name="uId" value=""/> <br> <br>
        Picture <input type="file" id="propic" name="propic"/>
        <hr>
        <input type="button" name="submit" value="submit" onclick="proPicCheck()"/> 
        <h4 id="message"></h4>
        <br><br>
    </fieldset>
    </form>
</body>
</html>
