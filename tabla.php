<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>

<body>
    <center>
        <table bgcolor="lightblue" border="3">
            <thead>
                <tr>
                    <th colspan="1">
                        <a href="formulario.php">Nuevo Usuario</a>
                    </th>
                    <th colspan="5">Lista de Usuarios</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Correo</td>
                    <td colspan="2">Operaciones</td>
                </tr>
                <?php
                include('conexion.php');

                $query = "SELECT * FROM usuarios";
                $resultado = $conexion->query($query);
                while ($row = $resultado->fetch_assoc()) {
                ?>

                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["apellido"]; ?></td>
                        <td><?php echo $row["correo"]; ?></td>
                        <td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>

                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
    </center>
</body>

</html>