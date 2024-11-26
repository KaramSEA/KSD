<?php
$server="127.0.0.1";
$user="root";
$pass="Sandia4you";
$dbname="daw";

$c=new mysqli($server,$user,$pass,$dbname);

$sql="create table if not exists alumnos (
    id varchar(8) primary key,
    nombre varchar(50) not null,
    pass varchar(50) not null,
    edad int)";
    //query es un metodo de laclase mysql que lanza una consulta SQL a la BD
if ($c->query($sql)) {
    echo "la tabla se ha creado correctamente";
}else {
    echo "no ha funcionado";
}
//insertar
//$sql="INSERT INTO alumnos VALUES ('897','moha','moha2002','25')";

$c->query($sql);
echo $c->affected_rows;

$sql="UPDATE alumnos SET nombre = 'Juan' WHERE id ='897'";
$c->query($sql);

$sql="DELETE FROM alumnos WHERE id = 235";
$c->query($sql);

//select
$sql="SELECT * FROM alumnos";
$resultado=$c->query($sql);

while (($fila = $resultado->fetch_assoc()) != null) {
    echo  "<br><br><br>" .$fila['id'] . "<br>";
    echo $fila['nombre'] . "<br>";
    echo $fila['pass'] . "<br>";
    echo $fila['edad'] . "<br><br><br><br>";
    

}
$sql="INSERT INTO alumnos VALUES (?,?,?,?)";
$prepared=$c->prepare($sql);
$prepared->bind_param("sssi", $id, $nombre, $pass, $edad);


$id="44";
$pass="karamlolo";
$edad=86;
$nombre="pollo";

//$prepared->execute();

$id="9";
$pass="rlo";
$edad=89;
$nombre="lez";

//$prepared->execute();

function buscarMayores($conexion){
    //$sql="SELECT * FROM alumnos where edad >= 18";

    $r=$conexion->query("SELECT * from alumnos where edad >= 18");
    while ($f = $r->fetch_assoc()) {
        var_dump($f);
    }

};
buscarMayores($c);
