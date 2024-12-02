<?php
session_start();
include('conexion.php');

// Obtener el ID del producto desde la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $sql = "SELECT * FROM productos WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo htmlspecialchars($product['informacion']); ?></title>
            <link rel="stylesheet" href="styles/styledetales.css">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        </head>
        <body>
            <header class="header">
                <ul class="header-list">
                    <li class="logo-item">
                        <a href="javascript:location.reload()">
                            <img src="img/NombreSinFondo.png" alt="Roble Logo" class="logo">
                        </a>
                    </li>
                    <li class="menu">
                        <a href="welcom.php">Home</a>
                        <div class="dropdown" id="dropdown">
                            <a href="welCatalogo.php" class="dropdown-toggle">Catálogo</a>
                            <div class="dropdown-menu" id="dropdown-menu">
                                <a href="welfiltrado.php?categoria=silla">Sillas</a>
                                <a href="welfiltrado.php?categoria=Mesa%20Comedor">Mesas de comedor</a>
                                <a href="welfiltrado.php?categoria=Bancas">Bancas</a>
                                <a href="welfiltrado.php?categoria=Bancos">Bancos</a>
                                <a href="welfiltrado.php?categoria=Sofa">Sofás</a>
                                <a href="welfiltrado.php?categoria=Mesa%20Centro">Mesas de centro</a>
                            </div>
                        </div>
                        <a href="welAcercade.php">Acerca de Roble</a>
                        <a href="welSucursales.php">Sucursales</a>
                    </li>
                    <li class="login-icon">
                        <a href="welcom.php">
                            <?php echo $_SESSION['username']; ?>
                        </a>
                    </li>
                    <li class="cart-icon">
                        <a href="shop.php">
                            <img src="img/BolsoCompraSinFondo2.png" alt="Carrito de Compra" class="icon">
                        </a>
                    </li>
                </ul>
            </header>
            
            <div class="product-detail">
                <div class="product-image-container">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($product['foto']); ?>" 
                        alt="<?php echo htmlspecialchars($product['informacion']); ?>" class="product-detail-image">
                </div>

                <div class="product-info-container">
                    <h1 class="product-detail-name"><?php echo htmlspecialchars($product['nombre']); ?></h1>
                    <p class="product-detail-price">$<?php echo number_format($product['precio'], 2); ?></p>
                    <p class="product-detail-description">
                        Cantidad disponible: <?php echo $product['cantidad']; ?><br>
                        <?php echo nl2br(htmlspecialchars($product['informacion'])); ?>
                    </p>

                    <!-- Formulario para seleccionar cantidad y agregar al carrito -->
                    <form action="carrito.php" method="POST" class="add-to-cart-form">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <label for="quantity">Cantidad:</label>
                        <input type="number" name="quantity" id="quantity" min="1" max="<?php echo $product['cantidad']; ?>" required>
                        <button type="submit" class="add-to-cart-button">Agregar al carrito</button>
                    </form>
                </div>
            </div>

            <img src="img/Logoventana.png" alt="Logo" class="corner-logo">
        </body>
        </html>
        <?php
    } else {
        echo "<p>Producto no encontrado.</p>";
    }
} else {
    echo "<p>ID de producto inválido.</p>";
}

$conn->close();
?>
