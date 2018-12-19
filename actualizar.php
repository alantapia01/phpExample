<?php
include 'conexion.php';
$id = $_REQUEST['id'];

$sel = $con -> query("select * from alumnos where id='$id' ");
if ($fila = $sel -> fetch_assoc()) {

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
<input type="hidden" name="id" value="<?php echo $fila['id'] ?>"><br>
Nombre <input type="text" name="nombre" value="<?php echo $fila['nombre'] ?>"><br>
Apellido Paterno <input type="text" name="apellido_pat" value="<?php echo $fila['apellido_pat'] ?>"><br>
Apellido Materno <input type="text" name="apellido_mat" value="<?php echo $fila['apellido_mat'] ?>"><br>
<input type="submit" value="Actualizar">
</form>
</body>
</html>

