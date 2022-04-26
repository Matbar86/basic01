<?php 

$nombre      = $_POST ['nombre'];
$apellido    = $_POST ['apellido'];
$telefono    = $_POST ['telefono'];
$correo      = $_POST ['correo'];
$consulta    = $_POST ['consulta'];
$reqlend     = strlen ($nombre) * strlen ($apellido) * strlen ($telefono) * strlen ($correo) * strlen ($consulta) ;

$base_datos = mysqli_connect ("localhost","root","","consulta_bd") or exit ("No se puedo conectar con la base de datos");

mysqli_query ($base_datos,"INSERT INTO usuarios VALUES (DEFAULT, '$nombre','$apellido','$telefono','$correo','$consulta') ");

header ("Location: barnichea.formu.php?ok#formu");


?>