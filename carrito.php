<?php
session_start();
include('conexion.php');

// Verifica si se recibió el ID del producto y la cantidad
if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);

    // Obtiene la información del producto desde la base de datos
    $stmt = $conn->prepare("SELECT * FROM productos WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $available_quantity = $product['cantidad'];
        $product_price = $product['precio'];

        // Verifica si hay suficiente cantidad en stock
        if ($quantity <= $available_quantity) {
            // Agrega el producto al carrito (si ya existe, actualiza la cantidad)
            if (isset($_SESSION['cart'][$product_id])) {
                $_SESSION['cart'][$product_id]['quantity'] += $quantity;
            } else {
                $_SESSION['cart'][$product_id] = [
                    'quantity' => $quantity,
                    'price' => $product_price,
                    'name' => $product['nombre'],
                    'image' => base64_encode($product['foto']),
                ];
            }

            // Actualiza la cantidad disponible en la base de datos
            $new_quantity = $available_quantity - $quantity;
            $update_stmt = $conn->prepare("UPDATE productos SET cantidad = ? WHERE id = ?");
            $update_stmt->bind_param("ii", $new_quantity, $product_id);
            $update_stmt->execute();

            $message = "Producto agregado al carrito.";
        } else {
            $message = "No hay suficiente cantidad en stock. Solo hay {$available_quantity} disponibles.";
        }
    } else {
        $message = "Producto no encontrado.";
    }
} else {
    $message = "No se especificó un producto o cantidad.";
}

// Redirige al carrito con el mensaje
header("Location: welCatalogo.php?message=" . urlencode($message));
exit;
?>
