<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa</title>

     <!-- CSS -->
     <link href="/Tema3/webroot/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <!-- Título -->
    <h1>PHP que procesa la información</h1>
    <h2>Informacion enviada desde <i>formulario.php</i></h2>

    <!-- PHP -->
    <?php

        // Imprimo lo que se ha enviado por la url (array)
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";

        echo "<br>";

        echo "La variable de nombre es: <b>" . $_GET["nombre"] . "</b>";
    ?>

</body>
</html>