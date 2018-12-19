<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido_pat = $_POST['apellido_pat'];
$apellido_mat = $_POST['apellido_mat'];

$update = $con -> query( "update alumnos set nombre='$nombre', apellido_pat='$apellido_pat',apellido_mat='$apellido_mat' where id='$id' ");

if($update){
    echo "<script>
    location.href='index.php';
    </script>";
}else{
    echo "<script>
    location.href='actualizar.php?id=".id." ';
    </script>";
}
?>