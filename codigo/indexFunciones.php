<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>

    <!-- CSS -->
    <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <h1>Index Funciones</h1>

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

        // Se importa el fichero que contiene las funciones
        require_once("./funciones.php");

        //// Funcion sin parámetros - Se invoca la funcion saludo() ////
        echo "<h2>Funcion sin parámetros</h2>";
        saludo();

        //// Funcion con parámetros - Se invoca la funcion saludoNombre() ////
        echo "<h2>Funcion con parámetros</h2>";
        saludoNombre("Ismael");

        //// Funcion con parámetros predefinidios - Se invoca la funcion precioIVA() ////
        echo "<h2>Funcion con parámetros predefinidos</h2>";
        
        // Sin pasarle el parámetro (coge el de por defecto)
        echo "<h3>Sin pasarle el parámetro</h3>";
        precioIVA(20);

        // Pasándole el parámetro
        echo "<h3>Pasándole el parámetro del IVA</h3>";
        precioIVA(20,0.10);

        //// Funcion que devuelve un parámeto ////
        echo "<h2>Funcion que devuelve un valor</h2>";
        echo precioIVAReturn(20);   // Imprimo el valor que me devuelve

        //// Funcion que modifica un parámeto (por referencia) ////
        echo "<h2>Funcion que modifica un parametro</h2>";
        
        $precio = 10;

        echo "<h3>Antes de cambiar el valor</h3>";
        echo "Precio vale: " . $precio;

        precioAPrecioConIVA($precio);

        echo "<h3>Despues de cambiar el valor</h3>";
        echo "Precio vale: " . $precio;


        //// Funcion que añade una posicion a un array ////
        echo "<h2>Funcion que añade una posición a un array</h2>";

        $array = array();

        // nota: en php, los array se modifican por paso por valor

        // 1ª vez que lo invoco
        echo "<h3>1ª vez que lo invoco</h3>";

        añade($array);

        echo "<pre>";
        print_r($array);
        echo "<pre>";

        // 2ª vez que lo invoco
        echo "<h3>2ª vez que lo invoco</h3>";
        añade($array);

        echo "<pre>";
        print_r($array);
        echo "<pre>";


        //// Objetos por referencia ////
        echo "<h2>Funcion que modifica un objeto</h2>";

        // Clase Figura
        class Figura
        {
            // Atributos
            public $lado = 5;

            // Si no se pone nada, se crea le constructor por defecto
        }

        // Creo un objeto de la clase Figura
        $miFigura = new Figura();

        // Antes de cambiar
        echo "<h3>Antes de cambiar el valor</h3>";

        echo "El lado de la figura es " . $miFigura->lado;

        // Despues de cambiar
        echo "<h3>Despues de cambiar el valor</h3>";

        // Funcion que agranda el lado
        agrandaFigura($miFigura);   // Se le pasa el objeto entero, para que lo modifique por referencia

        echo "El lado de la figura es " . $miFigura->lado;


    ?>

</body>
</html>