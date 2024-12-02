<?php
session_start(); // Asegúrate de iniciar la sesión en la página de destino

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Roble</title>
    <link rel="stylesheet" href="styles.css"> <!-- Asegúrate de que la ruta al CSS sea correcta -->
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

        <!-- Sección Principal -->
        <div id="main-content">
            <h1 class="about-heading">Acerca de Roble</h1>
            <p class="about-subtext">En Roble, cada pieza de mobiliario es el reflejo de nuestra pasión por la excelencia y el diseño. Con un compromiso inquebrantable con la calidad y el estilo, hemos logrado fusionar la tradición artesanal con la innovación moderna para ofrecerte productos únicos.</p>
            
            <!-- Nuestra Historia -->
            <section class="our-story">
                <h2>Nuestra Historia</h2>
                <p>Desde nuestros humildes comienzos, hemos trabajado incansablemente para crear muebles que no solo sean funcionales, sino que también cuenten una historia de elegancia y sofisticación. Cada pieza es fabricada con los mejores materiales, asegurando durabilidad y belleza en cada detalle.</p>
            </section>

            <!-- Galería de Imágenes -->
            <section class="image-gallery">
                <div class="image-item">
                    <img src="img/procesoartesanal.jpg" alt="Imagen 1">
                    <p>El proceso artesanal</p>
                </div>
                <div class="image-item">
                    <img src="img/comedor.jpg" alt="Imagen 2">
                    <p>Diseño contemporáneo</p>
                </div>
                <div class="image-item">
                    <img src="img/materialesdeprimeracalidad.jpg" alt="Imagen 3">
                    <p>Materiales de primera calidad</p>
                </div>
            </section>

            <!-- Valores -->
            <section class="values">
                <h2>Nuestros Valores</h2>
                <ul class="values-list">
                    <li>Innovación constante</li>
                    <li>Calidad superior</li>
                    <li>Compromiso con la sostenibilidad</li>
                    <li>Diseño a medida para cada cliente</li>
                </ul>
            </section>

            <!-- Testimonios -->
            <section class="testimonials">
                <p>"Roble ha transformado mi hogar con muebles que no solo son hermosos, sino también funcionales. ¡Increíble!" - Sandra Herrera Montes</p>
                <p>"La atención al detalle y el diseño exclusivo de Roble me han impresionado. Lo recomiendo al 100%." - Alberto Cardona del Rio</p>
            </section>
        </div>

        <!-- Footer -->
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
    </div>
    
</body>
</html>
