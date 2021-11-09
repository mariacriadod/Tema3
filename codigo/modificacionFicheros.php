<?php

    // Modificación de un fichero //

    // Buscamos una cadena en el fichero fichero1.txt (contiene jugadores de futbol)

    $rutaFicheroInicial = "./ficheros/fichero1.txt";
    $rutaFicheroTemporal = "./ficheros/ficheroTemporal.txt";


    // Fichero inicial
    if(!$ficheroInicial = fopen($rutaFicheroInicial,'r'))
    {
        echo "No se ha podido abrir el fchero";
        exit;
    }

    // Fichero temporal
    if(!$ficheroTemporal = fopen($rutaFicheroTemporal,'w'))
    {
        echo "No se ha podido abrir el fchero";
        exit;
    }

    // Contador
    $c = 0;

    // Leemos linea a linea el fichero con fgets()
    while($linea = fgets($ficheroInicial,filesize($rutaFicheroInicial)))
    {

        // $linea es la linea del fichero

        /*
        echo "Linea " . $c . ":" . $linea . "<br>";

        $c++;
        */

        // Si encontramos la coincidencia... trim() quita los espacios para que no de error
        if(trim($linea) == "canales")
        {
            // Cambio el valor de la linea a lo que yo quiero
            $linea = "David\n";
        }

        // Escribo cada linea en el fichero Temporal
        fwrite($ficheroTemporal, $linea, strlen(($linea)));
        
    }

    // Cierro los ficheros
    fclose(($ficheroInicial));
    fclose(($ficheroTemporal));

    // reemplazamos el fichero temporal por el incial
    // Para ello, primero borramos su contenido
    unlink($rutaFicheroInicial);

    // Se renombra
    rename($rutaFicheroTemporal,$rutaFicheroInicial);

?>