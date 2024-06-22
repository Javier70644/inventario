<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Menu</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="image/fondo.jpg">
</head>
<body>

  <?php require 'partials/header.php'?>


  <form action="elementos_donación.php" method="POST">
   <input type="submit" value="Registro de elementos" href="elementos_donación.php">
 </form>

<!--<form action="registration.php" method="POST">
   <input type="submit" value="Inventario" href="index.php">
 </form>

  <form action="registration.php" method="POST">
   <input type="submit" value="Configuración" href="index.php">
 </form>

 <form action="registration.php" method="POST">
   <input type="submit" value="Ayuda" href="index.php">
 </form>-->

<form action="index.php" method="POST">
<input type="button" value="Atras" onclick="window.location.href='index.php';" class="boton">
    <!--<a href="index.php">Atras </a>-->

     </form>

     <img src="image/inventario.jpg" class="imagen" />

</body>
</html>
