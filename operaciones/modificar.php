<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guardar</title>
</head>

<body>
  <center>
    <?php
    $id = $_REQUEST['id'];
    include('conexion.php');
    $query = "SELECT * FROM usuarios WHERE id='$id'";
    $resultado = $conexion->query($query);
    $row = $resultado->fetch_assoc();
    ?>
    <form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">
      <br><br><br>
      <input type="text" required name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre'] ?>" /><br><br>
      <input type="text" required name="apellido" placeholder="Apellido..." value="<?php echo $row['apellido'] ?>" /><br><br>
      <input type="text" required name="correo" placeholder="Correo..." value="<?php echo $row['correo'] ?>" /><br><br>
      <input type="submit" value='Modificar' />
    </form>
  </center>
</body>

</html>