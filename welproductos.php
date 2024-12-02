<?php
include('conexion.php');

// Consulta para obtener productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // Inicializa contenedores por categoría
    $categories = [
        'silla' => '',
        'mesa comedor' => '',
        'bancas' => '',
        'bancos' => '',
        'sofa' => '',
        'mesa centro' => ''
    ];

    // Itera los productos y organiza por categoría
    while ($row = $result->fetch_assoc()) {
        $categoria = strtolower(trim($row['categoria'])); // Normaliza la categoría a minúsculas y elimina espacios extra

        // Busca el contenedor de categoría correspondiente
        foreach ($categories as $key => $value) {
            if (strcasecmp($categoria, $key) === 0) {
                // Agrega el producto al contenedor correspondiente
                $categories[$key] .= "
                <div class='product-card'>
                    <img src='data:image/jpeg;base64," . base64_encode($row['foto']) . "' alt='{$row['informacion']}' class='product-image'>
                    
                    <h3 class='product-name'>{$row['nombre']}</h3>
                    <p class='product-description'>Precio: $" . number_format($row['precio'], 2) . " MX </p>
                    
                    <button class='product-button' onclick=\"window.location.href='weldetalleProducto.php?id={$row['id']}'\">Ver más</button>
                    
                    
                   
                    
                   
                </div>";
                
                break;
            }
        }
    }

    // Muestra los contenedores con los productos
    foreach ($categories as $category => $products) {
        echo "<div class='{$category}' id ='#{$category} '>";
        echo "<h2 class='category-title'>" . ucfirst($category) . "</h2>";
        echo $products ?: "<p>No hay productos disponibles en esta categoría.</p>";
        echo "</div>";
    }
} else {
    echo "<p>No hay productos disponibles.</p>";
}

$conn->close();
?>

<script>
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
</script>
