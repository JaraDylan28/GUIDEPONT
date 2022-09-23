<?php

$conexion = mysqli_connect("localhost", "root", "", "login");
  
if ($conexion) {
echo 'Conectado a la base de datos';
}else {
echo 'error';
}
?>

