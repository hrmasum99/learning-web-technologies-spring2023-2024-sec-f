<html>
<head>
    <title>Date of Birth Form</title>
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
                    <input type="text" name="day" value="<?php echo isset($_POST["submit"]) ? $_POST["day"] : ''; ?>" style="width: 50px;">
                    /
                    <input type="text" name="month" value="<?php echo isset($_POST["submit"]) ? $_POST["month"] : ''; ?>" style="width: 50px;">
                    /
                    <input type="text" name="year" value="<?php echo isset($_POST["submit"]) ? $_POST["year"] : ''; ?>" style="width: 70px;">
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
if (isset($_POST["submit"])) {
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];

    if (empty($day) || empty($month) || empty($year)) {
        echo "Date cannot be empty";
    } else {
        $dob = "$day/$month/$year";
        $date_parts = explode('/', $dob);
        if (count($date_parts) != 3 || !checkdate($date_parts[1], $date_parts[0], $date_parts[2])) {
            echo "Invalid date format";
        } elseif ($day < 1 || $day > 31) {
            echo "Day must be between 1 and 31";
        } elseif ($month < 1 || $month > 12) {
            echo "Month must be between 1 and 12";
        } elseif ($year < 1953 || $year > 1998) {
            echo "Year must be between 1953 and 1998";
        } else {
            echo "Your Date of Birth is: $dob";
        }
    }
}
?>

</body>
</html>
