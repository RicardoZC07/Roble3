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
                    
                    <a href="AcercaDeRoble.html">Acerca de Roble</a>
                    <a href="Sucursales.html">Sucursales</a>
                </li>
                <li class="login-icon">
                    <a href="login.html">
                        <img src="img/acceso2.png" alt="login" class="icon">
                    </a>
                </li>
                <li class="cart-icon">
                <a href="login.html">
                        <img src="img/BolsoCompraSinFondo2.png" alt="Carrito de Compra" class="icon" onclick=addcart()>
                    </a>
                </li>
            </ul>
        </header>

        <!-- Sección de productos estilo ecommerce -->
        <section class="product-grid">
           <?php include 'productos.php'; ?>
         </section>


    </div>
    <script>
            function addcart() {
                alert("INICIA SESION");
                window.location.href = "login.html";
            }
            </script>
    
</body>
</html>