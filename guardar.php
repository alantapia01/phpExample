<?php
//mysql.exe –h localhost –u root -p

include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido_pat = $_POST['apellido_pat'];
$apellido_mat = $_POST['apellido_mat'];
$ins = $con -> query("insert into alumnos (id,nombre,apellido_pat, apellido_mat) values ('','$nombre','$apellido_pat','$apellido_mat')");
if($ins){
    echo "Registro Guardado";
    header('Refresh: 1; URL=http://localhost/udemy/php/index.php');
    
}else{
    echo "Registro No guardado";
}

?>