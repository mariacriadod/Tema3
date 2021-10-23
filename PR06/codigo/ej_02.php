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

        // Creo el array
        $liga = array(

            // Zamora vs ...
            "Zamora" => array(

                // Salamanca
                "Salamanca" => array("Resultado" => "3-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Ávila
                "Ávila" => array("Resultado" => "4-1","Tarj_Rojas" => 0,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Valladolid
                "Valladolid" => array("Resultado" => "1-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 1,"Penaltis" => 1)

            ),

            // Salamanca vs ...
            "Salamanca" => array(

                // Zamora
                "Zamora" => array("Resultado" => "3-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Ávila
                "Ávila" => array("Resultado" => "4-1","Tarj_Rojas" => 0,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Valladolid
                "Valladolid" => array("Resultado" => "1-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 2,"Penaltis" => 1)

            ),

            // Ávila vs ...
            "Ávila" => array(

                // Zamora
                "Zamora" => array("Resultado" => "3-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 2),

                // Salamanca
                "Salamanca" => array("Resultado" => "1-3","Tarj_Rojas" => 1,"Tarj_Amarillas" => 3,"Penaltis" => 0),

                // Valladolid
                "Valladolid" => array("Resultado" => "1-3","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 1)

            ),

            // Valladolid vs ...
            "Valladolid" => array(

                // Zamora
                "Zamora" => array("Resultado" => "3-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Salamanca
                "Salamanca" => array("Resultado" => "3-1","Tarj_Rojas" => 0,"Tarj_Amarillas" => 0,"Penaltis" => 0),

                // Ávila
                "Ávila" => array("Resultado" => "1-2","Tarj_Rojas" => 1,"Tarj_Amarillas" => 1,"Penaltis" => 2)

            )
        );

        

    ?>

    <!-- Footer informativo -->
    <footer>&copy Ismael Maestre</footer>

</body>
</html>