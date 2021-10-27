<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Básicos</title>

     <!-- CSS -->
     <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <h1>Arrays Básicos</h1>

    <!-- Enlace que accede a otra pagina php que muestra/imprime el codigo de la misma -->
    <!-- Incluir en todos los .php -->
    <a target="_blank" id="idVerCodigo" title="Vér el código PHP" href="codigoPHP.php?paginaPHP=<?
        $pagina = basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;?>"
    >
        <img src="../img/icono_ver_codigo.png" alt="suu" width="35px" height="35px"></img>
    </a>
    
    <!-- PHP -->
    <?php

        // Ejercicio 1 //
        echo "<h2>1. Escribe un programa que dado un array, lo ordene y devuelva
            otro array sin que haya elementos repetidos.</h2>";

        // Creo el arary
        $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

        // Lo imprimo sin ordenar
        echo "<h3>Array Inicial</h3>";
        echo "<pre>";
        print_r($datos);
        echo "</pre>";

        // Lo imprimo ordenado
        echo "<h3>Array ordenado</h3>";

        sort($datos);

        echo "<pre>";
        print_r($datos);
        echo "</pre>";

        // Lo imprimo sin duplicados
        echo "<h3>Array sin valores duplicados</h3>";

        // Se crea otro array que recoge el array sin duplicados
        $arraySinDuplicados = array_unique($datos);
        
        // lo ordeno (para que ordene las key tb)
        sort($arraySinDuplicados);

        echo "<pre>";
        print_r($arraySinDuplicados);
        echo "</pre>";



        // Ejercicio 2 //
        echo "<h2>2. Escribe un programa que dado un array, devuelva
            la posición donde haya el valor 3 y cambie el valor
            por el número de la posición.</h2>";

        // 1ª Forma -- Recorriendo todo el array //
        echo "<p>1ª Forma -- Recorriendo todo el array</p>";

        // Creo el arary
        $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

        // Lo imprimo inicialmente
        echo "<h3>Array inicial</h3>";

        echo "<pre>";
        print_r($datos);
        echo "</pre>";

        // Cambio la el value por el valor del key
        for($i = 0; $i < count($datos); $i++)
        {
            if($datos[$i] == 3)
            {
                $datos[$i] = $i;
            }
        }

        // Lo imprimo despues
        echo "<h3>Array final</h3>";

        echo "<pre>";
        print_r($datos);
        echo "</pre>";

        // 2ª Forma -- con la fucion search  //
        echo "<p>2ª Forma -- Funcion search</p>";

        // Creo el arary
        $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

         // Lo imprimo inicialmente
         echo "<h3>Array inicial</h3>";

         echo "<pre>";
         print_r($datos);
         echo "</pre>";

         // Lo hago
        while($pos = array_search(3,$datos))
        {
            $datos[$pos] = $pos;
        }

        // Lo imprimo despues
        echo "<h3>Array final</h3>";

        echo "<pre>";
        print_r($datos);
        echo "</pre>";



        // Ejercicio 3 //
        echo "<h2>3. Escribe un programa que pida por url el tamaño de
            una matriz y la rellene siguiendo el siguiente patrón.</h2>";

        // Recojo el tamaño de la matriz (nº de filas y nº de columnas (cuadrado))
        $tamañoMatriz = $_GET["tamañoArray"];

        echo "El tamaño de la matriz introducido por el usuario es: " . $tamañoMatriz;

        $matriz = array();

        // Recorro el array
        for($i = 0; $i < $tamañoMatriz; $i++)
        {
            $ultVal = 1;

            // Por cada fila creo un array
            $matriz[$i] = array();

            for ($j=0; $j < $tamañoMatriz; $j++) 
            { 

                // Si se encuentra en la primera fila...
                if(($j == 0)||($i == 0))
                {
                    // Se establece el valor 1 por defecto
                    $matriz[$i][$j] = 1;
                }
                // Si no...
                else
                {
                    // Coge los valores anteriores
                    $matriz[$i][$j] = $matriz[$i - 1][$j] + $matriz[$i][$j - 1];
                }
            }
            

        }


         echo "<pre>";
        print_r($matriz);
        echo "</pre>";

    ?>

</body>
</html>