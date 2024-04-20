<html>
<head>
    <title>Date of Birth Form</title>
    <script src="script.js"></script>
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
        <legend><b>DATE OF BIRTH</b></legend>
        <table>
            <tr>
                <td>&nbsp; &nbsp;  dd &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; mm &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; yyyy</td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="day" name="day" value="" style="width: 50px;">
                    /
                    <input type="text" id="month" name="month" value="" style="width: 50px;">
                    /
                    <input type="text" id="year" name="year" value="" style="width: 70px;">
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                <input type="button" name="submit" value="submit" onclick="checkdate()"/> 
                </td>
            </tr>
            <tr>
                <td>
                <h4 id="message"></h4>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
