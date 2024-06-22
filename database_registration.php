<?php
	//conectamos Con el servidor
	$conectar=mysqli_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysqli_select_db('inventario');
		if(!$base){
			echo"No Se Encontro La Base De Datos";
		}
	}
	//recuperar las variables
	$nombre=$_POST['tipo'];
	$correo=$_POST['fecha'];
	$mensaje=$_POST['hora'];
  $mensaje=$_POST['descripcion'];
  $mensaje=$_POST['cantidad'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$tipo':
								   '$hora';
								   '$fecha';
                                   '$descripcion';
                                   '$cantidad')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>
