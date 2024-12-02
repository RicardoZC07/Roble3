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

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        <!-- Sección de productos estilo ecommerce -->

        <?php
            // Conexión a la base de datos
            include('conexion.php');

            // Recuperar la categoría seleccionada
            $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';

            // Inicializar contenedores de categorías
            $categories = [
                'silla' => '',
                'mesa comedor' => '',
                'bancas' => '',
                'bancos' => '',
                'sofa' => '',
                'mesa centro' => ''
            ];

            // Consulta SQL para filtrar productos
            if ($categoria) {
                $query = "SELECT * FROM productos WHERE categoria = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('s', $categoria);
            } else {
                // Mostrar todos los productos si no se seleccionó categoría
                $query = "SELECT * FROM productos";
                $stmt = $conn->prepare($query);
            }

            $stmt->execute();
            $result = $stmt->get_result();

            // Iterar sobre los productos y asignarlos a la categoría correspondiente
            while ($row = $result->fetch_assoc()) {
                $categoriaProducto = strtolower(trim($row['categoria'])); // Normalizar categoría
                if (array_key_exists($categoriaProducto, $categories)) {
                    $categories[$categoriaProducto] .= "
                        <div class='product-card'>
                            <img src='data:image/jpeg;base64," . base64_encode($row['foto']) . "' alt='{$row['informacion']}' class='product-image'>
                            <h3 class='product-name'>{$row['nombre']}</h3>
                            <p class='product-description'>Precio: $" . number_format($row['precio'], 2) . " MX </p>
                            
                                <button class='product-button' onclick=\"window.location.href='weldetalleProducto.php?id={$row['id']}'\">Ver más</button>
                                
                            
                        </div>";
                }
            }

            // Mostrar las categorías y sus productos
            if ($categoria) {
                // Mostrar solo la categoría seleccionada
                $categoria = strtolower(trim($categoria)); // Normalizar categoría seleccionada
                if (array_key_exists($categoria, $categories)) {
                    echo "<div class='{$categoria}'>";
                    echo "<h2 class='category-title'>" . ucfirst($categoria) . "</h2>";
                    echo $categories[$categoria] ?: "<p>No hay productos disponibles en esta categoría.</p>";
                    echo "</div>";
                } else {
                    echo "<p>La categoría seleccionada no existe.</p>";
                }
            } else {
                // Mostrar todas las categorías
                foreach ($categories as $category => $products) {
                    echo "<div class='{$category}'>";
                    echo "<h2 class='category-title'>" . ucfirst($category) . "</h2>";
                    echo $products ?: "<p>No hay productos disponibles en esta categoría.</p>";
                    echo "</div>";
                }
            }

            // Script para manejar clics en agregar al carrito
            echo "<script>
                function addToCart(productId) {
                    // Redirige al archivo carrito.php enviando el ID del producto como un parámetro POST
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = 'carrito.php';

                    // Crear un campo oculto con el ID del producto
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'product_id';
                    input.value = productId;

                    form.appendChild(input);
                    document.body.appendChild(form);
                    form.submit(); // Enviar el formulario
                }
                </script>";
            ?>

        
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