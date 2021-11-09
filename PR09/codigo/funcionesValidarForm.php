<?php

// Funcion que invoca al resto de funciones que van validando el formulario
function validaFormulario()
{
    /*
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    */

    if (isset($_REQUEST['Enviado'])) 
    {
        $correcto = true;

        /*
        // nombre
        if (empty($_REQUEST['nombre']))
            $correcto = false;

        // Apellido
        if (empty($_REQUEST['apellido']))
            $correcto = false;

        // Fecha
        if (empty($_REQUEST['fecha']))
            $correcto = false;

        // DNI
        if (empty($_REQUEST['dni']))
            $correcto = false;

        // DNI
        if (empty($_REQUEST['email']))
            $correcto = false;
        */
        
        
    } else {
        $correcto = false;
    }

    return $correcto;
}

// Función que valida que se ha enviado el formulario
function validaEnviado($enviado)
{
    $enviado = $_REQUEST['Enviado'];

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
    if (isset($_REQUEST['Enviado']) && empty($_REQUEST[$campo])) 
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
    if (!empty($_REQUEST['nombre']))
        echo "El nombre es: <b>" . $_REQUEST["nombre"] . "</b><br>";

    // Apellido
    if (!empty($_REQUEST['apellido']))
        echo "El apellido es: <b>" . $_REQUEST["apellido"] . "</b><br>";

    // Fecha
    if (!empty($_REQUEST['fecha']))
        echo "La fecha es: <b>" . $_REQUEST["fecha"] . "</b><br>";

    // Fecha
    if (!empty($_REQUEST['fecha']))
        echo "La fecha es: <b>" . $_REQUEST["fecha"] . "</b><br>";

    // Email
    if (!empty($_REQUEST['dni']))
        echo "El dni es: <b>" . $_REQUEST["dni"] . "</b><br>";

    // Email
    if (!empty($_REQUEST['email']))
        echo "El email es: <b>" . $_REQUEST["email"] . "</b><br>";

}

// Funcion que valida el nombre con un patrón
function validaNombre($idCampo,$mensaje)
{
    // No puede estar vacío y mínimo ha de tener 3 carácteres
    // La primera letra en mayúscula

    // Patrón
    $patron = '/^[A-Z]{1}[a-z]{2}/';

    if(((isset($_REQUEST["nombre"])&& (isset($_REQUEST['Enviado'])&&(!empty($_REQUEST["nombre"])))))) 
    {
        $nombre = $_REQUEST["nombre"];

        // Si cumple el patrón...
        if(preg_match($patron, $nombre) == true)
        {
            //$correcto = true;
        }
        // Si no...
        else
        {
            //$correcto = false;

            ?>
            <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label>
            <?php
        }
    }

    //return $correcto;
}

// Funcion que valida el nombre con un patrón
function validaApellido($idCampo,$mensaje)
{
    // No puede estar vacío y mínimo 3 carácteres en el 1º ape + espacio + mínimo 3 carácteres en el 2º ape
    // La primera letra en mayúscula

    // Patrón
    $patron = '/^[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}/';

    if(((isset($_REQUEST["apellido"])&& (isset($_REQUEST['Enviado'])&&(!empty($_REQUEST["apellido"])))))) 
    {
        $apellido = $_REQUEST["apellido"];

        // Si cumple el patrón...
        if(preg_match($patron, $apellido) == true)
        {
            //$correcto = true;
        }
        // Si no...
        else
        {
            //$correcto = false;

            ?>
            <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label>
            <?php
        }
    }
    

    //return $correcto;
}

// Funcion que valida el nombre con un patrón
function validaFecha($idCampo,$mensaje)
{
    // Valida la fecha tanto en el formato español como en el formato inglés
    // Patrón
    $patron = '/[0-9]{2}(-|\/)[0-9]{2}(-|\/)[0-9]{4}/';

    $correcto = false;

    if(((isset($_REQUEST["fecha"])&& (isset($_REQUEST['Enviado'])&&(!empty($_REQUEST["fecha"])))))) 
    {
        $fecha = $_REQUEST["fecha"];

        // Si cumple el patrón...
        if(preg_match($patron,$fecha) == true)
        {
            $correcto = true;

            $fechaHace18años = strtotime(date ('d-m-Y', time())."- 18 years");
            $fechaIntroducida = strtotime($_REQUEST['fecha']);

            echo "Fecha Hace 18: " . $fechaHace18años;
            echo "Fecha introducida: " . $fechaIntroducida;

            if($fechaIntroducida >= $fechaHace18años)
            {
                $correcto = true;
            }
            else
            {
                $correcto = false;

                ?>
                <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label>
                <?php
            }

       
        }
        // Si no...
        else
        {
            $correcto = false;

            ?>
            <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label>
            <?php
        }
    }

    return $correcto;
}

// Funcion que valida el dni mediante un patrón
function validaDNI($idCampo,$mensaje)
{
    $patron = '/^[0-9]{8}[A-Z]{1}$/';

    if(((isset($_REQUEST["dni"])&& (isset($_REQUEST['Enviado'])&&(!empty($_REQUEST["dni"])))))) 
    {
        $dni = $_REQUEST["dni"];

        // Si cumple el patrón...
        if(preg_match($patron, $dni) == true)
        {
            $correcto = true;

            // Compruebo que la letra es acorde al dni //
            // Letra del dni (substring de toda la cadena)
            $letra = substr($dni, -1);

            // Números del dni (substring de la cadena)
            $numeros = substr($dni, 0, -1);

            // Resto
            $resto = $numeros % 23;  

            // Todas las letras del dni
            $palabro = 'TRWAGMYFPDXBNJZSQVHLCKE';  

            // Si la letra es acorde a las letras del dni...
            if($palabro{$resto} == $letra)
            {
                //$correcto = true;
            }
            else
            {
                //$correcto = false;

                ?>
                <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label>
                <?php
            }
        }
        // Si no...
        else
        {
            //$correcto = false;

            ?>
            <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label>
            <?php
        }
    }

    //return $correcto;

}

// FUnción que valida el correo electrónico mediante un patrón
function validaEmail($idCampo,$mensaje)
{
    $patron = '/[a-z]+@[a-z]+\.[a-z]{2,}/';

    if(((isset($_REQUEST["email"])&& (isset($_REQUEST['Enviado'])&&(!empty($_REQUEST["email"])))))) 
    {
        $email = $_REQUEST["email"];

        // Si cumple el patrón...
        if(preg_match($patron, $email) == true)
        {
            //$correcto = true;
        }
        // Si no...
        else
        {
            //$correcto = false;

            ?>
            <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label>
            <?php
        }
    }

    //return $correcto;

}

?>