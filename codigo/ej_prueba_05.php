<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej prueba - 05</title>

    <!-- CSS -->
    <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <!-- 
            // Enunciado //

        - Escriba un programa que pida un año y que escriba si es bisiesto o no.
            Los años bisiestos son múltiplos de 4, pero los múltiplos de 100 no lo son,
            aunque los múltiplos de 400 sí.
    -->

    <h1>Años bisiestos</h1>

    <p>
        <b>Escriba un programa que pida un año y que escriba si es bisiesto o no.
            Los años bisiestos son múltiplos de 4, pero los múltiplos de 100 no lo son,
            aunque los múltiplos de 400 sí.</b>
    </p>

    <!-- PHP -->
    <?php
    
        $anio = $_GET["anio"];

        if(($anio%4 == 0) && (($anio%100 != 0) || ($anio%400 == 0)))
        {
            echo "El año ".$anio. " es bisiesto";
        }
        else
        {
            echo "El año ".$anio. " NO es bisiesto";
        }
            
    ?>

</body>
</html>