<html>
<head>
<title>Email Form</title>
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
            <input type="email" name="email" placeholder="i.e. anything@example.com" value="<?php
                if (isset($_POST["submit"])){
                    $email = $_POST["email"];
                    if (empty($email)) {
                        echo "Cannot be empty";
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "Invalid email address format.";
                    } else {
                        echo "Email: $email";
                    }
                } //else {
                    //echo "";
                //}
            ?>" > 
            <button>i</button> </td>  
        </tr> <tr> <td> <hr>
        <input type="submit" name="submit"> </td> </tr>
        </table>
    </fieldset>
</form>

</body>
</html>
