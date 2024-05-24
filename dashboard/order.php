<?php 
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['foodname'])) {
    // If not, redirect to the login page
    header("Location: ../index.php");
    exit();
}

$username = $_SESSION['username'];
$foodname = $_SESSION['foodname'];
$price = $_SESSION['price'];
$image = $_SESSION['image'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="../styles/order.css">
</head>
<body>
    <div class="order-container">
        <h1>Place Your Order</h1>
        <img src="<?php echo $image; ?>" alt="<?php echo $foodname; ?>" class="food-image">
        <div class="order-details">
            <p>Food Name: <strong> <?php echo $foodname; ?> </strong></p>
            <p>Price:  <strong>Rs <?php echo $price; ?> </strong></p>
            <p>Buyer Name: <strong> <?php echo $username; ?> </strong></p>
        </div>
        <form action="submit_order.php" method="post">
            <div class="form-group quantity-group">
                <label for="quantity" id="quantity-label">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1" required>
            </div>
            <input type="hidden" name="foodname" value="<?php echo $foodname; ?>">
            <button type="submit">Submit Order</button>
        </form>
    </div>
</body>
</html>
