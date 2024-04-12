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
    <title>Omnitrix</title>
    <link rel="stylesheet" href="styles.css">
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
    <h1>Omnitrix</h1>
    <nav>
        <ul>
            <li><a href="Pagina1.php">Aliens</a></li>
            <li><a href="Pagina2.php">Omnitrix</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2>Omnitrix</h2>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRB39gMvh2shV8fTOUxY2WJ4hxfc_NOaTEY-cOv2HDSYFGtr4aJkAG0XXAwSygwgWGDsYw&usqp=CAU" alt="Introducción Sangheili">
    <p>El Omnitrix es un dispositivo multifuncional en forma de reloj que permite al usuario transformarse en diversas formas alienígenas, cada una con sus propias habilidades y poderes únicos. Fue creado por el inventor Galvan Azmuth con la intención de promover la paz y la comprensión entre las distintas especies del universo.</p>
    <h2>Historia</h2>
    <p>El Omnitrix fue concebido hace siglos por Azmuth, quien lo diseñó como una herramienta para explorar y comprender mejor el universo. Sin embargo, sus primeras versiones resultaron ser demasiado peligrosas, ya que caían en manos equivocadas y eran utilizadas para fines malignos. Después de varios intentos fallidos, Azmuth finalmente logró crear una versión estable del Omnitrix y la escondió para evitar que cayera en manos incorrectas.</p>
    <p>El Omnitrix fue descubierto años más tarde por el joven humano Ben Tennyson durante unas vacaciones de verano. Al encontrarlo, Ben accidentalmente activó el dispositivo y se transformó en uno de los alienígenas disponibles en su base de datos. A partir de ese momento, Ben comenzó a usar el Omnitrix para combatir el crimen y proteger al universo de diversas amenazas alienígenas y terrestres.</p>
    <h2>Funcionamiento</h2>
    <p>El Omnitrix funciona mediante la selección de una forma alienígena en su interfaz y la activación del dispositivo. Una vez activado, el usuario se transforma instantáneamente en la forma seleccionada, adquiriendo sus habilidades y poderes únicos. Cada forma alienígena tiene su propio conjunto de habilidades y limitaciones, y el usuario debe aprender a controlarlas para utilizarlas de manera efectiva.</p>
    <p>Además de la capacidad de transformación, el Omnitrix también tiene otras funciones, como la capacidad de rastrear otras formas de vida alienígena, traducir idiomas extraterrestres y reparar daños ambientales. Estas características hacen del Omnitrix una herramienta invaluable para aquellos que buscan explorar el universo y protegerlo de amenazas externas.</p>
</div>




</body>
</html>
