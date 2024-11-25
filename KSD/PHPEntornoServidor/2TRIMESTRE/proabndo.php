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

$sql="INSERT INTO alumnos VALUES (123,'sete', 'sete@gmail.com',
 'sete2002',35);";