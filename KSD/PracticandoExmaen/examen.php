
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "./clases/Plato.php";
        require "./clases/Principal.php";
        require "./clases/Postre.php";

        $platos[]=new Principal("macarrones", 1.5,true);
        $platos[]=new Principal("espageutis", 1.5,false);
        echo "
        <table border=1>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Con Gluten</th>
            </tr>";
            foreach ($platos as $plato) {
                echo"
                <tr>
                    <td>". $plato->getNombre() ."</td>
                    <td>". $plato->getPrecio() ."</td>

                
                </tr>
                ";
            }
            echo"
        </table>
        ";
    ?>
</body>
</html>