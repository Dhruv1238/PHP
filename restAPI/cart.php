<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website - Shopping Cart</title>
</head>

<body>
    <h1>Shopping Cart</h1>
    <ul>
        <?php
        if (isset($_SESSION['cart'])) {
            // Fetch product data from the API (simulated)
            $url = "http://localhost/PHP/restAPI/api.php"; // Adjust the parameters as needed
        
            $client = curl_init();
            curl_setopt_array($client, [
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $url
            ]);
            $products = json_decode(curl_exec($client), true);
            curl_close($client);

            foreach ($_SESSION['cart'] as $productId) {
                $product = array_filter($products, function ($p) use ($productId) {
                    return $p['id'] == $productId;
                });
                $product = reset($product);
                echo '<li>' . $product['name'] . ' - $' . $product['price'] . '</li>';
            }
        } else {
            echo '<li>Your cart is empty.</li>';
        }
        ?>
    </ul>
    <p><a href="index.php">Continue Shopping</a></p>
    <p><a href="checkout.php">Proceed to Checkout</a></p>
</body>

</html>