<?php
session_start();
include('conexion.php');

// Si el carrito está vacío, muestra un mensaje
if (empty($_SESSION['cart'])) {
    echo "<h2>Tu carrito está vacío.</h2>";
    echo '
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito</title>
    <link rel="stylesheet" href="styles/shop.css">
</head>
<body>
   
    
    <a href="welCatalogo.php" class="back-button">Volver al catálogo</a>
</body>
</html>';
    exit;
}

// Muestra los productos en el carrito
$total = 0;
echo "<h1>Productos en tu carrito</h1><div class='cart-container'>";
foreach ($_SESSION['cart'] as $product_id => $product_info) {
    // Total por producto
    $product_total = $product_info['price'] * $product_info['quantity'];

    echo "
    <div class='cart-item'>
        <div class='cart-item-image'>
            <img src='data:image/jpeg;base64,{$product_info['image']}' alt='{$product_info['name']}' class='cart-image'>
        </div>
        <div class='cart-item-details'>
            <h3 class='cart-item-name'>{$product_info['name']}</h3>
            <p class='cart-item-price'>Precio: \$" . number_format($product_info['price'], 2) . "</p>
            <p class='cart-item-quantity'>Cantidad: {$product_info['quantity']}</p>
            <p class='cart-item-total'>Total: \$" . number_format($product_total, 2) . "</p>
            <form action='remove_from_cart.php' method='POST' class='remove-form'>
                <input type='hidden' name='product_id' value='{$product_id}'>
                <button type='submit' class='remove-button'>Eliminar</button>
            </form>
        </div>
    </div>
    ";

    // Calcula el total general
    $total += $product_total;
}

echo "<div class='cart-summary'><h3>Total: \$" . number_format($total, 2) . "</h3></div>";
echo "<a href='checkout.php' class='checkout-button'>Ir a pagar</a>";
echo "</div>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito</title>
    <link rel="stylesheet" href="styles/shop.css">
</head>
<body>
   
    
    <a href="welCatalogo.php" class="back-button">Volver al catálogo</a>
</body>
</html>
