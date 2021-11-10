<?php

// Funcion que invoca al resto de funciones que van validando el formulario
function validaFormulario()
{
    /*
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    */

    // Si se ha enviado el formulario
    if (validaEnviado() == true) 
    {
        $correcto = true;

        // Nombre del Fichero
        // Si el campo nombre está vacío o no cumple el patrón...
        if (empty($_REQUEST['nombreFichero'])||(validaNombreFichero(false) == false))
        {
            $correcto = false;
        }
        
    } else 
    {
        $correcto = false;
    }

    return $correcto;
}

// Función que valida que se ha enviado el formulario
function validaEnviado()
{
    //$enviado = $_REQUEST['Enviado'];

    if (isset($_REQUEST['Leer'])&&(isset($_REQUEST["Editar"])))
    {
        $correcto = true;
    }
    else
    {
        $correcto = false;

    }

    return $correcto;
}

// Funcion que valida si está vacío un campo
function validaSiVacio($campo)
{

    if (validaEnviado()) {
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
    if (isset($_REQUEST['Leer'])&&isset($_REQUEST['Editar'])&& empty($_REQUEST[$campo])) 
    {
        ?>
        <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label>
        <?php
    }
}


// Función que muestra los datos del formulario
function muestraDatosFormulario()
{
    // nombre
    if (!empty($_REQUEST['nombreFichero']))
        echo "El nombre del fichero es: <b>" . $_REQUEST["nombre"] . "</b><br>";

}

// Funcion que valida el nombre del fichero con un patrón
function validaNombreFichero($validando)
{
    // Patrón que valida que sea un fichero con extension .txt
    $patron = '/.\.txt/';

    $correcto = false;

    if(((isset($_REQUEST["nombreFichero"])&& (isset($_REQUEST['Editar'])&& (isset($_REQUEST['Leer'])&&(!empty($_REQUEST["nombreFichero"]))))))) 
    {
        $nombreFichero = $_REQUEST["nombreFichero"];

        // Si cumple el patrón...
        if(preg_match($patron, $nombreFichero) == true)
        {
            $correcto = true;
        }
        // Si no...
        else
        {
            $correcto = false;

            if($validando)
            {
                ?>
                <label for="<?php echo "idNombreFichero" ?>" style="color:red;"><?php echo "Debe introducir un nombre de fichero válido (nombreFichero.txt)." ?></label>
                <?php
            }
            
        }
    }

    return $correcto;
}

?>