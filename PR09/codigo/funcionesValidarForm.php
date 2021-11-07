<?php

// Funcion que invoca al resto de funciones que van validando el formulario
function validaFormulario()
{
    /*
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    */

    if (isset($_REQUEST['Enviado'])) {
        $correcto = true;

        // nombre
        if (empty($_REQUEST['nombre']))
            $correcto = false;

        // Apellido
        if (empty($_REQUEST['apellido']))
            $correcto = false;

        // Fecha
        if (empty($_REQUEST['fecha']))
            $correcto = false;

        
    } else {
        $correcto = false;
    }

    return $correcto;
}

// Función que valida que se ha enviado el formulario
function validaEnviado($enviado)
{


    if (isset($enviado)) {
        $correcto = true;
    } else {
        $correcto = false;
    }

    return $correcto;
}

// Funcion que valida si está vacío un campo
function validaSiVacio($campo)
{

    if (isset($_REQUEST['Enviado'])) {
        // Si no está vacío
        if (!empty($_REQUEST[$campo])) {
            // Muestro el valor del campo en el input
            echo $_REQUEST[$campo];

            $correcto = true;
        } else {
            $correcto = false;
        }

        return $correcto;
    }
}

// Funcion que imprime un mensaje de error en el caso de que el campo esté vacío
function imprimeError($idCampo, $campo, $mensaje)
{
    if (isset($_REQUEST['Enviado']) && empty($_REQUEST[$campo])) {
?>
        <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label>
        <?php
    }
}


// Función que muestra los datos del formulario
function muestraDatosFormulario()
{
    // nombre
    if (!empty($_REQUEST['nombre']))
        echo "El nombre es: <b>" . $_REQUEST["nombre"] . "</b><br>";

    // Apellido
    if (!empty($_REQUEST['apellido']))
        echo "El apellido es: <b>" . $_REQUEST["apellido"] . "</b><br>";

    // Fecha
    if (!empty($_REQUEST['fecha']))
        echo "La fecha es: <b>" . $_REQUEST["fecha"] . "</b><br>";

    // Email
    if (!empty($_REQUEST['email']))
        echo "El email es: <b>" . $_REQUEST["email"] . "</b><br>";

}

?>