<?php
include("conexion.php");
$conn=conectar();

$cod_elemento=$_POST['cod_elemento'];
$tipo=$_POST['tipo'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];


$sql="INSERT INTO elementos_donación VALUES('$cod_elemento','$tipo','$fecha','$hora', '$descripcion', '$cantidad')";
$query= mysqli_query($conn,$sql);

if($query){
    Header("Location: tabla.php");

}else {
}
?>
