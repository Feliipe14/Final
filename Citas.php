<html>

<head>
  <title>Citas</title>
</head>

<body>
<h1>CITAS AGENDADAS</h1>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "final") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select fecha_actual, comentarios
                        from fecha") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Fecha:" . $reg['fecha_actual'] . "<br>";
    echo "Comentarios:" . $reg['comentarios'] . "<br>";
  
    
    
    echo "<br>";
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>

</body>

</html>