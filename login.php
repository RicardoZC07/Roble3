<?php
$host = "localhost";
$dbname = "roble";
$username = "root";
$password = "";

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];
        $user_email = $conn->real_escape_string($_POST["email"]);
        $user_password = $conn->real_escape_string($_POST["password"]);

        if ($action === "signup") {
            $user_username = $conn->real_escape_string($_POST["username"]);
            $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);

            // Registrar usuario
            $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$user_username', '$user_email', '$hashed_password')";
            if ($conn->query($sql) === TRUE) {
                echo "Registro exitoso";
            } else {
                echo "Error: " . $conn->error;
            }
        } elseif ($action === "login") {
            // Iniciar sesión
            $sql = "SELECT * FROM usuarios WHERE email = '$user_email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Obtener los datos del usuario
                $user = $result->fetch_assoc();

                // Verificar la contraseña
                if (password_verify($user_password, $user["password"])) {
                    // Iniciar sesión y redirigir al usuario
                    session_start(); // Asegúrate de iniciar la sesión antes de redirigir
                    $_SESSION['username'] = $user["username"]; // Guarda el nombre de usuario en la sesión
                    
                    // Redirige al usuario a la página de bienvenida
                    header("Location: welcom.php");
                    exit; // Asegúrate de que el código posterior no se ejecute
                } else {
                    echo "Contraseña incorrecta";
                }
            } else {
                echo "Usuario no encontrado";
            }
        }
    }
}

$conn->close();
?>

