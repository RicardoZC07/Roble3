<?php
session_start();

// Verifica si los datos del formulario están presentes
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibe los datos del formulario de checkout
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];

    // Simula el proceso de pago y pedido
    // Aquí puedes agregar lógica para procesar el pago con un servicio real.

    // Imprimir los detalles del pedido
    echo "<h1>Pedido confirmado</h1>";
    echo "<h3>Gracias por tu compra, {$name}!</h3>";
    echo "<p>En breve recibirás un correo de confirmación.</p>";

    // Mostrar el resumen de los productos
    echo "<h2>Resumen de tu pedido:</h2>";
    foreach ($_SESSION['cart'] as $product_id => $product_info) {
        echo "<div>{$product_info['name']} - Cantidad: {$product_info['quantity']} - Precio: \$" . number_format($product_info['price'], 2) . "</div>";
    }

    // Limpiar el carrito
    unset($_SESSION['cart']);
    echo "<p>Tu carrito ha sido vaciado.</p>";
    echo '<a href="welCatalogo.php" class="back-button">Volver al catálogo</a>';
} else {
    echo "<h2>Error: No se enviaron datos del formulario.</h2>";
}
?>
