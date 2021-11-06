<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresiones Regulares</title>

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

        // 0 = false, 1 = true

        // Contiene una Palabra //
        echo '<h2>Contiene la palabra <i>\'Holo\'</i></h2>';

        $patron = '/Holo/';
        $cadena = "Hola me llamo Julian";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br>";

        // Punto comodín //
        echo '<h2>Punto comodín</h2>';

        $patron = '/log./';
        echo "<b>Patrón:</b>" . " " . $patron . "<br>";


        //
        $cadena = "log";

        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";
        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "log3";

        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";
        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "log21";

        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";
        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "loga";

        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";
        echo preg_match($patron, $cadena), "<br><br>";

        // Espacio //
        echo '<h2>Contiene un espacio</h2>';

        $patron = '/a\sa/';
        $cadena = "Maria a casa";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "aa";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // Punto como literal //
        echo '<h2>Punto como literal</h2>';

        $patron = '/a\.a/';
        $cadena = "Maria a casa";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        //
        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "a.a";

        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";
        echo preg_match($patron, $cadena), "<br><br>";

        // Expresiones literales como conjunto //
        echo '<h2>Expresiones literales como conjunto</h2>';

        $patron = '/[abcd][xyz]/';
        $cadena = "ax";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        //
        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "aa";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "dz";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "d z";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // | or Me vale noviembre en ingles y en español //
        echo '<h2>| or Me vale noviembre en ingles y en español</h2>';

        $patron='/Nov(iembre|ember)?/';
        echo preg_match($patron, "Nov");
        echo preg_match($patron, "Noviembre");
        echo preg_match($patron, "November");

        echo "<br>$ es el final del string<br>";
        $patron='/21$/';
        echo preg_match($patron, "10/12/2021");
        echo preg_match($patron, "21/12/2020");

        echo "<br>^ Es el principio del string Ej nº de Cuenta<br>";
        $patron='/^ES/';
        echo preg_match($patron, "56487 4 984 84 684");
        echo preg_match($patron, "ES535 2353 486 ");

        echo "<br>^ Sirve para decir que no contenga <br>";
        
        $patron='/log[^AS]/';
        echo preg_match($patron, "log");
        echo preg_match($patron, "loga");
        echo preg_match($patron, "logA");

        echo "<br>Etiqueta de cierre de html <br>";
        //+ puede coincidir una o mas veces
        //No esta funcionando en este momento
        $patron='/<\/([a-z]+[0-9]?)>/';
        //Puede tener mas de una letra pero al menos una
        //$patron='/<\/(.)+>/';
        echo preg_match($patron, "<h1>Tambien sirve para decir que no contenga</h1>
        <p>Tambien sirve para decir que no contenga</p>
        <i>Tambien sirve para decir que no contenga</i>");
        
        preg_match_all($patron, "<span>Tambien sirve para decir que no contenga</span>
        <p>Tambien sirve para decir que no contenga</p>
        <i>Tambien sirve para decir que no contenga</i>", $array);

        echo "<pre>";
            print_r($array);
        echo"</pre>"; 
        
        //Comprobar que el IBAN es valido va a entrar en el examen
        echo "<br>^ Numero de cuenta valido<br>";
        $patron='/^ES[0-9]{2}\s[0-9]{4}\s[0-9]{4}\s[0-9]{2}\s[0-9]{10}/';
        echo preg_match($patron, "ES12 1234 1234 12 1234567890");
        echo preg_match($patron, "ES535 2353 486 ");

        echo "<br>Numeros validos del 0 al 999<br>";
        //^ Que obligatoriamente empiece por ese caracter y el $ que obligatoriamente termine por ese caracter
        $patron='/^[0-9]{1,3}$/';
        echo preg_match($patron, "");
        echo preg_match($patron, "9999");
        echo preg_match($patron, "99");

        //\d Cualquier numero \D cualquier letra
        $patron='/dD/';

        echo "<br>Minimo 3 caracteres en el nombre<br>";
        $patron='/^[A-Z]{1}[a-z]{2}/i';
        echo preg_match($patron, "david");

        echo "<br>Minimo 3 caracteres en el primer apellido y minimo 3 caracteres en el segundo<br>";
        $patron='/[A-Z]{3}\s[A-Z]{3}/i';
        echo preg_match($patron, "Vic Her");
        
        //dos digitos guion o barra dos digitos guion o barra cuatro digitos Y mayor de edad
        echo "<br>Probar la fecha<br>"; //[0-9]{2}(-|\/)[0-9]{4}
        $patron='/[0-9]{2}(-|\/)[0-9]{2}(-|\/)[0-9]{4}/';
        echo preg_match($patron, "12-1-2021");


        echo "<br>Comprobar DNI con 8 dígitos y una letra<br>";
        $patron='/^[0-9]{8}[A-Z]{1}$/';
        echo preg_match($patron, "12345678B");

        echo "<br>Comprobar correo <br>";
        $patron='/[a-z]+@[a-z]+\.[a-z]{2,}/';
        echo preg_match($patron, "da@g.co");

        //\.{2,}

        
    ?>
        
</body>
</html>