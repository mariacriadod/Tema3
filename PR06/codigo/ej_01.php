<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

    <!-- Enlace al css -->
    <link rel="stylesheet" href="../webroot/css/style.css">

    <!-- @author - Ismael Maestre Carracedo  -->
</head>
<body>
    
    <!-- Ejercicio 1 -->
    <h1>Ejercicio 1</h1>

    <!-- Enlace que accede a otra pagina php que muestra/imprime el codigo de la misma -->
    <!-- Incluir en todos los .php -->
    <a target="_blank" id="idVerCodigo" title="Vér el código PHP" href="codigoPHP.php?paginaPHP=<?
        $pagina = basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;?>"
    >
        <img src="../img/icono_ver_codigo.png" alt="suu" width="35px" height="35px"></img>
    </a>

    <!-- Enunciado -->
    <h2>Genera un array multidimensional y asociativo donde

        <ul>
            <li>los nombres de los equipos locales deben ser índices del array que contiene los
                subarrays con el equipo visitante y a su vez un subarray con:

                <ul>
                    <li>resultado, roja, amarilla y penalti que son índices de los anterioes.</li>
                </ul>
            </li>
        </ul>

        <p>El script lo único que debe hacer es mostrar una tabla similar a la de abajo, recogiendo los
        datos del array multidimensional que habéis creado</p>
    </h2>

    <!-- PHP -->
    <?php

    ?>

    <!-- Footer informativo -->
    <footer>&copy Ismael Maestre</footer>

</body>
</html>