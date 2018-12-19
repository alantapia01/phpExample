<?php
include 'conexion.php';

$id = $_REQUEST['id'];

$delete = $con -> query( "delete from alumnos where id='$id' ");

if($delete){
    echo "<script> location.href='index.php'</script>";
}else{

    echo "<script> 
    alert('Registro no pudo ser Eliminado');
    location.href='index.php'</script>";
};


?>