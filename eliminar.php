<?php
include 'conexion.php';
$id=$_GET['id'];
$sql="DELETE FROM persons WHERE id=".$id;
mysqli_query($conn, $sql);
echo $id;
header("location:index.php");
?>