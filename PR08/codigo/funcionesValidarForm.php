<?php

    // Funcion que invoca al resto de funciones que van validando el formulario
    function validaFormulario()
    {
        print_r($_REQUEST);
        $correcto;

        if(validaEnviado($_REQUEST['Enviado']))
        {
            // nombre
            if((validaNombreCorrecto($_REQUEST['nombre']))&&((validaNombreIncorrecto($_REQUEST['nombre']))))
            {

            }


        }
    }

    // Función que valida que se ha enviado el formulario
    function validaEnviado($enviado)
    {
        $correcto;

        if(isset($enviado))
        {
            $correcto = true;
        }
        else
        {
            $correcto = false;
        }

        return $correcto;
    }

    // Función que valida el nombre correcto (Input Text)
    function validaNombreCorrecto($nombre)
    {
        $correcto;
        

        if(!empty($nombre))
        {
            //echo "<br>El nombre es: " . $_REQUEST['nombre'];
            $correcto = true;
        }
        else
        {
            $correcto = false;
        }

        return $correcto;
    }

    // Función que valida el nombre correcto (Input Text)
    function validaNombreIncorrecto($nombre)
    {
        $correcto;

        if(empty($nombre))
        {
            $correcto = true;
        }
        else
        {
            $correcto = false;
        }

        return $correcto;
    }
?>