<?php
    require_once 'header.php';
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    $events = getEventname();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ticket Purchasing</title>
</head>
<body>
    <fieldset>
    <legend><b>Purchase Ticket</b></legend>
    <form method="post" action="../controller/ticketpurchaseController.php" enctype="">
        Select Event:<select name="event_name">
        <?php for($i=0; $i<count($events); $i++){ ?>
            <option value ="<?php echo $events[$i]['event_name'];?>"><?php echo $events[$i]['event_name'];?></option>
        <?php } ?> 
        </select><br><br>
        Ticket Type:<select name="ticket_type" required> 
            <option value="" selected disabled> Select ticket type </option>
            <option value="General Pass">General Pass </option>
            <option value="VIP Pass">VIP Pass </option>
        </select><br><br>
        Quantity:<input type="number" name="quantity" min="0" value="" required /><br><br>
        Discount Coupon:<input type="text" name="discount_coupon" value="" /><br><br>
        <input type="checkbox" name="terms_conditions" value="" required />I agree to the terms and conditions<br><br>
        <input type="submit" name="purchase" value="Purchase" />
    </fieldset>
    </form>
</body>
</html>
<?php
    require_once 'footer.php';
?>