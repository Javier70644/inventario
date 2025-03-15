
<?php
include("conexion.php");
$conn=conectar();
$id= 'id';
$tipo= 'tipo';
$fecha= 'fecha';
$hora= 'hora';
$descripcion= 'descripcion';
$cantidad= 'cantidad';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM elementos_donación WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $tipo = $row['tipo'];
    $fecha = $row['fecha'];
    $hora = $row['hora'];
    $descripcion = $row['descripcion'];
    $cantidad = $row['cantidad'];
  }
}

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $tipo= $_POST['tipo'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $descripcion = $_POST['descripcion'];
  $cantidad = $_POST['cantidad'];

$sql= "UPDATE elementos_donación set tipo = '$tipo',fecha = '$fecha',hora = '$hora',descripcion = '$descripcion',cantidad = '$cantidad' WHERE id=$id";
  $query = mysqli_query($conn, $sql);

if($query)
  header('Location: elementos_donación.php');
}else{
  header('Location: elementos_donación.php');
}
?>
