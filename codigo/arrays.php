<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>

     <!-- CSS -->
     <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <h1>Arrays</h1>

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

        // Crear un array vacío //
        echo "<h2>Array Vacío</h2>";
        $arrayVacio = array();
        var_dump($arrayVacio);
        echo "<br>";


        // Crear un array con 10 valores (ejemplo de como no se debe hacer) //
        echo "<h2>Array de 10 posiciones (ejemplo mal)</h2>";
        $array10 = array(10);
        var_dump($array10);
        echo "<br>";


        // Crear un array con 6 valores (string, int, etc) //
        echo "<h2>Array de notas</h2>";
        $notas = array(8,9,"Diez",7,8,4);

        // Para que lo imprima bonito (<pre>)
        echo "<pre>";
        print_r($notas);
        echo "</pre><br>";


        // Recorrer el array (con un bucle for) //
        echo "<h2>Recorrer un array con for</h2>";

        for($i = 0; $i < count($notas); $i++)
        {

            echo "<p>" . $notas[$i] . "</p>";
        }


        // Recorrer un array con posiciones vacías //
        echo "<h2>Recorrer un array con posiciones vacías</h2>";

        // Solo tengo hasta la posicion 7, la 10 no vale...
        $notas[10] = "MH";

        // se recorre (da error)
        for($i = 0; $i < count($notas); $i++)
        {
            echo "<p>" . $notas[$i] . "</p>";   // Da error pq hay pos vacias en el medio
        }
        

        // Recorrer un array con foreach //
        echo "<h2>Recorrer un array con foreach</h2>";

        // Vamos a hacerlo bien (mediante foreach)
        foreach($notas as $value)
        {
            echo "<p>" . $value . "</p>";
        }


        // Comprobar si existe una posicion //
        echo "<h2>Comprobar si existe una posicion</h2>";

        if(isset($notas[8]))
            echo "Sí existe";
        else
            echo "No existe";


        // Borrar valores de un array //
        echo "<h2>Borrar una posicion</h2>";

        // Borramos el elemento de la posicion 0
        unset($notas[0]);

        foreach($notas as $value)
        {
            echo "<p>" . $value . "</p>";
        }

        // Arrays asociativos //
        echo "<h2>Arrays asociativos</h2>";

        $notasAsociativas = array("Ismael"=>"9","David"=>"7","Manolo"=>"6");

        // Lo imprimo antes de modificar
        foreach($notasAsociativas as $value)
        {
            echo "<p>" . $value . "</p>";
        }

        echo '<br>';

        // Lo recorro e incremento en uno
        foreach($notasAsociativas as $key => $value)
        {
            // Se incrementa un punto de nota para cada persona del array
            $notasAsociativas[$key] = $value + 1;

            // Se imprime
            echo "<p>" . $key . "</p>";
        }

        echo '<br>';

        // Lo imprimo despues de modificar
        foreach($notasAsociativas as $value)
        {
            echo "<p>" . $value . "</p>";
        }
        

        // Array Multidimensional //
        echo "<h2>Array Multidimensional</h2>";

        $tabla = array();

        // Creo las tablas de multiplicar (hago solo hasta la del 3)
        for ($i=0; $i < 3; $i++)
        { 
        
            $tabla[$i] = array();

            for ($j=0; $j < 10; $j++) { 
                
                $tabla[$i][$j] = $i * $j;
            }
            
        }

        // Lo muestro
        echo "<pre>";
        print_r($tabla);
        echo "</pre><br>";


        // Array multidimensional que tb es array asociativo //
        echo "<h2>Array Multidimensional y Asociativo</h2>";

        $ciclos = array(

            "DAW" => array("PR" => "Programacion",
                      "BD" => "Bases de Datos",
                       "DWES" => "Desarrollo Web Entorno Servidor"
                    ),
            
            "DAM" => array("PR" => "Programacion",
                    "BD" => "Bases de Datos",
                     "DWEC" => "Desarrollo Web Entorno Cliente"
                ),

            "ASIR" => array("ASO" => "Administracion de Sistemas",
                  "BD" => "Bases de Datos",
                   "DWES" => "Desarrollo Web Entorno Servidor"
                )
        );

        // 1ª forma de imprimirlo
        echo "<h3>1ª forma de imprimirlo</h3>";
        echo "<pre>";
        print_r($ciclos);
        echo "</pre><br>";
        
         // 2ª forma de imprimirlo
        echo "<h3>2ª forma de imprimirlo</h3>";
        foreach($ciclos as $key => $value)
        {

            echo "<p><b>" . $key . "</b></p>";

            foreach ($ciclos[$key] as $clave => $valor) 
            {

                echo "<p>" . $clave . " = " . $valor . "</p>";

            }

        }
       

         //// Funciones de un array ////
         echo "<h2>Funciones para recorrer un array</h2>";

        // Array actual //
        echo "<h3>Array actual (por defecto el primero) -- Funcion <i>current</i></h3>";
        print_r (current($ciclos));
         
        // Array siguiente
        echo "<h3>Array siguiente -- Funcion <i>next</i></h3>";
        print_r (next($ciclos));

        // Array actual //
        echo "<h3>Array actual (ahora la pos ha cambiado) -- Funcion <i>current</i></h3>";
        print_r (current($ciclos));
         
        // Si ahora hacemos un while each, mostrará a partir de la posicion en la que se encuentra el array
        echo "<h3>Se muestra el array --  <i>while each</i></h3>";

        /*  // Hay que comentarlo pq si no la pos es la ultima y no se muestra la 2ª forma
        while ($ciclo = each($ciclos))
        {
            // echo $ciclo . "<br>";
            echo "<pre>";
            print_r($ciclo);
            echo "</pre><br>";
        }
        */
        
        /* Nota:
            - Aparece como duplicado 
            (con los 4 elementos, tanto los 0 y 1, como key y value)

        */

        echo "<h4>2ª forma</h4>";

        while ($ciclo = each($ciclos))
        {
            echo "<pre>";
            echo "El ciclo es: " . $ciclo[0] . " y las asignaturas son: ";
            print_r($ciclo[1]);
            echo "</pre><br>";
        }

        // Cambiar la posicion del puntero del array (ahora vuelve al principio y si se muestran)
        echo "<h3>Se reinicia la posicion del puntero -- Funcion <i>reset</i></h3>";

        reset($ciclos);

        while ($ciclo = each($ciclos))
        {
            echo "<pre>";
            echo "El ciclo es: " . $ciclo[0] . " y las asignaturas son: ";
            print_r($ciclo[1]);
            echo "</pre><br>";
        }


    ?>

</body>
</html>