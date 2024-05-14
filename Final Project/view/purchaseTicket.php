<?php
    //require_once 'header.php';
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: signin.php');
    }
    $events = getEventname();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ticket Purchasing</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>

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
    <fieldset>
    <legend><b>Purchase Ticket</b></legend>
    <form id="purchaseTicket" method="post" action="../controller/ticketpurchaseController.php" enctype="">
        Select Event:<select id="event_name" name="event_name">
        <option value="" selected disabled>Select event</option>
        <?php for($i=0; $i<count($events); $i++){ ?>
            <option value ="<?php echo $events[$i]['event_name'];?>"><?php echo $events[$i]['event_name'];?></option>
        <?php } ?> 
        </select><br>
        <div id="error_ename"></div><hr>
        Ticket Type:<select id="ticket_type" name="ticket_type"> 
            <option value="" selected disabled> Select ticket type </option>
            <option value="General Pass">General Pass </option>
            <option value="VIP Pass">VIP Pass </option>
        </select>&nbsp; <div id ="ptext">Extra 75% inclued for each VIP PASS</div><br>
        <div id="error_ttype"></div><hr>
        Quantity:<input type="number" id="ticket_quantity" name="quantity" min="0" value=""/><br>
        <div id="error_tquantity"></div><hr>
        Discount Coupon:<input type="text" id ="discount_coupon" name="discount_coupon" value="" />&nbsp; <div id ="ptext">If you have any coupon</div><hr><br>
        <input type="checkbox" id="tcheck" name="terms_conditions"/>I agree to the terms and conditions<br>
        <div id="error_check"></div><hr>
        <!-- <input type="submit" name="purchase" value="Purchase" /> -->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="reset" value="Reset" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" name="submit" onclick="purchaseTicket()" class="button">Purchase</button>
    </fieldset>
    </form>
</body>
</html>
<?php
    //require_once 'footer.php';
?>