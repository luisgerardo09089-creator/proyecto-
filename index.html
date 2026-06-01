<?php
// 1. CONFIGURACIÓN DE LA CONEXIÓN (Ajusta estos datos a tu servidor)
$host = "localhost"; 
$user = "root";      // Usuario por defecto en XAMPP
$pass = "";          // Contraseña por defecto en XAMPP (vacía)
$db   = "practica_gerardo"; // CAMBIA ESTO AL NOMBRE DE TU BASE DE DATOS

$conexion = mysqli_connect($host, $user, $pass, $db);

// 2. LÓGICA PARA GUARDAR (INSERCIÓN)
$mensaje = "";
if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $dato = $_POST['dato'];
    $observaciones = $_POST['observaciones'];

    $sql_insert = "INSERT INTO prestamos_proyectores (nombre, categoria, dato, observaciones) 
                   VALUES ('$nombre', '$categoria', '$dato', '$observaciones')";
    
    if (mysqli_query($conexion, $sql_insert)) {
        $mensaje = "<div class='alert alert-success'>✅ Registro guardado con éxito</div>";
    } else {
        $mensaje = "<div class='alert alert-danger'>❌ Error: " . mysqli_error($conexion) . "</div>";
    }
}

// 3. LÓGICA PARA CONSULTAR (LECTURA)
$resultado_consulta = mysqli_query($conexion, "SELECT * FROM prestamos_proyectores ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Préstamos - Luis Gerardo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; font-family: 'Segoe UI', sans-serif; }
        .navbar { background-color: #1a3a5f; }
        .card { border-radius: 15px; border: none; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .header-table { background-color: #1a3a5f; color: white; }
    </style>
</head>
<body>

<nav class="navbar navbar-dark mb-4">
    <div class="container">
        <span class="navbar-brand">Sistema de Préstamos de Proyectores | Estudiante #25</span>
    </div>
</nav>

<div class="container">
    <?php echo $mensaje; ?>

    <div class="row">
        <div class="col-md-4">
            <div class="card p-4">
                <h5 class="mb-3">Registrar Nuevo Préstamo</h5>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Nombre del Solicitante</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoría (Aula/Área)</label>
                        <input type="text" name="categoria" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dato (Modelo/Serie)</label>
                        <input type="text" name="dato" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Observaciones</label>
                        <textarea name="observaciones" class="form-control" rows="2"></textarea>
                    </div>
                    <button type="submit" name="guardar" class="btn btn-primary w-100" style="background-color: #1a3a5f;">Guardar Registro</button>
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card p-4">
                <h5 class="mb-3">Consulta de Registros (Base de Datos en Línea)</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="header-table">
                            <tr>
                                <th>id</th>
                                <th>nombre</th>
                                <th>categoría</th>
                                <th>dato</th>
                                <th>observaciones</th>
                                <th>fecha_registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($resultado_consulta)): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['categoria']; ?></td>
                                <td><?php echo $row['dato']; ?></td>
                                <td><?php echo $row['observaciones']; ?></td>
                                <td><small><?php echo $row['fecha_registro']; ?></small></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
