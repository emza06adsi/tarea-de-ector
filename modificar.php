<?php
$id=$_GET['txtid'];
$nom=$_GET['txtnombre'];
$ape=$_GET['txtapellido'];
echo $id.$nom.$ape; 
if($nom!=null|| $ape!=null)
{
     $sql2 ="UPDATE persons SET nombre='pedro', apellido='mario' WHERE id=1023955260";
    // $sql ='UPDATE  persons SET nombre="'.$nom.'", apellido= "'.$ape.'" WHERE id='.$id;
    // $sql2 ="UPDATE  persons SET  nombre='".$nom.";
mysqli_query($conn, $sql2);
if($nom=1)
 {
// header("location:index.php");
 }
}
?>