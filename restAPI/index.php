<?php
session_start();

// URL for REST API file 
$url = "http://localhost/PHP/restAPI/api.php";


// CURL Code for REST API
$client = curl_init();
curl_setopt_array($client, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
]);
$products = json_decode(curl_exec($client), true);

// ADD TO CART Action
if (!is_null($products)) {
    if (isset($_GET['action']) && $_GET['action'] === 'add_to_cart' && isset($_GET['id'])) {
        $productId = $_GET['id'];
        $_SESSION['cart'][] = $productId;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
</head>

<body>
    <h1>Product Display Page</h1>

    <?php
    // Check if $products is not null before using foreach
    if (!is_null($products)) {
        echo '<ul>';
        foreach ($products as $product) : ?>
            <li>
                <?php echo $product['name']; ?> -
                $
                <?php echo $product['price']; ?>
                <a href="?action=add_to_cart&id=<?php echo $product['id']; ?>">Add to Cart</a>
            </li>
    <?php endforeach;
        echo '</ul>';
    } else {
        echo '<p>No products available.</p>';
    }
    ?>

    <p><a href="cart.php">View Cart</a></p>
</body>

</html>