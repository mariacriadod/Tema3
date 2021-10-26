<!-- FICHERO QUE CONTIENE VARIAS FUNCIONES -->

<!-- PHP -->
<?php

    // FUNCION SIN PARAMETROS
    // Funcion que muestra el hola mundo
    function saludo()
    {
        echo "<p>Hola Mundo</p>";
    }

    // FUNCION CON PARAMETROS
    // Funcion que muestra el hola mundo
    function saludoNombre($nombre)
    {
        echo "<p>Hola " .$nombre . "</p>";
    }


    // FUNCION CON ARGUMENTOS PREDEFINIDOS (usa el dado por defecto, pero se le puede pasar)
    // Funcion que muestra un precio con IVA
    function precioIVA($precio,$iva=0.21)
    {
        echo "<p>El precio es " . ($precio * (1 + $iva)) ."</p>";
    }

    // FUNCION QUE DEVUELVE UN VALOR
    // Funcion que devuelve un precio con IVA (String)
    function precioIVAReturn($precio,$iva=0.21)
    {
        return "<p>El precio es " . ($precio * (1 + $iva)) ."</p>";
    }

    // FUNCION QUE MODIFICA UN VALOR
    // Funcion que modifica el valor de una variable concreta (precio)
    // Con el '&' se le indica que acceda por referencia a esa variable (direccion de memoria)
    function precioAPrecioConIVA(&$precio,$iva=0.21)
    {
        $precio = ($precio * (1 + $iva));
    }

    // FUNCION QUE AÑADE UN VALOR A UN ARRAY 
    // Se le añade un valor en funcion de su índice (se le pasa un array por referencia)
    function añade(&$array)
    {
        // Se recoje el índice
        $indice = count($array);

        $array[$indice] = $indice;
    }

    // FUNCION QUE MODIFICA UN OBJETO
    // Ya no hace falta el '&', ya que al ser un objeto lo modifica por referencia
    function agrandaFigura($objetoFigura)
    {
        // Incremento en uno el valor de su lado
        $objetoFigura->lado++;
    }

?>
