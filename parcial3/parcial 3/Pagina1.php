<?php
// Incluir el archivo de validación de sesión
require_once 'validar_sesion.php';

// Llamar a la función para validar la sesión
validarSesion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben 10 </title>
    <style>
        /* Estilos para el menú horizontal */
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333; /* Color de fondo del menú */
        }

        nav li {
            float: left;
        }

        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav li a:hover {
            background-color: #111; /* Color de fondo al pasar el mouse sobre el enlace */
        }
    </style>
</head>
<body>

<header>
    <h1>Ben 10 </h1>
    <nav>
        <ul>
            <li><a href="Pagina1.php">Aliens</a></li>
            <li><a href="Pagina2.php">Omnitrix</a></li>
            <!-- Utilizar hasRole() para mostrar el botón de administrador -->
            <?php if (hasRole('admin')): ?>
                <li><a href="panel_admin.php">Panel de Administrador</a></li>
            <?php endif; ?>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2>Introducción</h2>
    <img src="https://e0.pxfuel.com/wallpapers/959/167/desktop-wallpaper-ben10-for-android-ben-10-classic.jpg" alt="Introducción Ben 10">
    <p>Ben 10 es un héroe conocido por sus aventuras intergalácticas y su habilidad para transformarse en diferentes aliens gracias al Omnitrix.</p>
    <h2>Omnitrix</h2>
    <p>El Omnitrix es un dispositivo que le permite a Ben transformarse en diferentes aliens, cada uno con habilidades únicas y poderosas.</p>
    <h2>Aliens</h2>
    <p>Los aliens que Ben puede transformarse incluyen a XLR8, Heatblast, Diamondhead, Four Arms, y muchos más.</p>

    <h2>Aventuras</h2>
    <p>Ben ha tenido numerosas aventuras para salvar el universo de amenazas alienígenas y villanos.</p>

    <h2>Aliados</h2>
    <p>Ben cuenta con aliados como su prima Gwen, su abuelo Max, y su amigo Kevin, quienes lo ayudan en sus misiones.</p>

    <h2>Enemigos</h2>
    <p>Los enemigos de Ben incluyen a Vilgax, Zs'Skayr, y el Dr. Animo, entre otros villanos alienígenas.</p>

    <h2>Equipamiento</h2>
    <p>Además del Omnitrix, Ben utiliza equipo especializado como el Proto-Tool y el Plomero Badges para combatir el mal.</p>
</div>

<footer>
    <p>© 2024 Ben 10 Fan Page. Todos los derechos reservados.</p>
</footer>

</body>
</html>
