<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa</title>

     <!-- CSS -->
     <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <!-- Título -->
    <h1>PHP que procesa la información</h1>

    <!-- Enlace que accede a otra pagina php que muestra/imprime el codigo de la misma -->
    <!-- Incluir en todos los .php -->
    <a target="_blank" id="idVerCodigo" title="Vér el código PHP" href="codigoPHP.php?paginaPHP=<?
        $pagina = basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;?>"
    >
        <img src="../img/icono_ver_codigo.png" alt="suu" width="35px" height="35px"></img>
    </a>
    
    <h2>Informacion enviada desde <i>formulario.php</i></h2>

    <!-- PHP -->
    <?php

        /*
        // Enviado a través de GET //
        echo "<h3>Enviado a través de GET</h3>";;

        // Imprimo lo que se ha enviado por la url (array)
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";

        echo "<br>";

        echo "La variable de nombre es: <b>" . $_GET["nombre"] . "</b><br>";
        echo "La variable de contraseña es: <b>" . $_GET["pass"] . "</b>";

            // Nota: nunca se debe enviar por GET (inseguro)
        */

        // Enviado a través de POST //
        echo "<h3>Enviado a través de POST</h3>";;

        // Imprimo lo que se ha enviado por la url (array)
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        echo "<br>";

        // Imprimo los datos enviados desde el formulario
        echo "La variable de nombre es: <b>" . $_POST["nombre"] . "</b><br>";
        echo "La variable de contraseña es: <b>" . $_POST["pass"] . "</b><br>";
        echo "El género es: <b>" . $_POST["radioButtonsGenero"] . "</b><br>";
        echo "El ciclo es: <b>" . $_POST["ciclo"] . "</b><br>";

        echo "Las aficiones son:<br>";

        foreach ($_POST["Aficiones"] as $value)
        { 
            echo "&nbsp;&nbsp;&nbsp;<b>-" . $value . "</b><br>";

        }

    ?>

</body>
</html>