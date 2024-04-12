<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="register.js"></script>
    <title>Registro</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Estilos personalizados -->
    <style>
        body {
            background-image: url('https://static.vecteezy.com/system/resources/thumbnails/002/207/821/small/dark-blue-modern-technology-background-free-vector.jpg'); /* Ruta de tu imagen de fondo */
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Fija la imagen de fondo mientras se desplaza */
            background-repeat: no-repeat;
            background-color: #f8f9fa; /* Color de fondo de respaldo */
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 15px;
        }
        .card-body {
            padding: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            border-radius: 5px;
            width: 100%;
            background-color: #8A2BE2; /* Cambiar a violeta */
            border-color: #8A2BE2; /* Cambiar el color del borde */
        }
        .btn-primary:hover {
            background-color: #6A1B9A; /* Cambiar a un tono más oscuro al pasar el mouse */
            border-color: #6A1B9A; /* Cambiar el color del borde al pasar el mouse */
        }
    </style>   
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Registro</h3>
                    </div>
                    <div class="card-body">
                        <form id="registerForm" action="register.php" method="post" onsubmit="return validateForm()">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email" inputmode="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <small id="passwordHelp" class="form-text text-muted">La contraseña debe tener al menos 8 caracteres, una mayúscula y un dígito.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </form>
                        <div id="register-message-php"></div>
                    </div>
                    <!-- Enlace para ir al formulario de inicio de sesión -->
                    <div class="card-footer text-center">
                        ¿Ya tienes una cuenta? <a href="Inicio.php">Inicia sesión aquí</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

