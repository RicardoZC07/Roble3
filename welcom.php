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
                            <a href="#">Sillas</a>
                            <a href="#">Mesas de comedor</a>
                            <a href="#">Bancas</a>
                            <a href="#">Bancos</a>
                            <a href="#">Sofás</a>
                            <a href="#">Mesas de centro</a>
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
</body>
</html>


