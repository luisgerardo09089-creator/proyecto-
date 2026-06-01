<?php

$conexion = mysqli_connect(
"localhost",
"usuario",
"password",
"prestamos_proyectores"
);

if(!$conexion){
die("Error de conexión");
}

/* INSERTAR */

if(isset($_POST['guardar'])){

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$dato = $_POST['dato'];
$observaciones = $_POST['observaciones'];

$sql = "INSERT INTO prestamos_proyectores
(nombre,categoria,dato,observaciones)
VALUES
('$nombre','$categoria','$dato','$observaciones')";

mysqli_query($conexion,$sql);

echo "<h2>Registro Guardado Correctamente</h2>";
echo "<a href='index.html'>Volver</a><br><br>";
}

/* CONSULTAR */

$resultado = mysqli_query(
$conexion,
"SELECT * FROM prestamos_proyectores
ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Registros</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
}

h1{
text-align:center;
color:#0d47a1;
}

table{
width:95%;
margin:auto;
border-collapse:collapse;
background:white;
}

th{
background:#0d47a1;
color:white;
padding:10px;
}

td{
border:1px solid #ccc;
padding:10px;
text-align:center;
}

</style>

</head>
<body>

<h1>Préstamos Registrados</h1>

<table>

<tr>
<th>ID</th>
<th>Profesor</th>
<th>Grupo</th>
<th>Proyector</th>
<th>Observaciones</th>
<th>Fecha</th>
</tr>

<?php
while($fila=mysqli_fetch_assoc($resultado)){
?>

<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['categoria']; ?></td>
<td><?php echo $fila['dato']; ?></td>
<td><?php echo $fila['observaciones']; ?></td>
<td><?php echo $fila['fecha_registro']; ?></td>
</tr>

<?php } ?>

</table>

<br>

<center>
<a href="index.html">Volver al Formulario</a>
</center>

</body>
</html>
