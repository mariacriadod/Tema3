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
    <h2>Genera un array multidimensional y asociativo donde:

        <ul>
            <li>Los nombres de los equipos locales deben ser índices del array que contiene los
                subarrays con el equipo visitante y a su vez un subarray con:

                <ul>
                    <li>Resultado, roja, amarilla y penalti que son índices de los anterioes.</li>
                </ul>
            </li>
        </ul>

        <p>El script lo único que debe hacer es mostrar una tabla similar a la de abajo, recogiendo los
        datos del array multidimensional que habéis creado</p>
    </h2>

    <!-- PHP -->
    <?php

        // Creo el array manualmente
        $array_tabla = array(

            // Zamora vs ...
            "Zamora" => array(

                // Salamanca
                "Salamanca" => array("Resultado" => "3-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Ávila
                "Ávila" => array("Resultado" => "4-1","Tarj_Rojas" => 0,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Valladolid
                "Valladolid" => array("Resultado" => "1-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 1,"Penaltis" => 1),

            ),

            // Salamanca vs ...
            "Salamanca" => array(

                // Zamora
                "Zamora" => array("Resultado" => "3-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Ávila
                "Ávila" => array("Resultado" => "4-1","Tarj_Rojas" => 0,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Valladolid
                "Valladolid" => array("Resultado" => "1-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 2,"Penaltis" => 1),

            ),

            // Ávila vs ...
            "Ávila" => array(

                // Zamora
                "Zamora" => array("Resultado" => "3-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 2),

                // Salamanca
                "Salamanca" => array("Resultado" => "1-3","Tarj_Rojas" => 1,"Tarj_Amarillas" => 3,"Penaltis" => 0),

                // Valladolid
                "Valladolid" => array("Resultado" => "1-3","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 1),

            ),

            // Valladolid vs ...
            "Valladolid" => array(

                // Zamora
                "Zamora" => array("Resultado" => "3-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Salamanca
                "Salamanca" => array("Resultado" => "3-1","Tarj_Rojas" => 0,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Ávila
                "Ávila" => array("Resultado" => "1-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 1,"Penaltis" => 2),

            )
        );

        // Imprimo el array
        echo '<pre>';
        print_r($array_tabla);
        echo '<pre>';
    ?>

    <!-- Footer informativo -->
    <footer>&copy Ismael Maestre</footer>

</body>
</html>