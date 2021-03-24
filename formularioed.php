<?php

$nombre = $_POST["nombre"];
$categoria = $_POST["categoria"];
$descripcion = $_POST["descripcion"];
$detalles =$_POST["detalles"];
$precio = $_POST["precio"];




//crear conexion 

$connect = mysqli_connect("localhost", "root", "", "top_animals") or die ("error en la conexion");
 
//crear una consulta

$sql = "INSERT INTO productos (id, nombre, categoria, descripcion, precio, imagen, detalles) VALUES (NULL, '$nombre','$categoria', '$descripcion', '$precio',' ','$detalles')";

//ejecutar la consulta

$result = mysqli_query($connect, $sql);

echo "Datos ingresados";

?>