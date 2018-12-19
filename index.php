<?=include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1>
<?php echo "Hola Mundo"; ?>
</h1>
<br>
<?php
$uno="20";
echo $uno;
$dos="Hola2";
echo $dos;

echo "Hola ".$uno." Valor ".$dos;

?>
<br>
<?php
//los array comienzan en Cero
$array = array('Uno',"Dos","Tres","Cuatro");
echo $array[2];


$array2 = array("clave1"=>"Uno","clave2"=>"DOS");
echo $array2["clave1"];
echo $array2["clave2"];

define("constante",'Hola');
echo constante;

?>
<br>
<br>
<form action="guardar.php" method="post">
Nombre <input type="text" name="nombre"><br>
Apellido Paterno <input type="text" name="apellido_pat"><br>
Apellido Materno <input type="text" name="apellido_mat"><br>
<input type="submit" value="Guardar">
</form>

<table>
<th>Id</th>
<th>Nombre</th>
<th>Apellido_Pat</th>
<th>Apellido_Mat</th>
<th></th>
<th></th>
<?php 
$sel = $con -> query("select * from alumnos");
while($fila = $sel -> fetch_assoc()){
?>
<tr>
<td><?php echo $fila['id'] ?></td>
<td><?php echo $fila['nombre'] ?></td>
<td><?php echo $fila['apellido_pat'] ?></td>
<td><?php echo $fila['apellido_mat'] ?></td>
<td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
<td><a href="delete.php?id=<?php echo $fila['id'] ?>">Eliminar</a></td>
</tr>
<?php } ?>
</table>

</body>
</html>
