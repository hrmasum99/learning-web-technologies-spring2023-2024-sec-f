<!DOCTYPE html>
<html>  
<head>  
    <title>DEGREE FORM</title>
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
    <form method="post" action="" enctype="multipart/form-data">
        <fieldset>
        <legend><b>DEGREE</b></legend> 
        <table>
            <tr>
                <td>
                    <input type="checkbox" id="SSC" name="check[]" value="SSC" />SSC
                    <input type="checkbox" id="HSC" name="check[]" value="HSC" />HSC
                    <input type="checkbox" id="BSc" name="check[]" value="BSc" />BSc  
                </td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
            <td>
                <input type="button" name="submit" value="submit" onclick="degreeCheck()"/> 
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
