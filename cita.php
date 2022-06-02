<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
</head>
<body>
<header>
    <div class="logo">
      <img src="logo.png" alt="logo">
      
    </div>

<ul class="menu">
        <li><a href="welcome.php">Inicio</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="somos.php">Quienes somos</a></li>
        <li class="cerrar"><a href="logout.php">Cerrar sesion</a></li>
      </ul>
  </header>
      <br>


      <h1>ZOOLAND</h1>
    <!-- <div class="titulo"> -->

 <div class="cit">  
<h1 class="subtitulo">Agendar cita</h1>










<?php

date_default_timezone_set("America/Mexico_City");
$fecha_actual=date("Y-m-d H:i:s");




?>


    

<form action="ingresarFecha.php" method="post" accept-charset="utf-8">


<label>Fecha: <br><input type="datetime-local" name="fecha""></label><br>
<label>Comentarios: <br><input type="text" name="comentarios"></label><br>
<br>
<br>

<input type="submit" name="ingresar" value="Ingresar Fecha">

</form>
</div> 
</body>
</html>