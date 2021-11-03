<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Autovalidado</title>

     <!-- CSS -->
     <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <h1>Formulario Autovalidado</h1>

    <!-- Enlace que accede a otra pagina php que muestra/imprime el codigo de la misma -->
    <!-- Incluir en todos los .php -->
    <a target="_blank" id="idVerCodigo" title="Vér el código PHP" href="codigoPHP.php?paginaPHP=<?
        $pagina = basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;?>"
    >
        <img src="../img/icono_ver_codigo.png" alt="suu" width="35px" height="35px"></img>
    </a>

    <!-- VALIDACION -->
    <!-- Si tiene nombre y contraseña... lo muestra -->
    <?php

        // 1ª opcion - Ver si hay algo en POST
        /*
        if(count($_POST) > 0)   // Tambien se puede hacer con $_REQUEST (recoge tanto post como get)
        {
            // Informo 
            echo "El formulario ha sido enviado";
        }
        */

        
        // 2ª opcion - Ver si existe el REQUEST "Enviado"
        if(isset($_REQUEST['Enviado']))   // Tambien se puede hacer con $_REQUEST (recoge tanto post como get)
        {
            // Informo 
            //echo "El formulario ha sido enviado.<br>";

            // Valido los datos //
            // Si existe el nombre... (validando texto)
            if(!empty($_REQUEST['nombre']))
            {
                echo "<br>El nombre es: " . $_REQUEST['nombre'];
            }
            
            // Si existe la contraseña... (validando texto)
            if(!empty($_REQUEST['pass']))
            {
                echo "<br>La contraseña es: " . $_REQUEST['pass'];
            }

            // Si se ha seleccionado uno de los radioButton
            if(isset($_REQUEST['radioButtonsGenero']))
            {
                echo "<br>Ha seleccionado el genero " . $_REQUEST['radioButtonsGenero'];
            }

            // Si se ha abierto la lista y se ha seleccinado 'no' (la primera opcion)
            if($_REQUEST['ciclo'] == "no")
            {
                echo "<br>Debe seleccionar un ciclo...";
            }

            // Se validan los check... 
            // Si no existe 'aficiones' ...
            if(!isset($_REQUEST['Aficiones']))
            {
                echo "<br>No ha seleccionado ninguna afición...";
            }
            // Nº max de valores seleccionados
            else if(count($_REQUEST['Aficiones']) > 3)
            {
                echo "<br>Debe elegir como mucho 3.";
            }

            // Nota: La variable superglobal que guarda los ficheros es $_FILES 
            //print_r($_FILES);

            // Se valida el selector de archivos //
            // Si existe el archivo...
            if(isset($_FILES))
            {
                // Se le dice donde se quiere que se guarde
                $rutaGuardado = "../uploads/";

                // Se le establece el nombre al archivo a guardar
                $rutaConNombreFichero = $rutaGuardado .  $_FILES['archivo']['name'];

                // Si se mueve el fichero del sitio temporal a la ruta especificada...
                if(move_uploaded_file($_FILES['archivo']['tmp_name'],$rutaConNombreFichero))
                {
                    echo "<br>El fichero se ha guardado correctamente.<br>";

                    // Si subo una imagen, la guardo y la cargo en el html //
                    echo "La ruta es: <b>" . $rutaConNombreFichero . "</b><br>";

                    echo "<img src='" . $rutaConNombreFichero . "' alt='Imagen' width='100px' height='100px'>";
                    //<img src="pic_trulli.jpg" alt="Italian Trulli">

                }
                else
                {
                    echo "<br>Error al guardar el fichero.";
                }

            }

            // Nota: para guardar hay que darle permisos a la carpeta donde se va a guardar
                // 'chmod 777 nombreCarpeta'
            
        }
        

        
        // Si el formulario se ha enviado...
        if(!isset($_REQUEST['enviado']))
        {
            echo "<br>NO Se ha enviado el formulario.";
            //header();
        }
        // Si no...
        else
        {
            
            // Para que si se envia el formulatio desaparezca el resto
        }   ////////////// Se quita
        

    ?>

    <!-- Formulario por POST -->
    <!-- Le indico en el action que me redirija a este mismo fichero para validarlo -->
    <!-- enctype="multipart/form-data" para permitir que se puedan cargar archivos -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="formulario" enctype="multipart/form-data">

        <!-- Input de Texto -->
        <p>
            <label for="idNombre">Nombre:</label>
            <input type="text" name="nombre" id="idNombre" size="40" value="<?php
            
                if((!empty($_REQUEST['nombre'])) && isset($_REQUEST['Enviado']))
                {
                    echo $_REQUEST['nombre'];
                }

            ?>">

            <?php

                if((empty($_REQUEST['nombre'])) && isset($_REQUEST['Enviado'])){?>
                    <label for="idNombre" style="color:red;">Debe haber un nombre</label>
            <?php
                }

            ?>

        </p>

        <!-- Input de Password -->
        <p>
            <label for="idPass">Contraseña:</label>
            <input type="password" name="pass" id="idPass">
        </p>

        <!-- Input de tipo RadioButton -->
        <p><b>Género</b></p>
        <label for="idMasculino">Masculino
            <input type="radio" name="radioButtonsGenero" id="idMasculino" value="masculino">
        </label>

        <label for="idFemenino">Femenino
            <input type="radio" name="radioButtonsGenero" id="idFemenino" value="femenino">
        </label>

        <!-- Input de tipo select -->
        <p><b>Ciclo</b></p>
        <select name="ciclo" id="idCiclo" id="idCiclo">
            <option value="no">Seleccione una opción</option>
            <option value="dam">DAM</option>
            <option value="daw">DAW</option>
        </select>

        <!-- Input de tipo check -->
        <p><b>Aficiones</b></p>
        <input type="checkbox" name="Aficiones[]" id="idFutbol" value="futbol">
        <label for="idFutbol">Futbol</label>

        <input type="checkbox" name="Aficiones[]" id="idBar" value="bar">
        <label for="idBar">Bar</label>

        <input type="checkbox" name="Aficiones[]" id="idPadel" value="padel">
        <label for="idPadel">Padel</label>

        <!-- Selector de archivos -->
        <p><b>Selector de Archivos</b></p>

        <p>
            <label for="idArchivo">Subir documento:</label>
            <input type="file" name="archivo" id="idArchivo" required>
        </p>

        <br><br>

        <!-- Input de tipo Submit -->
        <!-- Se le pone el atributo name para evitar ataques -->
        <input type="submit" value="Enviar" name="Enviado">

        <!-- Input de tipo Reset -->
        <input type="reset" value="Limpiar">
    </form>

    <!-- Para que si se envia el formulatio desaparezca el resto -->
    <?php

        // Se pone // }

    ?>

</body>
</html>