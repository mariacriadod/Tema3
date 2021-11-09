<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

    <!-- Enlace al css -->
    <link rel="stylesheet" href="../webroot/css/style.css">

    <!-- @author - Ismael Maestre Carracedo  -->
</head>
<body>

    <h1>Ejercicio 1</h1>

    <!-- Enlace que accede a otra pagina php que muestra/imprime el codigo de la misma -->
    <!-- Incluir en todos los .php -->
    <a target="_blank" id="idVerCodigo" title="Vér el código PHP" href="codigoPHP.php?paginaPHP=<?php
        $pagina = basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;?>"
    >
        <img src="../img/icono_ver_codigo.png" alt="suu" width="35px" height="35px"></img>
    </a>

    <footer>&copy Ismael Maestre</footer>

    <!-- Formulario -->
    <!-- Formulario por POST -->
    <!-- Le indico en el action que me redirija a este mismo fichero para validarlo -->
    <!-- enctype="multipart/form-data" para permitir que se puedan cargar archivos -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="formulario" id="idFormulario"  enctype="multipart/form-data">

        <!-- Nombre Del fichero - Alfabetico -->
        <p>
            <label for="idNombre">Nombre:</label>

            <input type="text" name="nombreFichero" id="idNombreFichero" size="40" placeholder="Nombre" value="<?php

                    // Si no está vacío, se guarda el texto introducido
                    validaSiVacio('nombreFichero');
                   
                ?>">

                <?php

                    // En caso de que esté vacío, se muestra un error
                    imprimeError("idNombreFichero",'nombreFichero',"Debe introducir un nombre");

                    // Valida el nombre mediante un patrón
                    validaNombre(true);
                ?>

        </p>

        <!-- Input de tipo Submit -->
        <!-- Se le pone el atributo name para evitar ataques -->
        <input type="submit" value="Enviar" name="Enviado">

        <!-- Input de tipo Submit -->
        <!-- Se le pone el atributo name para evitar ataques -->
        <input type="submit" value="Enviar" name="Enviado">

    </form>
    <!-- PHP -->
    <?php


    ?>

</body>

</html>