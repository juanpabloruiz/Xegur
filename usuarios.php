<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Xegur</title>
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>

	<h1>Xegur</h1>

	<section>

		<?php $usuarios = mysqli_query($conexion, "SELECT * FROM usuarios");
		while($campo = mysqli_fetch_array($usuarios)) { ?>

		<ul>
			<li><?php echo $campo['legislador'];  ?></li>
		</ul>

		<?php }	?>

	</section>

	<aside>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="legislador" placeholder="Legislador">
			<input type="submit" name="agregar" value="Agregar">
		</form>

	</aside>

</body>
</html>

<?php
if(isset($_POST['agregar'])) {
	$legislador = $_POST['legislador'];
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha = date('Y-m-d');
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, estado, manana, intermedio, tarde, fecha) VALUES ('NO', '$legislador', 'AUSENTE', '', '', '', '$fecha')");
	echo '<script>window.location="usuarios"</script>';
}
?>