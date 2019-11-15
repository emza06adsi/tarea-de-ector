<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include 'coneccion.php';
    $sql="SELECT * FROM persons";
    $resultado=$conn->query($sql);
   ?>
    <table>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>modificar</th>
            <th>eliminar</th>
            
        </tr>
        <?php if ($resultado->num_rows > 0) {
    
    while($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
            <td><?php echo $row["id"] ?></td>
            <th><?php echo $row["apellido"] ?></th>
            <th><?php echo $row["nombre"] ?></th>
            <th><a href="editar.php?id=<?php echo $row['id'] ?>">modificar</a></th>
            <th><a href="eliminar.php?id=<?php echo $row['id'] ?>">eliminar</a></th>
        </tr>
    <?php            
        }
    } else {
        echo "0 results";
    }mysqli_close($conn);?>
    </table>
</body>
</html>