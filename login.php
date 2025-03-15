<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /inventario');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: /inventario');
    } else {
      $message = 'Lo siento estas credenciales no coinciden';
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

   <h1>Ingresar</h1>

   <span> <a href="signup.php">Registrarse</a></span>

  <form action="login.php" method="POST">
   <input name="email" type="text" placeholder="Ingresa tu email" required>
   <input name="password" type="password" placeholder="Ingresa tu contraseña" required>
   <input class="boton-login" type="submit" value="Enviar">
 </form>

</body>
</html>
