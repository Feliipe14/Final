<html>

<head>
  <title>Personas</title>
</head>

<body>
 <h1>Personas registradas</h1>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "final") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select username, email, password, mascota, peso
                        from users") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Cliente:" . $reg['username'] . "<br>";
    echo "Correo:" . $reg['email'] . "<br>";
    echo "Nombre de la mascota:" . $reg['mascota'] . "<br>";
    echo "Peso de la mascota: " . $reg['peso'] . " kg" . "<br>";
    
    
    echo "<br>";
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>

</body>

</html>