<?php
// Iniciar la sesión
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si todos los campos requeridos están presentes y no están vacíos
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Expresión regular para validar el formato del correo electrónico
        $emailRegex = '/^\S+@\S+\.\S+$/';
        
        // Verificar si el correo electrónico tiene un formato válido
        if (!preg_match($emailRegex, $email)) {
            echo "Por favor, ingresa una dirección de correo electrónico válida.";
            exit();
        }
        
        // Verificar la longitud de la contraseña
        if (strlen($password) < 8) {
            echo "La contraseña debe tener al menos 8 caracteres.";
            exit();
        }
        
        // Hash de la contraseña proporcionada por el usuario utilizando SHA-256
        $hashedPassword = hash('sha256', $password);
        
        // Conectar a la base de datos (debes reemplazar los valores de conexión con los tuyos)
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "usuarios";
        
        $conn = new mysqli($servername, $username, $password_db, $dbname);
        
        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }
        
        // Consulta SQL para buscar el usuario en la base de datos y obtener su ID
        $sql = "SELECT id, nombre, contraseña FROM usuarios WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Usuario encontrado
            $user_data = $result->fetch_assoc();
            $user_id = $user_data['id'];
            $user_name = $user_data['nombre'];
            $storedPassword = $user_data['contraseña'];

            // Verificar la contraseña
            if ($storedPassword === $hashedPassword) {
                // Contraseña correcta, consulta el rol del usuario en la base de datos
                $roles_sql = "SELECT rol FROM roles WHERE id=?";
                $stmt_roles = $conn->prepare($roles_sql);
                $stmt_roles->bind_param("i", $user_id);
                $stmt_roles->execute();
                $roles_result = $stmt_roles->get_result();
                
                if ($roles_result->num_rows > 0) {
                    // Rol encontrado, almacenar el rol en la sesión
                    $roles_data = $roles_result->fetch_assoc();
                    $user_role = $roles_data['rol'];
                    
                    // Almacenar el email, ID, nombre y rol en la sesión
                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $user_id;
                    $_SESSION['name'] = $user_name;
                    $_SESSION['role'] = $user_role;
                    $_SESSION['logged_in'] = true;
                    
                    // Registrar la fecha y hora de inicio de sesión en la base de datos
                    $update_sql = "UPDATE usuarios SET updated_at=NOW() WHERE id=?";
                    $stmt_update = $conn->prepare($update_sql);
                    $stmt_update->bind_param("i", $user_id);
                    $stmt_update->execute();
                    $stmt_update->close();
                    
                    // Redirigir al usuario a la página de contenido HTML después de 2 segundos
                    header("Location: Pagina1.php");
                    exit();
                } else {
                    echo "El usuario no tiene un rol asignado.";
                }
            } else {
                // Contraseña incorrecta
                header("Location: Inicio.php");
                exit();
            }
        } else {
            // Usuario no encontrado
            header("Location: Inicio.php");
            exit();
        }
        
        // Cerrar la conexión
        $stmt->close();
        $stmt_roles->close();
        $conn->close();
    } else {
        echo "Por favor complete todos los campos del formulario.";
    }
}
?>


