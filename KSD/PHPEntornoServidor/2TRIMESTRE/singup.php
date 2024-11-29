<?php
session_start();
$email = $pass1 = $pass2 = "";
$emailErr = $pass1Err = $pass2Err = $passErr = "";
$errores = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    if (empty($email)) {
        $emailErr = "Campo obligatorio";
        $errores = true;
    }
    if (empty($pass1)) {
        $pass1Err = "Campo obligatorio";
        $errores = true;
    }
    if (empty($pass2)) {
        $pass2Err = "Campo obligatorio";
        $errores = true;
    }
    if ($pass1 != $pass2) {
        $passErr = "Tienen que ser iguales";
        $errores = true;
    }
    include './funcionesBD.php';
    if (!$errores) {
        //Guardo el mail en la sesión
        $_SESSION["email"] = $email;

        //Guardo en la BD:
        insertarUsuario($email, $pass1);


    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <form action="" method="POST">
        Email: <input type="email" name="email" 
            class="<?php if (!empty($emailErr)) echo "error"; ?>" value="<?php if($email){echo $email;}?>"><?php if($emailErr){echo"Tienes que introducir un correo";}?><br>
        Contraseña: <input type="password" name="pass1" 
            class="<?php if (!empty($emailErr)) echo "error"; ?>" value=""><?php if($pass1Err){echo"Tienes que introducir una contraseña";}?><br>
        Repite contraseña: <input type="password" name="pass2" class="" value=""><?php if($pass2Err){echo"Tienes que repetir la misma contraseña";}?><?php if($passErr){echo "Tienes que introducir la contraseña igual que la anterior";}?><br>
        <input type="Submit" value="Enviar">
    </form>
    <p>Haced dos funciones en el fichero funcionesBD.php:<br>
        1. conectar():mysqli (devuelve la conexión a la BD)  <br>
        2. crearTabla()  <br>
        3. insertarUsuario($email, $pass)  (¡¡La tiene que hashear!!) </p>
</body>

</html>
