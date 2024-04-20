<html>
<head>
<title>Email Form</title>
<script src="script.js"></script>
<style>
            /* Style the fieldset */
            fieldset {
                width: 250px; /* Define width */
            }
            hr {
            /*border: 1px solid black; /* Set a solid black border with a thickness of 4 pixels */
            width: 250px;
            margin: 15px 0; /* Add margin for spacing */
        }
        </style>
</head>
<body>

    <form method="post">
 
        <fieldset>
            <legend><b>EMAIL</b></legend>
            <table> <tr> <td>
            <input type="email" id="email" name="email" value="" onkeyup="emailCheck()" > </td>
            <td><button title="hint: sample@example.com">i</button></td>  
        </tr> <tr> <td> <hr>
        <input type="button" name="submit" value="submit" onclick="emailCheck()" > </td></tr>
            <tr><td><h3 id="message"></h3></td></tr>
        </table>
    </fieldset>
</form>

</body>
</html>
