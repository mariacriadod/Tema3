<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

    <!-- Enlace al css -->
    <link rel="stylesheet" href="../../webroot/css/style.css">

    <!-- @author - Ismael Maestre Carracedo  -->
</head>
<body>
    <h1>Ejercicio 1</h1>

    <!-- Enlace que accede a otra pagina php que muestra/imprime el codigo de la misma -->
    <!-- Incluir en todos los .php -->
    <a target="_blank" id="idVerCodigo" title="Vér el código PHP" href="../codigoPHP.php?paginaPHP=<?
        $pagina = "ej1/" . basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;?>"
    >
        <img src="../../img/icono_ver_codigo.png" alt="suu" width="35px" height="35px"></img>
    </a>

    <!-- PHP -->
    <?php

        echo '<h2>Crea tu propio fichero de php que tenga las funciones de:</h2>';
        
        // a)
        echo "<h3>a) br() Pinta un br</h3>";

    ?>

    <!-- Footer informativo -->
    <footer>&copy Ismael Maestre</footer>

</body>
</html>
