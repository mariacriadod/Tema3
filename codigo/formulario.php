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

    <!-- Formulario por GET -->
    <form action="./procesa.php" method="get" name="formulario">

        <!-- Input de Texto -->
        <p>
            <label>Nombre y Apellidos:</label>
            <input type="text" name="nombre" id="idNombre" size="40">
        </p>

        <!-- Input de tipo Submit -->
        <input type="submit" value="Enviar los Datos">

        <!-- Input de tipo Reset -->
        <input type="reset" value="Limpiar">
    </form>

</body>
</html>