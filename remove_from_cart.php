<?php
session_start();

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Buscar y eliminar el producto del carrito
    if (($key = array_search($product_id, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
        $message = "Producto eliminado del carrito.";
    } else {
        $message = "El producto no estaba en el carrito.";
    }
} else {
    $message = "No se especificó un producto.";
}

// Redirigir a la página del carrito con el mensaje
header("Location: shop.php?message=" . urlencode($message));
exit;
?>
