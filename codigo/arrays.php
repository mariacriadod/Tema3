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
                  )
        );

         // Lo imprimo despues de modificar
         foreach($ciclos as $key => $value)
         {

            echo "<p><b>" . $key . "</b></p>";

            foreach ($ciclos[$key] as $clave => $valor) 
            {

                echo "<p>" . $clave . " = " . $valor . "</p>";

            }

         }
       
    ?>

</body>
</html>