<?php
session_start();

function securizar($cadena){
    $cadena = trim($cadena);
    $cadena = htmlspecialchars($cadena);
    $cadena = stripslashes($cadena);
    return $cadena;
}

$nombre=$numero=$tipoNumero="";
$nombreErr=$numeroErr=$tipoNumeroErr="";
$errores=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre'])) {
        $nombre=securizar($_POST["nombre"]);
        if (empty($nombre)) {
            $nombreErr="tienes que introducir el nombre";
            $errores=true;
        }elseif (strlen($nombre)<4) {
            $nombreErr="el nombre no puede tener menos de 4 caracteres";
            $errores=true;
        }
    
        if (isset($_POST['numero'])) {
            $numero=securizar($_POST["numero"]);
            if (empty($numero)) {
                $numeroErr="tienes que introducir el numero";
                $errores=true;
            }elseif (strlen($numero)<4) {
                $numeroErr="el numero no puede tener menos de 4 caracteres";
                $errores=true;
            }
        }
        if (isset($_POST["tipo"])){
            $tipo = securizar($_POST["tipo"]); //NO hace falta securizarlo
        }
    }




}


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
        <label for="nombre">Nombre: *</label>
        <input type="text" name="nombre">

        <label for="numero">Numero: *</label>
        <input type="number" name="numero">

        <label for="personal">Personal:</label>
        <input type="button" value="personal"><br>

        <label for="trabajo">Trabajo</label>
        <input type="button" value="trabajo"><br>

        <label for="otro">Otro</label>
        <input type="button" value="otro">
    </form>
    
</body>
</html>