<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website - Checkout</title>
</head>

<body>
    <h1>Checkout Page</h1>
    <?php
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        // Perform necessary actions (e.g., create an order, charge the user, etc.)
        echo '<p>Your order has been placed successfully. Thank you for your purchase!</p>';
        // Clear the shopping cart
        $_SESSION['cart'] = [];
    } else {
        echo '<p>Your cart is empty. Add items to the cart before proceeding to checkout.</p>';
    }
    ?>
    <p><a href="index.php">Continue Shopping</a></p>
</body>

</html>