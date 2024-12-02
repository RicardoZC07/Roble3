<?php
session_start();
include('conexion.php');

// Verifica si el carrito está vacío
if (empty($_SESSION['cart'])) {
    echo "<h2>Tu carrito está vacío.</h2>";
    echo '<a href="welCatalogo.php" class="back-button">Volver al catálogo</a>';
    exit;
}

// Muestra los productos en el carrito
$total = 0;
$product_summary = "";
foreach ($_SESSION['cart'] as $product_id => $product_info) {
    $product_total = $product_info['price'] * $product_info['quantity'];
    $product_summary .= "
    <div class='cart-item'>
        <h3>{$product_info['name']}</h3>
        <p>Precio: \$" . number_format($product_info['price'], 2) . "</p>
        <p>Cantidad: {$product_info['quantity']}</p>
        <p>Total: \$" . number_format($product_total, 2) . "</p>
    </div>";

    $total += $product_total;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="styles/shop.css">
</head>
<body>
    <div class="checkout-container">
        <h1 class="checkout-title">Resumen de tu pedido</h1>

        <div class="cart-summary">
            <?php echo $product_summary; ?>
            <div class="total-price">
                <h3>Total: \$<?php echo number_format($total, 2); ?></h3>
            </div>
        </div>

        <h2 class="checkout-form-title">Información de facturación y envío</h2>
        <form action="process_order.php" method="POST" class="checkout-form">
            <div class="form-group">
                <label for="name">Nombre completo:</label>
                <input type="text" id="name" name="name" required class="form-input">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required class="form-input">
            </div>
            <div class="form-group">
                <label for="address">Dirección de envío:</label>
                <input type="text" id="address" name="address" required class="form-input">
            </div>
            <div class="form-group">
                <label for="city">Ciudad:</label>
                <input type="text" id="city" name="city" required class="form-input">
            </div>
            <div class="form-group">
                <label for="zip">Código Postal:</label>
                <input type="text" id="zip" name="zip" required class="form-input">
            </div>
            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone" required class="form-input">
            </div>
            <button type="submit" class="checkout-button">Confirmar y pagar</button>
        </form>

        <a href="shop.php" class="back-button">Volver al carrito</a>
    </div>
</body>
</html>
