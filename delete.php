<?php

include("conexion.php");
$conn=conectar();

$id=$_GET['id'];

$sql="DELETE FROM elementos_donación  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: elementos_donación.php");
    }
?>
