<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mascota = $_POST['mascota'];
	$peso = $_POST['peso'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password, mascota, peso)
					VALUES ('$username', '$email', '$password', '$mascota' ,'$peso' )";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registro completo.')</script>";
				$username = "";
				$email = "";
				$mascota = "";
                $peso = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";

			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! El correo ya existe.')</script>";
		}
		
	} else {
		echo "<script>alert('Las contraseñas no coinciden.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Registro</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Registro</p>
			<div class="input-group">
				<input type="text" placeholder="Nombre de usuario" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Correo" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Contraseña" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirmar contraseña" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Nombre de la mascota" name="mascota" value="<?php echo $mascota; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Peso de la mascota" name="peso" value="<?php echo $peso; ?>" required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Registrar</button>
			</div>
			<p class="login-register-text">¿Ya tienes una cuenta? <a href="index.php">Ingresa aqui</a>.</p>
		</form>
	</div>
</body>
</html>