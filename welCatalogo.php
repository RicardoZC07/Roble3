<?php
session_start(); // Asegúrate de iniciar la sesión en la página de destino

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roble</title>
    <link rel="stylesheet" href="styles/stylescatalogo.css">
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <ul class="header-list">
                <li class="logo-item">
                    <a href="welcom.php">
                        <img src="img/NombreSinFondo.png" alt="Roble" class="logo">
                    </a>
                </li>
                <li class="menu">
                    <a href="welcom.php">Home</a>
                    <div class="dropdown">
                        <a href="welCatalogo.php" class="dropdown-toggle">Catálogo</a>
                        <div class="dropdown-menu">
                            <a href="#silla">Sillas</a>
                            <a href="#">Mesas de comedor</a>
                            <a href="#bancas">Bancas</a>
                            <a href="#bancos">Bancos</a>
                            <a href="#sofa">Sofás</a>
                            <a href="#">Mesas de centro</a>
                        </div>
                    </div>
                    
                    <a href="welAcercade.php">Acerca de Roble</a>
                    <a href="welSucursales.php">Sucursales</a>
                </li>
                <li class="login-icon">
                    
                    <a href="#">
                   <?php echo $_SESSION['username'] ?>
                    </a>
                    
                </li>
                <li class="cart-icon">
                    <a href="shop.php">
                        <img src="img/BolsoCompraSinFondo2.png" alt="Carrito" class="icon">
                    </a>
                </li>
            </ul>
        </header>

        <!-- Sección de productos estilo ecommerce -->
        <section class="product-grid">
           <?php include 'welproductos.php'; ?>
         </section>


    </div>
    
</body>
</html>