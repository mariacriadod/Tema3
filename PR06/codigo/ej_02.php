<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>

    <!-- Enlace al css -->
    <link rel="stylesheet" href="../webroot/css/style.css">

    <!-- @author - Ismael Maestre Carracedo  -->
</head>
<body>
    
    <!-- Ejercicio 2 -->
    <h1>Ejercicio 2</h1>

    <!-- Enlace que accede a otra pagina php que muestra/imprime el codigo de la misma -->
    <!-- Incluir en todos los .php -->
    <a target="_blank" id="idVerCodigo" title="Vér el código PHP" href="codigoPHP.php?paginaPHP=<?
        $pagina = basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;?>"
    >
        <img src="../img/icono_ver_codigo.png" alt="suu" width="35px" height="35px"></img>
    </a>

    <!-- Enunciado -->
    <h2>Genera otra table que sea clasificación.

        <ul>
            <li>De tal forma que, por partido ganado se sumará tres puntos y por partido empatado 1</li>
            <li>Goles a favor</li>
            <li>Goles en contra</li>
        </ul>
    </h2>

    <!-- PHP -->
    <?php

    ?>

    <!-- Footer informativo -->
    <footer>&copy Ismael Maestre</footer>

</body>
</html>