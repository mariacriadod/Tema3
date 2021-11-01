<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej prueba - 04</title>

    <!-- CSS -->
    <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <!-- 
            // Enunciado //

        - Realiza un programa que le introduzca un valor de un producto con 2 decimales y posteriormente
        un valor con el que pagar por encima.

        (Valor del producto 6.33$ y ha pagado con 10$).

        Muestra el número mínimo de monedas con las que puedes devolver el cambio.

    -->

    <h1>Ejercicio de bucles for</h1>

    <!-- Enlace que accede a otra pagina php que muestra/imprime el codigo de la misma -->
    <!-- Incluir en todos los .php -->
    <a target="_blank" id="idVerCodigo" title="Vér el código PHP" href="codigoPHP.php?paginaPHP=<?
        $pagina = basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;?>"
    >
        <img src="../img/icono_ver_codigo.png" alt="suu" width="35px" height="35px"></img>
    </a>
    
    <p>
        <b>Realiza un programa que le introduzca un valor de un producto con 2 decimales y posteriormente
        un valor con el que pagar por encima.
        Muestra el número mínimo de monedas con las que puedes devolver el cambio.</b>
    </p>

    <!-- PHP -->
    <?php
    
        $precio = $_GET['precio'];
        $pago = $_GET['pago'];
    
        echo 'El precio es: ' . $precio . '€<br>';
        echo 'Se paga con la cantidad de: ' . $pago . '€<br><br>';

        // Número de centimos a devolver
        $numCentimos = 0;

        // Se incrementa de centimo en centimo
        for($i = $precio + 0.01; $i <= $pago; $i += 0.01)
        {
            // Número de centimos a devolver
            $numCentimos++;
        }

        // contadores de monedas
        $numMoneda2e = 0;
        $numMoneda1e = 0;
        $numMoneda50c = 0;
        $numMoneda20c = 0;
        $numMoneda10c = 0;
        $numMoneda5c = 0;
        $numMoneda2c = 0;
        $numMoneda1c = 0;

        // Iterador
        $i = 0;

        // Validación de datos
        if($pago < $precio)
        {
            echo 'La cantidad a pagar es insuficiente.';
        }
        else
        {

            // Se calcula la diferencia
            $diferencia = $pago - $precio;

            echo 'Se deben devolver ' . $numCentimos . ' céntimos ('  . $diferencia . '€).<br><br>';
    
            // 2€
            while($numCentimos >= 200)
            {
                $numMoneda2e++;
                $numCentimos -= 200;
            }

            if($numMoneda2e > 0)
            {
                echo 'Se deben devolver ' . $numMoneda2e . ' monedas de 2€.<br>';
            }

            // 1€
            while($numCentimos >= 100)
            {
                $numMoneda1e++;
                $numCentimos -= 100;
            }

            if($numMoneda1e > 0)
            {
                echo 'Se deben devolver ' . $numMoneda1e . ' monedas de 1€.<br>';
            }

            // 0.5€
            while($numCentimos >= 50)
            {
                $numMoneda50c++;
                $numCentimos -= 50;
            }

            if($numMoneda50c > 0)
            {
                echo 'Se deben devolver ' . $numMoneda50c . ' monedas de 0.5€.<br>';
            }

            // 0.2€
            while($numCentimos >= 20)
            {
                $numMoneda20c++;
                $numCentimos -= 20;
            }

            if($numMoneda20c > 0)
            {
                echo 'Se deben devolver ' . $numMoneda20c . ' monedas de 0.2€.<br>';
            }

            // 0.1€
            while($numCentimos >= 10)
            {
                $numMoneda10c++;
                $numCentimos -= 10;
            }

            if($numMoneda10c > 0)
            {
                echo 'Se deben devolver ' . $numMoneda10c . ' monedas de 0.1€.<br>';
            }

            // 0.05€
            while($numCentimos >= 5)
            {
                $numMoneda5c++;
                $numCentimos -= 5;
            }

            if($numMoneda5c > 0)
            {
                echo 'Se deben devolver ' . $numMoneda5c . ' monedas de 0.05€.<br>';
            }

            // 0.02€
            while($numCentimos >= 2)
            {
                $numMoneda2c++;
                $numCentimos -= 2;
            }

            if($numMoneda2c > 0)
            {
                echo 'Se deben devolver ' . $numMoneda2c . ' monedas de 0.02€.<br>';
            }

            // 0.01€
            while($numCentimos >= 1)
            {
                $numMoneda1c++;
                $numCentimos -= 1;
            }

            if($numMoneda1c > 0)
            {
                echo 'Se deben devolver ' . $numMoneda1c . ' monedas de 0.01€.<br>';
            }
        }

        
       
    ?>

</body>
</html>