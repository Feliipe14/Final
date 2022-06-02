<?php

include 'cita.php';

$conexion=mysqli_connect('localhost','root','','final');


if (isset($_POST['ingresar'])) {
   $fecha=$_POST['fecha'];
   $comentarios=$_POST['comentarios'];
   $consulta = "SELECT * FROM fecha WHERE fecha_actual='$fecha'";
   $ejecutar = mysqli_query($conexion,$consulta);

if (!$ejecutar->num_rows > 0) {
    $consulta = "INSERT INTO fecha (fecha_actual, comentarios)
    VALUES('$fecha', '$comentarios')";
    $ejecutar = mysqli_query($conexion,$consulta);
} else {
    echo '<script> alert("Error ya hay cita")</script>';
}
if ($ejecutar) {
    echo '<script> alert("Cita agendada")</script>';
} 
}








?>