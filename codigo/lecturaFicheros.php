<?php

    // Ruta del fichero
    $rutaFichero = "./ficheros/blocDeNotas.txt";

    // 1º - Abrir el fichero (en modo escritura) //

    /*
    // Si no se puede abrir el fichero...
    // fopen(ruta,modoAcceso)
    if(!$fp = fopen($rutaFichero,'w'))
    {
        echo "No se ha podido abrir el fchero";
        exit;
    }
 
    echo $fp;

    // 2º - Escribir en dicho fichero //
    $texto = "Quiero matar a Ismael";

    // Donde lo escribo (puntero a la ruta), que escribo y su tamaño
    fwrite($fp,$texto,strlen($texto));
    */
    
    /*
    // 2º - Escribir al final del fichero //
    // Abrir el fichero (en modo lectura) //

    // Si no se puede abrir el fichero...
    // fopen(ruta,modoAcceso)
    if(!$fp = fopen($rutaFichero,'a'))
    {
        echo "No se ha podido abrir el fchero";
        exit;
    }
 
    echo $fp;

    // Escribir al final en dicho fichero //
    $texto = "\nEscribir al final";

    // Donde lo escribo (puntero a la ruta), que escribo y su tamaño
    fwrite($fp,$texto,strlen($texto));

    // 3º - Cerrar el fichero //
    fclose($fp);
    */

    /*
    // 3º - Leer un fichero //
    // Leer el fichero //
    if(!$fp = fopen($rutaFichero,'r'))
    {
        echo "No se ha podido abrir el fchero";
        exit;
    }
 
    $textoLeido = fread($fp,filesize($rutaFichero));

    // 
    $textoLeido = str_replace("\n","<br>",$textoLeido);

    echo "<h2>Contenido del fichero:</h2><br><br>";
    echo $textoLeido;

    // 3º - Cerrar el fichero //
    fclose($fp);
    */

    // 4º - Modifición de un fichero //


?>