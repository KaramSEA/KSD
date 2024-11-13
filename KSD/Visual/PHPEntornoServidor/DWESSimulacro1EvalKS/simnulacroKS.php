<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio1</h1>
    <h4>1.1</h4>
    <?php

use function PHPSTORM_META\type;

        include "./funciones/funcKS.php";
        $numeros=[
            2=>"dos",
            4=>"cuatro",
            5=>"cinco",
            6=>"seis",
        ];
        foreach ($numeros as $key => $value) {
            if ($key%2==0) {
                echo " $key = $value ,";
            }
        }
        $division1=dividir(5,3);
        $division2=dividir(4);
        $division3=dividir(3,0);

        echo $division1." ".$division2." ".$division3;
        var_dump($division3);
        
        $hola=concatenar("a","b","c");
        echo $hola;
        echo "<br>";
        $profes = ["DAW" => [
            "Sete" => ["DWES"],
            "Manuel" => ["DWEC", "SSII"],
            "Santi" => ["FOL", "EIE"]]
        ];
        foreach ($profes as $curso => $profesAsignaturas) {
            
            foreach ($profesAsignaturas as $nombre => $asignaturas) {
                echo $nombre." imparte ";

               foreach ($asignaturas as $asignatura) {
                echo $asignatura. " " ;
               }
            }
        }
        include "./clases/Platos.php";
        include "./clases/Principal.php";
        include "./clases/Postre.php";
        $newPrincipal1=new Principal("macarrones",4.8,false);
        $newPrincipal2=new Principal("espaguetis",7.8,true);
        $newPostre1=new Postre("tarta",5,1);
        $newPostre2=new Postre("helado",7,89);
        
        echo"
        <table border=1>
            <tr>
                <th>Principal</th>
                <td>".$newPrincipal1->getNombre();echo"</td>
                <td>".$newPrincipal1->getPrecio();echo"</td>";
                if ($newPrincipal1->isConOsinGluten()==true) {
                    echo"<td>Con Gluten</td>";
                }else {
                    echo "<td>Sin gluten</td>";
                }
            echo"    
            </tr>
            
        </table>
        
        ";
    ?>
</body>
</html>