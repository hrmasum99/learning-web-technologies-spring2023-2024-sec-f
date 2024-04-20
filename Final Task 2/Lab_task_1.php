<html>
<head>
<title>Name Form</title>
<script src="script.js"></script>
<style>
            /* Style the fieldset */
            fieldset {
                width: 250px; /* Define width */
            }
            hr {
            /*border: 1px solid black; /* Set a solid black border with a thickness of 4 pixels */
            width: 250px;
            margin: 10px 0; /* Add margin for spacing */
        }
        </style>
</head>
<body>

    <form method="post">
 
        <fieldset>
            <legend><b>NAME</b></legend>
            <table> <tr> <td>
            <input type="text" id="name" name="name" value="" onkeyup="nameCheck()" /> 
        </td> </tr> 
        <tr> <td> <hr>
        <input type="button" name="submit" value="submit" onclick="nameCheck()" /></td></tr>
        <tr><td><h1 id="message"></h1></td></tr>
        </table>
    </fieldset>
</form>


</body>
</html>
