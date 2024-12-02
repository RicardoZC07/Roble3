<?php
session_start(); // Asegúrate de iniciar la sesión en la página de destino

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ruta a tu CSS principal -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
    <div class="grid-container">
        <!-- Header -->
        <header class="header">
            <ul class="header-list">
                <li class="logo-item">
                    <a href="welcom.php">
                        <img src="img/NombreSinFondo.png" alt="Logo Roble" class="logo">
                    </a>
                </li>
                <li class="menu">
                    <a href="welcom.php">Home</a>
                    <div class="dropdown" id="dropdown">
                        <a href="welCatalogo.php"  class="dropdown-toggle">Catálogo</a>
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
                   <?php echo $_SESSION['username'] ?>
                    </a>
                </li>
                <li class="cart-icon">
                <a href="shop.php">
                        <img src="img/BolsoCompraSinFondo2.png" alt="Carrito de Compra" class="icon">
                    </a>
                </li>
            </ul>
        </header>

        <!-- Contenido principal -->
        <main class="main-content" id="main-content">
            <h1 class="about-heading">¡Visita nuestra sucursal!</h1>
            <p class="about-subtext">Ven con nosotros para descubrir los muebles más exclusivos y de alta calidad.</p>
            
            <!-- Sección de Mapa -->
            <section class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!4v1699271209994!6m8!1m7!1sTdkBooImtPO3532na9P9uQ!2m2!1d19.6259252!2d-101.5772263!3f122.86!4f-6.23!5f0.7820865974627469" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </section>
        </main>

        
    </div>
    <footer>
        <div class="container">
            <div class="footer-info">
                <img src="img/NombreSinFondo.png" alt="Roble Logo" class="logo">
                
            </div>
            <div class="footer-links">
                
                <p>Muebles de alta calidad y diseño único.</p>   
            </div>
            <div class="footer-social">
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="https://wa.me/+524432198185" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                <a href="mailto:roble@gmail.com" class="social-icon"><i class="fas fa-envelope"></i></a>
                
                  
            </div>
        </div>
        <div class="derechos">
            <div class="fg">

            </div>
            <p>&copy; 2024 Roble Muebles. Todos los derechos reservados.</p> 
            <div class="fj">
                
            </div>
        </div>
    </footer>
    
</body>
</html>