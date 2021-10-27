<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

     <!-- CSS -->
     <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
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

    <!-- Formulario por GET (los datos van en la url) -->
    <form action="./procesa.php" method="post" name="formulario">

        <!-- Input de Texto -->
        <p>
            <label for="idNombre">Nombre:</label>
            <input type="text" name="nombre" id="idNombre" size="40">
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

        <br><br>

        <!-- Input de tipo Submit -->
        <input type="submit" value="Enviar los Datos">

        <!-- Input de tipo Reset -->
        <input type="reset" value="Limpiar">
    </form>

    <!-- Formulario por POSt (los datos en la url) -->

</body>
</html>