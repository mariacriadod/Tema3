<!-- FICHERO QUE CONTIENE LAS FUNCIONES -->

<!-- PHP -->
<?php

    // Funcion que genera números aleatorios en un array
    function generaAleatorioArray($array,$numMin,$numMax,$numValores,$repetirse)
    {


        for($i = 0; $i < $numValores; $i++)
        {
            $aleatorio = generaAleatorio($numMin,$numMax);

            $array[$i] = $aleatorio;
        }

        return $array;

    }

    // Función que devuelve un nº aleatorio entre 0 y el valor dado
    function generaAleatorio($min,$max)
    {
        return rand($min,$max);
    }

?>
