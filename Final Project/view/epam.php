<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Promotion and Marketing</title>
    <link rel="stylesheet" href="../assets/css/epam.css"/>
    <!-- <script src="../js/epam.js" ></script> -->
</head>
<body>
    <table border="1" align="center" cellpadding="10" cellspacing="0">
        <tr>
            <td colspan="2">
                <marquee behavior="alternate"><h1 style="text-align: left;">Event Promotion and Marketing</h1></marquee>
            </td>
        </tr>
        <tr>
            <td>
                <form method="post" action="../controller/epam-c.php" onsubmit="return validateForm()">
                    <fieldset>
                        <legend><b>Email Promotion</b></legend>
                        <label for="email">Recipient's Email:</label><br>
                        <input type="email" id="email" name="email" placeholder="abc@example.com" required><br><br>
                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
                        <div id="error" style="color: red;"></div><!-- Placeholder for error message -->
                        <div id="result" style="color: green;"></div><!-- Placeholder for result message -->
                        <input type="submit" value="Send Email">
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <h2>Social Media Integration</h2>
                <p>Share this event on social media:</p>
                <!-- Add social media icons and links here -->
                <a href="http://www.facebook.com/s.m.deep137"><img src="../assets/img/facebook_icon.gif" alt="Facebook"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"><img src="../assets/img/twitter_icon.gif" alt="Twitter"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"><img src="../assets/img/instagram_icon.gif" alt="Instagram"></a>
            </td>
        </tr>
        <tr>
            <td>
                <h2>Customizable Event Pages</h2>
                <p>Create personalized event pages with our easy-to-use editor:</p>
                
                <a href="event_page_editor.php">Create Event Page</a>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <div class="back-btn">
                    <a href="../view/profile.php">Back to Home</a>
                </div>
            </td>
        </tr>
    </table>

</body>
</html>
