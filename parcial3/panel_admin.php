<?php
// Incluir el archivo de validación de sesión
require_once 'validar_sesion.php';

// Llamar a la función para validar la sesión
validarSesion();

// Verificar si el usuario ha iniciado sesión y es administrador
if ($_SESSION['role'] !== 'admin') {
    // Si no es administrador, redireccionar a la página de inicio
    header("Location: inicio.php");
    exit();
}

// Aquí podrías incluir cualquier lógica adicional necesaria para la administración de usuarios, como eliminar usuarios, cambiar roles, etc.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración de Usuarios</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #fff;
        }

        tr:hover td {
            background-color: #f9f9f9;
        }

        button {
            padding: 8px 12px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Panel de Administración de Usuarios</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre de Usuario</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Usuario1</td>
                <td>usuario1@example.com</td>
                <td>Usuario</td>
                <td>
                    <form action="eliminar_usuario.php" method="post">
                        <input type="hidden" name="usuario_id" value="1">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            <!-- Puedes agregar más filas aquí con información de otros usuarios -->
        </tbody>
    </table>

</div>

</body>
</html>
