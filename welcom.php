<?php
session_start(); // Asegúrate de iniciar la sesión en la página de destino

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roble - Muebles de Calidad</title>
    <link rel="icon" type="image/x-icon" href="img/Logoventana.png">
    
    <!-- Estilos -->
    <link rel="stylesheet" href="styles.css">
    
    <!-- Fuentes de Google Fonts -->
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>

<body>
    <!-- Contenedor principal -->
    <div class="grid-container">
        
        <!-- Encabezado -->
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
                   
                    
                    <a href="logout.php">Cerrar Sesión (<?php echo htmlspecialchars($_SESSION['username']); ?>)</a>
                    
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
            <section class="intro">
                <h1 class="main-heading">Estilo que transforma, <br> calidad que perdura</h1>
                <p class="main-subtext">Somos una empresa dedicada a la creación del mueble de tus sueños, <br> haciéndolos realidad. Solo déjate llevar por tu imaginación <br> y el resto lo hacemos nosotros.</p>
                
                <!-- Botón de llamada a la acción -->
                <div class="button-container">
                    <a href="welCatalogo.php" class="explore-button">EXPLORA YA</a>
                </div>
            </section>
        </main>
        
        <!-- Imagen en la esquina inferior derecha -->
        <img src="img/Logoventana.png" alt="Logo" class="corner-logo">
        <script  src="job.js " ></script>
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


