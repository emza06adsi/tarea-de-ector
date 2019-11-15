<?php

include "coneccion.php";
$id=$_GET["id"];
$sql="SELECT * FROM persons WHERE id=".$id."";
$resultado=$conn->query($sql);
?>
<form action="modificar.php" method="get">
<table>
<tr>
    <th>id</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>modificar</th>
</tr>
<?php 
if ($resultado->num_rows > 0) {
while($row = $resultado->fetch_assoc()) {
?>
    <tr>
    <td><input type="text" name="txtid" value="<?php echo $row['id'] ?>"></td>
    <th><input type="text" name="txtnombre" value="<?php echo $row['apellido'] ?>"></th>
    <th><input type="text" name="txtapellido" value="<?php echo $row['nombre'] ?>"></th>
    <th><input type="submit" value="enviar"></th>
</tr>
</form>
<?php            
}
} else {
echo "0 results";
}mysqli_close($conn);
?>
</table>
