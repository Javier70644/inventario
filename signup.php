<?php
   require 'database.php';

   $message = '';


if (!empty($_POST['email']) && !empty($_POST['password'])) {
 $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
 $stmt = $conn->prepare($sql);
 $stmt->bindParam(':email', $_POST['email']);
 $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
 $stmt->bindParam(':password', $password);

 if ($stmt->execute()) {
   $message = 'Se creó el usuario satifactoriamente';
 } else {
   $message = 'lo siento ha ocurrido un error al crear su contraseña';
 }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ingresar</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <?php require 'partials/header.php'?>

  <?php if(!empty($message)): ?>
   <p> <?= $message ?></p>
 <?php endif; ?>


   <h1>Registrarse</h1>
   <span> <a href="login.php">Ingresar</a></span>

  <form action="signup.php" method="POST">
   <input name="email" type="text" placeholder="Ingresa tu email">
   <input name="password" type="password" placeholder="Ingresa tu contraseña">
   <input name="confirm_password" type="password" placeholder="Confirmar tu contraseña">
   <input type="submit" value="Guardar">
 </form>

</body>
</html>
