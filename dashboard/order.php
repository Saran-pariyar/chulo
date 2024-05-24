<?php 

session_start();

// $food = $_SESSION['foodname'];
// echo $_SESSION['username'];
echo $_SESSION["price"];



?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Card</title>
    <link rel="stylesheet" href="../styles/order.css">
</head>
<body>
    <div class="order-card">
        <h2>Place Your Order</h2>
        <form action="submit_order.php" method="post">
            <div class="form-group">
                <label for="foodname">Food Name:</label>
                <input type="text" id="foodname" name="foodname" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" required>
            </div>
            <div class="form-group">
                <label for="buyername">Buyer Name:</label>
                <input type="text" id="buyername" name="buyername" required>
            </div>
            <button type="submit">Submit Order</button>
        </form>
    </div>
</body>
</html>
