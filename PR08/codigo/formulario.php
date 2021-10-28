<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <!-- Enlace al css -->
    <link rel="stylesheet" href="../webroot/css/style.css">

    <!-- @author - Ismael Maestre Carracedo  -->
</head>
<body>
    <h1>Formulario</h1>

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

        // Se validan los datos
        /*
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

            // Si se ha seleccionado uno de los check
            if(isset($_REQUEST['radioButtonsGenero']))
            {
                echo "<br>Ha seleccionado el genero " . $_REQUEST['radioButtonsGenero'];
            }

            // Si se ha abierto la lista y se ha seleccinado uno
            if($_REQUEST['ciclo'] == "no")
            {
                echo "Debe seleccionar un ciclo...";
            }

            
        }

        */


       
    ?>

<!-- Formulario por POST -->
    <!-- Le indico en el actio que me redirija a este mismo fichero para validarlo -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="formulario">

        <!-- Nombre - Alfabetico -->
        <p>
            <label for="idNombre">Nombre:</label>
            <input type="text" name="nombre" id="idNombre" size="40" placeholder="Nombre" required>
        </p>

        <!-- Nombre Opcional -  Alfabetico Opcional -->
        <p>
            <label for="idNombreOpcional">Nombre (opcional):</label>
            <input type="text" name="nombreOpcional" id="idNombreOpcional" size="40" placeholder="Nombre">
        </p>

        <!-- Apellido - Alfanumérico -->
        <p>
            <label for="idApellido">Apellido:</label>
            <input type="text" name="apellido" id="idApellido" size="40" placeholder="Apellido"  required>
        </p>

        <!-- Apellido Opcional - Alfanumérico Opcional -->
        <p>
            <label for="idApellidoOpcional">Apellido (opcional):</label>
            <input type="text" name="apellidoOpcional" id="idApellidoOpcional" size="40" placeholder="Apellido">
        </p>

        <!-- Fecha -->
        <p>
            <label for="idFecha">Fecha:</label>
            <input type="date" name="fecha" id="idfecha" size="40"  required>
        </p>

        <!-- Fecha Opcional -->
        <p>
            <label for="idFechaOpcional">Fecha (opcional):</label>
            <input type="date" name="fechaOpcional" id="idFechaOpcional" size="40">
        </p>

        <!-- Radio Button Obligatorio -->
        <p><b>Radio Button Obligatorio</b></p>

        <label for="idRadio1">Opción 1
            <input type="radio" name="radioButtons" id="idRadio1" value="1">
        </label>

        <label for="idRadio2">Opción 2
            <input type="radio" name="radioButtons" id="idRadio2" value="2">
        </label>

        <label for="idRadio3">Opción 3
            <input type="radio" name="radioButtons" id="idRadio3" value="3">
        </label>

        <!-- Input de tipo Select -->
        <p><b>Selecciona una opción:</b></p>

        <select name="ciclo" id="idCiclo" id="idCiclo" required>
            <option value="no">Seleccione una opción</option>
            <option value="opcion1">1ª Opción</option>
            <option value="opcion2">2ª Opción</option>
            <option value="opcion3">3ª Opción</option>
        </select>

        <!-- Input de tipo check -->
        <p><b>Elije al menos 1 y máximo 3</b></p>

        <input type="checkbox" name="checks[]" id="idcheck1" value="Check 1">
        <label for="idcheck1">Check 1</label>

        <input type="checkbox" name="checks[]" id="idcheck2" value="Check 2">
        <label for="idcheck2">Check 2</label>

        <input type="checkbox" name="checks[]" id="idcheck3" value="Check 3">
        <label for="idcheck2">Check 3</label>

        <input type="checkbox" name="checks[]" id="idcheck4" value="Check 4">
        <label for="idcheck4">Check 4</label>

        <input type="checkbox" name="checks[]" id="idcheck5" value="Check 5">
        <label for="idcheck5">Check 5</label>

        <input type="checkbox" name="checks[]" id="idcheck6" value="Check 6">
        <label for="idcheck6">Check 6</label>

        <!-- Teléfono - Numérico -->
        <p>
            <label for="idTelefono">Teléfono:</label>
            <input type="number" name="telefono" id="idTelefono" size="40" placeholder="Teléfono" required>
        </p>

         <!-- E-mail  -->
         <p>
            <label for="idEmail">E-mail:</label>
            <input type="email" name="email" id="idEmail" size="40" placeholder="E-mail" required>
        </p>

        <br><br>

        <!-- Input de tipo Submit -->
        <!-- Se le pone el atributo name para evitar ataques -->
        <input type="submit" value="Enviar" name="Enviado">

        <!-- Input de tipo Reset -->
        <input type="reset" value="Limpiar">
    </form>


    <!-- Footer informativo -->
    <footer>&copy Ismael Maestre</footer>

</body>
</html>
