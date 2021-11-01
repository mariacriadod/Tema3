<?php

    // Funcion que invoca al resto de funciones que van validando el formulario
    function validaFormulario()
    {
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";

        $correcto;

        if(validaEnviado($_REQUEST['Enviado']))
        {
            // nombre
            /*
            if((validaNombreCorrecto($_REQUEST['nombre']))&&((validaNombreIncorrecto($_REQUEST['nombre']))))
            {

            }
            */
            //validaSiVacio($_REQUEST('nombre'));

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

    // Funcion que valida si está vacío un campo
    function validaSiVacio($campo)
    {
        // Si no está vacío
        if(!empty($campo))
        {
            // Muestro el valor del campo en el input
            echo $campo;
        }
        else
        {

        }

    }

    // Funcion que imprime un mensaje de error en el caso de que el campo esté vacío
   function imprimeError($idCampo,$campo,$mensaje)
   {
       if(isset($_REQUEST['Enviado']) && empty($campo))
       {
        ?>
         <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label> 
        <?php
        }
       
       
   }

   // Función que valida la fecha
   function validaFecha()
   {

   }

   // Funcion que valida los radioButton
   function validaRadioButton($campo,$idCampo,$mensaje)
   {
    // Si se ha seleccionado algun radio button
    if(isset($campo))
    {
        if($campo == 1)
        {

        }
    }
    // Si no...
    else
    {
        ?>
         <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label> 
        <?php
    }
   }

   // 
   function compruebaRadio($radio,$valor)
   {
       if($radio == $valor)
       {
           echo " checked";
       }
   }

   // Funcion que comprueba la seleccion de la lista desplegable
   function compruebaLista($campo,$idCampo, $mensaje)
   {
        // Si el campo seleccionado es el primero...
        if($campo == "no")
        {
            // Muestro un mensaje de error
            ?>
                <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje ?></label> 
            <?php        
        }
        

   }

   // Funcion que guarda el valor seleccionado de la lista
   function guardaValorLista($campo,$opcion)
   {
        if($campo == $opcion)
        {
            echo "selected";
        }

   }

   // Funcion que comprueba los check
   function compruebaCheck($campo,$idCampo,$mensaje)
   {
       // Si no se ha seleccionado ningun check...
        if((!isset($campo)))
        {
            // Muestro un mensaje de error
            ?>
                <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje?></label> 
            <?php           
        }
        // Entre 1 y 3 checks...
        else if((count($campo) > 3)||(count($campo) < 1))
        {
            ?>
                <label for="<?php echo $idCampo ?>" style="color:red;"><?php echo $mensaje?></label> 
            <?php
        }

   }

   // Funcion que guarda los check seleccionados
   function guardaValorCheck($check, $valor,$posicion)
   {

        for($i = 0; $i < count($check);$i++)
        {
            if($check[$i] == $valor)
             {
                  echo " checked";
            }
        }
       
   }

   // Funcion que guarda el archivo
   function guardaArchivo($idCampo)
   {
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
                //echo "<br>Error al guardar el fichero.";
                ?> <label for="<?php echo $idCampo ?>" style="color:red;">Error al guardar el archivo</label> <?php

            }

    }

   }
   
?>