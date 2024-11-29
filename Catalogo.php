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
                    <a href="index.html">
                        <img src="img/NombreSinFondo.png" alt="Roble" class="logo">
                    </a>
                </li>
                <li class="menu">
                    <a href="index.html">Home</a>
                    <div class="dropdown">
                        <a href="catalogo.html" class="dropdown-toggle">Catálogo</a>
                        <div class="dropdown-menu">
                            <a href="#">Sillas</a>
                            <a href="#">Mesas de comedor</a>
                            <a href="#">Bancas</a>
                            <a href="#">Bancos</a>
                            <a href="#">Sofás</a>
                            <a href="#">Mesas de centro</a>
                        </div>
                    </div>
                    <a href="#">Exclusivos</a>
                    <a href="#">Acerca de Roble</a>
                    <a href="#">Sucursales</a>
                </li>
                <li class="login-icon">
                    <a href="login.html">
                        <img src="img/acceso2.png" alt="login" class="icon">
                    </a>
                </li>
                <li class="cart-icon">
                    <a href="cart.php">
                        <img src="img/BolsoCompraSinFondo2.png" alt="Carrito" class="icon">
                    </a>
                </li>
            </ul>
        </header>

        <!-- Sección de productos estilo ecommerce -->
        <section class="product-grid">
           <?php include 'productos.php'; ?>
         </section>


    </div>
    
</body>
</html>