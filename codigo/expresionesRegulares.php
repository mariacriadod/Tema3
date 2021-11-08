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

    <h1>Expresiones Regulares</h1>

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

        echo "<h1>0 = false, 1 = true</h1>";

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

        $patron = '/Nov(iembre|ember)?/';
        $cadena = "Nov";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        //
        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "Noviembre";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "November";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // Final del String //
        echo "<h2>$ es el final del string</h2>";

        $patron = '/21$/';

        $cadena = "10/12/2021";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        //
        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "21/12/2020";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // Principio del String //
        echo "<h2>^ es el principio del string</h2>";

        $patron = '/^ES/';

        $cadena = "56487 4 984 84 684";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "ES535 2353 486 ";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // ^ Para que no contenga //
        echo "<h2>^ Sirve para decir que no contenga </h2>";
        
        $patron = '/log[^AS]/';
        $cadena = "log";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "loga";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "logA";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "logAS";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "logS";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "logZ";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // Etiqueta de cierre de html //
        echo "<h2>Etiqueta de cierre de html</h2>";

        //+ puede coincidir una o mas veces
        $patron = '/<\/[a-z]+[0-9]?>/i';

        $cadena = "<h1>Tambien sirve para decir que no contenga</h1>
        <p>Tambien sirve para decir que no contenga</p>
        <i>Tambien sirve para decir que no contenga</i>";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        //Puede tener mas de una letra pero al menos una
        //$patron='/<\/(.)+>/';
        echo preg_match($patron, $cadena), "<br><br>";
        
        preg_match_all($patron, "<span>Tambien sirve para decir que no contenga</span>
        <p>Tambien sirve para decir que no contenga</p>
        <i>Tambien sirve para decir que no contenga</i>", $array);

        echo "<pre>";

            foreach ($array as $value) 
            {
                $value = str_replace("<","&lt",$value);
                print_r(str_replace(">","&gt",$value));
            }
            //print_r($array);
        echo"</pre>"; 
        
        // Comprobar que el IBAN es valido va a entrar en el examen
        echo "<h2>Numero de cuenta valido</h2>";

        $patron = '/^ES[0-9]{2}\s[0-9]{4}\s[0-9]{4}\s[0-9]{2}\s[0-9]{10}/';
        $cadena = "ES12 1234 1234 12 1234567890";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "ES535 2353 486 ";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // Numeros válidos del 0 al 999 //
        echo "<h2>Numeros validos del 0 al 999</h2>";

        //^ Que obligatoriamente empiece por ese caracter y el $ que obligatoriamente termine por ese caracter
        $patron = '/^[0-9]{1,3}$/';

        $cadena = "";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "9999";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "999";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //\d Cualquier numero \D cualquier letra
        $patron = '/dD/';

        // No puede estar vacío y mínimo 3 carácteres //
        echo "<h2>No puede estar vacío y mínimo 3 carácteres (Primera letra en mayus)</h2>";

        $patron='/^[A-Z]{1}[a-z]{2}/';

        $cadena = "David";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "Dav";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "D";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "dav";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

         //
         $cadena = "dAV";
         echo "<b>Cadena:</b>" . " " . $cadena . "<br>";
 
         echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "dava";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "da";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // Minimo 3 caracteres en el primer apellido y minimo 3 caracteres en el segundo //
        echo "<h2>Minimo 3 caracteres en el primer apellido y minimo 3 caracteres en el segundo</h2>";

        //$patron = '/[A-Z]{3}\s[A-Z]{3}/i';

        $patron = '/^[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}/';


        $cadena = "Vice ee";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "vic her";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";
        
        // dos digitos guion o barra dos digitos guion o barra cuatro digitos Y mayor de edad
        // FECHA //
        echo "<h2>Fecha</h2>"; //[0-9]{2}(-|\/)[0-9]{4}

        //$patron = '/[1-31]{1}(-|\/)[0-9]{2}(-|\/)[0-9]{4}/';

        // Formato dia mes año tanto con guiones como con barras
        $patron = '/^(?:3[01]|[12][0-9]|0?[1-9])([\-\/.])(0?[1-9]|1[1-2])\1\d{4}$/';

        $cadena = "2021/01/23";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        
        echo preg_match($patron, $cadena), "<br><br>";
        //
        $arrayFecha = getdate();
        $diaActual = $arrayFecha['mday'];
        $mesActual = $arrayFecha['mon'];
        $añoActual = $arrayFecha['year'];

        //$hoy = date('d-m-y',getdate());
        //$cadenaActual = $diaActual + "-" + $mesActual + "-" + $añoActual;

      //  echo "Cadena actual: " . $cadenaActual;
        $hoy = date('d-m-y');

        //$fechaActual = new DateTime($hoy);
//        $fechaIntroducida = new DateTime($cadena);

        $actual = "07/11/2021";
        $introducida = "08/11/2021";

        // DateTime (y-m-d)
        $fechaActual = new DateTime('07/11/2021');
        $fechaIntroducida = new DateTime('08/11/2021');

        $cadena = strtotime($cadena);

        echo "La fecha actual es: " . date('d-m-y');
        echo "La fecha introducida es: " . date('d-m-y',$cadena);

        $difDias = ($fechaActual->diff($fechaIntroducida))->format('%R%a days');

        echo "La diferencia de dias es de: " . $difDias;

        // 6570 dias == 18 años (365 * 18)
        if($difDias >= 6570)
        {
            echo "Es mayor de edad.";
        }
        else
        {
            echo "No es mayor de edad.";
        }

        //echo "La fecha es: " . $fecha . "<br>";

        //
        $cadena = "1/2/2021";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        //
        $cadena = "01/02/2021";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // DNI //
        echo "<h2>DNI</h2>";

        $patron = '/^[0-9]{8}[A-Z]{1}$/';

        $cadena = "12345678B";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";

        // Correo electrónico //
        echo "<h2>Comprobar correo </h2>";

        $patron = '/[a-z]+@[a-z]+\.[a-z]{2,}/';

        $cadena = "da@g.co";

        echo "<b>Patrón:</b>" . " " . $patron . "<br>";
        echo "<b>Cadena:</b>" . " " . $cadena . "<br>";

        echo preg_match($patron, $cadena), "<br><br>";
        
    ?>
        
</body>
</html>