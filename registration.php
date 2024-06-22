<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inventerio Milagrinos</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="image/fondo.jpeg">
</head>


<body>

  <?php require 'partials/header.php'?>

  <h1>Registro de Elementos</h1>
  <h1>Donación</h1>

   <form action="database_registration.php" method="POST">
   <input name="tipo" type="text" placeholder="Nombre del Elemento">
   <input name="fecha" type="text" placeholder="Fecha de Ingreso">
   <input name="hora" type="text" placeholder="Hora de Ingreso">
   <input name="descripcion" type="text" placeholder="Descripcion del Elemento">
   <input name="cantidad" type="text" placeholder="Cantidad Ingresada">
   <input type="submit" value="Enviar">

   </form>

   <form action="index.php" method="POST">
       <a href="index.php">Atras </a>
</body>
</html>

<?php

include("conexion.php");
$conn=conectar();

$id=$_POST['cod_elemento'];
$tipo=$_POST['tipo'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

$sql="UPDATE elementos_donación SET tipo='$tipo',fecha='$fecha',hora='$hora',descripcion='$descripcion',cantidad'$cantidad' WHERE cod_elemento='$id'";
$query= mysqli_query($conn,$sql);

    if($query){
        Header("Location: elementos_donación.php");
    }
?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="update.php?id=<?php echo $_GET['cod_elemento']; ?>" method="POST">
        <div class="form-group">
          <input name="tipo" type="text" class="form-control" value="<?php echo $tipo; ?>" placeholder="tipo">
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
