<!DOCTYPE html>
<html lang="en">
<head>
<title>Search Events</title>
</head>
<body>
    <fieldset>
    <legend><b>Search Events</b></legend>
    <form method="post" action="displayEvents.php" enctype="">
        Keyword:<input type="text" name="keyword" value=""/><br><br>
        Date:<input type="date" name="date" value=""/><br><br>
        Type:<select name="type">
            <option value="">All</option>
            <option value="Music">Music</option>
            <option value="Business">Business</option>
            <option value="Wedding">Wedding</option>
        </select><br><br>
        
        <input type="submit" value="Search">
    </form>
    </fieldset>
</body>
</html>
