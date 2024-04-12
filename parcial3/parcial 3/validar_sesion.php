<?php
// Iniciar sesión
session_start();

// Función para validar la sesión del usuario
function validarSesion() {
    // Verificar si el ID y el correo electrónico están en la sesión
    if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
        // Conectar a la base de datos
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "usuarios";
        
        $conn = new mysqli($servername, $username, $password_db, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }

        // Consultar la base de datos para validar el usuario y obtener su rol
        $id = $_SESSION['id'];
        $email = $_SESSION['email'];

        // Preparar la consulta SQL
        $sql = "SELECT r.rol FROM usuarios u INNER JOIN roles r ON u.id = r.id WHERE u.id=? AND u.email=?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $conn->error);
        }

        // Vincular los parámetros
        $stmt->bind_param("is", $id, $email);

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado de la consulta
        $result = $stmt->get_result();

        // Verificar si se encontró el usuario en la base de datos
        if ($result->num_rows == 0) {
            // Usuario no encontrado, redirigir al inicio de sesión
            header("Location: Inicio.php");
            exit();
        }

        // Obtener el rol del usuario y cargarlo en la sesión
        $row = $result->fetch_assoc();
        $_SESSION['role'] = $row['rol'];

        // Cerrar la conexión y liberar los recursos
        $stmt->close();
        $conn->close();
    } else {
        // ID o correo electrónico no encontrados en la sesión, redirigir al inicio de sesión
        header("Location: Inicio.php");
        exit();
    }
}

// Llamar a la función para validar la sesión en cada página que requiera inicio de sesión
validarSesion();

// Función para verificar si el usuario tiene un rol específico
function hasRole($role) {
    // Verificar si el rol del usuario coincide con el rol proporcionado
    return isset($_SESSION['role']) && $_SESSION['role'] === $role;
}

// Verificar si el usuario es administrador y establecer una variable de sesión correspondiente
$_SESSION['es_admin'] = hasRole('admin');
?>





