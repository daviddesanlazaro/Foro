<?php
#Verifica si hay sesión iniciada
require_once("controlador/verificar_sesion.php");
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/estilos.css">

<head>
    <meta charset="UTF-8">
    <title>Foro</title>
</head>

<body>
    <header>
        <h1>Foro</h1>
        <nav>
            <label for="check-menu">
                <input id="check-menu" type="checkbox">
                <div class="btn-menu">Menú</div>
                <ul class="ul-menu">
                    <li><a href="vista/foro.php">Inicio</a></li>
                    <li><a href="vista/login.php">Acceder</a></li>
                </ul>
            </label>
        </nav>
    </header>
    <section>
        <div>
            <h2>Actividad de Aprendizaje. Desarrollo de interfaces. Primera evaluación</h2>
            <br>
            <p>David de San Lázaro</p>
            <br><br>
            <p>Esta aplicación requiere crear una base de datos con el script SQL aportado junto al proyecto.</p>
            <p>Una vez creada, se podrá comenzar a utilizar la aplicación desde el menú de la cabecera</p>
        </div>
    </section>
</body>

</html>
