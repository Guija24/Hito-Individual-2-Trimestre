<?php
$conexion = new mysqli('localhost', 'root','','test' );
$Email = $_POST['Email'];
$Password = $_POST['Password'];


$stmt = $conexion->query("SELECT * FROM `user`");
if($Email=="ivan@gmail.com" and $Password=='1234'){
    header('location:modificar.html');
    session_start();
}else{
    echo('No puedes acceder. Vuelve a intentarlo');
}
