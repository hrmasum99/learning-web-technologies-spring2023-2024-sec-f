<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: signin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Search Events</title>
<link rel="stylesheet" href="../assets/css/style.css">
<script src="../assets/js/script.js"></script>
<script src="../assets/js/searchdataC.js"></script>

<style>
.button {
    background-color: white;
    border: 2px solid #04AA6D;
    border-radius: 15px;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    box-shadow: 0 9px #999;
}

.button:hover {
  background-color: #04AA6D;
  color: white;
}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>
<section>
    <fieldset>
        <legend><b>Search Events</b></legend>
        <form method="post" action="../controller/searchController.php" enctype="multipart/form-data" onsubmit="searchEventC(event)">
            Keyword:<input type="text" id="keyword" name="keyword" value=""><br><br>
            Date:<input type="date" id="date" name="date" value=""><br><br>
            Type:<select id="type" name="type">
                <option value="">All</option>
                <option value="Music">Music</option>
                <option value="Business">Business</option>
                <option value="Wedding">Wedding</option>
            </select><br><br>
            <button class="button" type="submit" name="submit">Search</button>
            <!-- <button type="submit" name="submit" style="background-color: #224bd2; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;" onmouseover="this.style.backgroundColor='#0415ce'" onmouseout="this.style.backgroundColor='#224bd2'">Search</button> -->

        </form>
    </fieldset>
</section>

<section>
    <h1>Event List</h1>
    <table id="display_event" class="list_table" border=1>
        <thead>
            <tr>
                <th>EVENT NAME</th>
                <th>EVENT DATE</th>
                <th>EVENT TIME</th>
                <th>EVENT PLACE</th>
                <th>EVENT TYPE</th>
                <th>AMOUNT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</section>


</body>
</html>
