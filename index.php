<?php

	session_start();
	if(isset($_SESSION['usuario']) && $_SESSION['cargo'] == 'revisor') {
		echo '<script>window.location="datos"</script>';
	} elseif(isset($_SESSION['usuario']) && $_SESSION['cargo'] == 'admin') {
		echo '<script>window.location="control"</script>';
	}

	include('conexion.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Xegur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="col-md-4 col-md-offset-4">

			<div class="page-header">
				<h1>Xegur</h1>
			</div>

			<?php
			if(isset($_POST['submit'])) {
				$usuario_formulario = $_POST['usuario'];
				$clave_formulario = $_POST['clave'];
				$registros = mysqli_query($conexion, "SELECT * FROM administradores WHERE usuario = '$usuario_formulario'");
				while ($campo = mysqli_fetch_array($registros)) {
					$usuario = $campo['usuario'];
					$clave = $campo['clave'];
					$cargo = $campo['cargo'];
				}
				if($usuario_formulario !== $usuario) {
					echo 'Usuario equivocado';
				} elseif($clave_formulario !== $clave) {
					echo 'Contraseña incorrecta';
				} elseif($usuario_formulario == $usuario && $clave_formulario == $clave && $cargo == 'admin') {
					$_SESSION['usuario'] = $usuario;
					$_SESSION['cargo'] = $cargo;
					echo '<script>window.location="control"</script>';
				} elseif($usuario_formulario == $usuario && $clave_formulario == $clave && $cargo == 'revisor') {
					$_SESSION['usuario'] = $usuario;
					$_SESSION['cargo'] = $cargo;
					echo '<script>window.location="datos"</script>';
				}
			}
			?>

			<div class="form-group"><input type="text" name="usuario" placeholder="Usuario" class="form-control"></div>
			<div class="form-group"><input type="password" name="clave" placeholder="Contraseña" class="form-control"></div>
			<div class="form-group"><input type="submit" name="submit" value="Ingresar" class="btn btn-info btn-lg btn-block"></div>

		</form>

	</div>

</body>
</html>