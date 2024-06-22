<?php
    include("conexion.php");
    $conn=conectar();

    $sql="SELECT * FROM elementos_donación";
    $query=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Datos de elementos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="image/fondo.jpg">
    <link href="css/estilos.css" rel="stylesheet">

</head>
    <body>
        <?php require 'partials/header.php'?>

            <div class="container mt-5">
                    <div class="row">

                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="fecha">
                                    <input type="text" class="form-control mb-3" name="hora" placeholder="hora">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion">
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="cantidad">

                                    <input type="submit" class="btn btn-primary">
                                    <form action="tabla.php" method="POST">
                                      <br>
                                      <form action="index.php" method="POST">
                                          <a href="items.php">Atras </a>

                                </form>
                        </div>

                        <div class="col-md-9">
                            <h1>Stop</h1>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Tipo</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Descripcion</th>
                                        <th>Cantidad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['tipo']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['hora']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
            </div>
    </body>
</html>
