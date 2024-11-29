<?php
session_start();

// Conexión a la base de datos
$host = "localhost";
$dbname = "roble";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


// Obtener los productos del carrito
$product_ids = implode(",", $_SESSION['cart']); // Convierte el array en una cadena separada por comas
$sql = "SELECT * FROM productos WHERE id IN ($product_ids)";

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
    <h1>Productos en tu carrito</h1>
    <div class="cart-container">
        <?php
        
           
          if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo "<h2>Tu carrito está vacío.</h2>";
             echo '<a href="welCatalogo.php" class="back-button">Volver al catálogo</a>';
                     exit;
           }else {
            $result = $conn->query($sql);
            while ($product = $result->fetch_assoc()) {
                echo "
                <div class='cart-item'>
                    <img src='data:image/jpeg;base64," . base64_encode($product['foto']) . "' alt='{$product['informacion']}' class='cart-image'>
                    <div class='cart-details'>
                        <h3 class='cart-item-name'>{$product['nombre']}</h3>
                        
                        <p class='cart-item-price'>Precio: \${$product['precio']}</p>
                        <p class='cart-item-quantity'>Cantidad disponible: {$product['cantidad']}</p>
                        <form action='remove_from_cart.php' method='POST' class='remove-form'>
                            <input type='hidden' name='product_id' value='{$product['id']}'>
                            <button type='submit' class='remove-button'>Eliminar</button>
                        </form>
                    </div>
                </div>
                ";
            }
        }
        

        $conn->close();
        ?>
    </div>
    <a href="welCatalogo.php" class="back-button">Volver al catálogo</a>
</body>
</html>


