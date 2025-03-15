<?php
include("conexion.php");
$conn=conectar();

$id=$_POST['id'];
$tipo=$_POST['tipo'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];


$sql="INSERT INTO elementos_donación VALUES('$id','$tipo','$fecha','$hora', '$descripcion', '$cantidad')";
$query= mysqli_query($conn,$sql);

if($query){
    Header("Location: elementos_donación.php");

}else {
}
?>
