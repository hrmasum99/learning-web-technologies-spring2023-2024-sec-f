<?php 
    if(!isset($_COOKIE['flag'])){
        header('location: signin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Venue</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/venueReq.js"></script>

<style>
.button {
    width: auto;
    padding: 10px 20px;
    background-color: #224bd2;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
    text-align: center;
    text-decoration: none;
    /* display: inline-block; */
    font-size: 16px; 
    transition-duration: 0.4s;
    box-shadow: 0 9px #999;
}

.button:hover {
    background-color: #0415ce;
}

.button:active {
    background-color: #0415ce; 
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}
</style>
</head>
<body>

<div class="auth">
    <table width="37%" border="0" align="center">
        <tr>
            <td>
                <form id="newvenue" method="post" action="../controller/venueController.php" enctype="">
                    <fieldset>
                        <legend><b>Venue</b></legend>
                        Venue Name:     <input type="text" id="venue_name" name="venue_name" value="" /><br>
                                        <div id="error_vname"></div><hr>
                        Location:       <input type="text" id="location" name="location" value="" /><br>
                                        <div id="error_location"></div><hr>
                        Capacity:       <input type="number" id="capacity"name="capacity" value="" /><br>
                                        <div id="error_capacity"></div><hr>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="reset" value="Reset" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" name="submit" onclick="venue()" class="button">Submit</button>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
