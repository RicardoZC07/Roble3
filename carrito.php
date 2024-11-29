<?php
session_start();

// Verifica si el carrito existe en la sesión
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Verifica si se recibió un ID de producto
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Agrega el producto al carrito
    if (!in_array($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $product_id;
        $message = "Producto agregado al carrito.";
    } else {
        $message = "El producto ya está en el carrito.";
    }
} else {
    $message = "No se especificó un producto.";
}

// Redirige al usuario a una página (puede ser el catálogo o una vista del carrito)
header("Location: welCatalogo.php?message=" . urlencode($message));
exit;
?>
