<?php
$conexion = mysqli_connect("localhost", "root", "", "bd_proyecto");
//if (!$conexion) {
// echo 'Error al conectar a la base de datos';
//}
//else {
//   echo 'conectado a la base datos';
//}


//recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$categoria = $_POST["categoria"];
$categorias = $_POST["categorias"];
$precio = $_POST["precio"];


    
//consulta para insertar
$insertar = "INSERT INTO usuario(nombre, apellido, cedula, telefono, email, categoria, categorias, precio) VALUES ('$nombre', '$apellido', '$cedula', '$telefono', '$email', '$categoria', '$categorias', '$precio')";

if ($conexion->query($insertar) === TRUE) {
  echo "informacion insertada";
} else {
 echo "Error inserccion: " . $conexion->error;
}

mysqli_close($conexion);    

