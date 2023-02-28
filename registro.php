<?php
$Email = $_POST['Email'];
$Titulo = $_POST['Titulo'];
$Contenido = $_POST['Contenido'];
$Fecha = $_POST['Fecha'];


$conexion = new mysqli('localhost', 'root','','test' );
$consulta = "INSERT INTO `hito` (`Email`, `Titulo`, `Contenido`, `Fecha`) VALUES (?, ?, ?, ?);"; 
$insertar = $conexion->prepare($consulta);
$resultado = $insertar->execute([$Email, $Titulo, $Contenido, $Fecha]);