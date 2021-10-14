<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 
            // Enunciado //

        - Realiza un programa que le introduzca un valor de un producto con 2 decimales y posteriormente
        un valor con el que pagar por encima.

        (Valor del producto 6.33$ y ha pagado con 10$).

        Muestra el número mínimo de monedas con las que puedes devolver el cambio.

    -->

    <h1>Ejercicio de arrays</h1>

    <!-- PHP -->
    <?php

    
        $precio = $_GET['precio'];
        $pago = $_GET['pago'];
    
        echo 'El precio es: ' . $precio . '€<br>';
        echo 'Se paga con la cantidad de: ' . $pago . '€<br><br>';

       // $precio = 6.33;
       // $pago = 10;
        
       // Iterador
        $i = 0;

        // Número de centimos a devolver
        $numCentimos = 0;

        // Se incrementa de centimo en centimo
        for($i = $precio + 0.01; $i <= $pago; $i += 0.01)
        {
            // Número de centimos a devolver
            $numCentimos++;
        }

        echo 'Se deben devolver ' . $numCentimos . ' céntimos.<br><br>';


        // contadores de monedas
        $numMoneda2e = 0;
        $numMoneda1e = 0;
        $numMoneda50c = 0;
        $numMoneda20c = 0;
        $numMoneda10c = 0;
        $numMoneda5c = 0;
        $numMoneda2c = 0;
        $numMoneda1c = 0;

        $j = 0;

        // Se calcula el numero de monedas
        for($i = $numCentimos; $i > 0; $i--)
        {

            //for($j = 0; $j <)


            if($i > 200)
            {
                $numCentimos -= 200;
                $numMoneda2e++;
            }
            else if($i > 100)
            {
                $numCentimos -= 100;
                $numMoneda1e++;
            }
            else if($i > 50)
            {
                $numCentimos -= 500;
                $numMoneda50c++;
            }
            else if($i > 20)
            {
                $numCentimos -= 200;
                $numMoneda20c++;
            }
            else if($i > 10)
            {
                $numCentimos -= 10;
                $numMoneda10c++;
            }
            else if($i > 5)
            {
                $numCentimos -= 5;
                $numMoneda5c++;
            }
            else if($i > 2)
            {
                $numCentimos -= 2;
                $numMoneda2c++;
            }
            else if($i > 1)
            {
                $numCentimos -= 1;
                $numMoneda1c++;
            }
            
        }


        echo 'Se deben devolver ' . $numMoneda2e . ' monedas de 2€.<br>';
        echo 'Se deben devolver ' . $numMoneda1e . ' monedas de 1€.<br>';
        echo 'Se deben devolver ' . $numMoneda50c . ' monedas de 50 céntimos.<br>';
        echo 'Se deben devolver ' . $numMoneda20c . ' monedas de 20 céntimos.<br>';
        echo 'Se deben devolver ' . $numMoneda10c . ' monedas de 10 céntimos.<br>';
        echo 'Se deben devolver ' . $numMoneda5c . ' monedas de 5 céntimos.<br>';
        echo 'Se deben devolver ' . $numMoneda2c . ' monedas de 2 céntimos.<br>';
        echo 'Se deben devolver ' . $numMoneda1c . ' monedas de 1 céntimos.<br>';
    ?>

</body>
</html>