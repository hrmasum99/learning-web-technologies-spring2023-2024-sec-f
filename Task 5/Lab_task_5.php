<!DOCTYPE html>
<html>  
<head>  
    <title>DEGREE FORM</title>
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
                    <input type="checkbox" name="check[]" value="SSC" <?php 
                    if(isset($_POST['check']) && in_array('SSC', $_POST['check'])) echo "checked"; ?>/>SSC
                    <input type="checkbox" name="check[]" value="HSC" <?php 
                    if(isset($_POST['check']) && in_array('HSC', $_POST['check'])) echo "checked"; ?>/>HSC
                    <input type="checkbox" name="check[]" value="BSc" <?php 
                    if(isset($_POST['check']) && in_array('BSc', $_POST['check'])) echo "checked"; ?>/>BSc
                    <input type="checkbox" name="check[]" value="MSc" <?php 
                    if(isset($_POST['check']) && in_array('MSc', $_POST['check'])) echo "checked"; ?>/>MSc   
                </td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
                <td><input  type="submit" name="submit" value="Submit"/></td>
            </tr>
        </table>
    </fieldset>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['check']) && count($_POST['check']) >= 2) {
            echo "Selected degrees: " . implode(", ", $_POST['check']);
        } else {
            echo "Please select at least two degrees.";
        }
    }
    ?>
</body>
</html>
