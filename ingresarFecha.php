<?php

include 'cita.php';

$conexion=mysqli_connect('localhost','root','','prueba');


if (isset($_REQUEST['ingresar'])) {
   $fecha=$_POST['fecha'];

$consulta="INSERT INTO fecha (fecha_actual) VALUES('$fecha')";
$ejecutar=mysqli_query($conexion,$consulta);

if ($ejecutar) {
    echo '<script> alert("Cita agendada")</script>';
} else {
    echo '<script> alert("Error")</script>';
}
}













?>