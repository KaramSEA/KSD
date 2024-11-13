<?php
require "./funciontions.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">    
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">

        <label for="telefono">Telefono</label>
        <input type="text" name="telefono">

        <label for="tiponumero">Personal</label>
        <input type="radio" name="tiponumero" id="personal">
        <label for="tiponumero">Trabajo</label>
        <input type="radio" name="tiponumero" id="trabajo">
        <label for="tiponumero">Otros</label>
        <input type="radio" name="tiponumero" id="otros">

    </form>
</body>
</html>