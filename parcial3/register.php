<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si todos los campos requeridos están presentes y no están vacíos
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        
        // Recoger los datos del formulario
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Hash de la contraseña utilizando SHA-256
        $hashedPassword = hash('sha256', $password);
        
        // Conectar a la base de datos (debes reemplazar los valores de conexión con los tuyos)
        $servername = "localhost:3306";
        $username = "root";
        $password_db = "";
        $dbname = "usuarios";
        
        $conn = new mysqli($servername, $username, $password_db, $dbname);
        
        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }
        
        // Preparar la consulta SQL para insertar un nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$name', '$email', '$hashedPassword')";
        
        if ($conn->query($sql) === TRUE) {
            // Obtener el ID del usuario recién insertado
            $user_id = $conn->insert_id;
            
            // Insertar el rol "usuario" en la tabla de roles
            $rol = "usuario";
            $rol_sql = "INSERT INTO roles (nombre, email, rol) VALUES ('$name', '$email', '$rol')";
            if ($conn->query($rol_sql) === TRUE) {
                // Redirigir al usuario a la página de contenido HTML después de 2 segundos
                header("refresh:2; url=Pagina1.php");
                echo "Registro exitoso. ¡Bienvenido, $name!";
            } else {
                echo "Error al registrar el rol: " . $conn->error;
            }
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }
        
        // Cerrar la conexión
        $conn->close();
    } else {
        echo "Por favor complete todos los campos del formulario.";
    }
}
?>
