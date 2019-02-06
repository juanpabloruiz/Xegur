<?php
session_start();
if(!isset($_SESSION['usuario'])) {
	echo '<script>window.location="../"</script>';
}
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Xegur</title>
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.1.1.min.js"></script>
	<style>
	@media print{
		a:after {
			
			display: none;
		}
		#submit {
			display: none;
		}
		h3 {
			display: none;
		}
	}
	</style>
</head>
<body>

	<div class="container">

		<header class="page-header">
			<a href="./"><img src="img/logo.png" class="img-responsive"></a>
		</header>

	<?php 
	if(isset($_GET['nuevo'])) {
		date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date('Y-m-d');
mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, estado, fecha) VALUES ('NO', 'CANTEROS', 'AUSENTE', '$fecha')");
mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, estado, fecha) VALUES ('NO', 'CASSANI', 'AUSENTE', '$fecha')");
mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, estado, fecha) VALUES ('NO', 'BAEZ', 'AUSENTE', '$fecha')");
mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, estado, fecha) VALUES ('NO', 'ROTELA', 'AUSENTE', '$fecha')");
	}

		date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date('Y-m-d');


	 ?>



	<table class="table table-bordered table-hover table-sm">


		<tr>
			<th class="text-center">Oficina</th>
			<th class="text-center">Legislador</th>
			<th class="text-center">Mañana</th>
			<th class="text-center">Intermedio</th>
			<th class="text-center">Tarde</th>
		</tr>
		

		<?php $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE fecha = '$fecha'");
		while($campo = mysqli_fetch_array($consulta)) { ?>
		

		<tr>
			<td>
				<?php if($campo['oficina'] == 'SI') { ?>
				<a href="?oficina=<?php echo $campo['legislador']; ?>" class="btn btn-success btn-block"><?php echo $campo['oficina']; ?></a>
				<?php } elseif($campo['oficina'] == 'NO') { ?>
				<a href="?oficina=<?php echo $campo['legislador']; ?>" class="btn btn-danger btn-block"><?php echo $campo['oficina']; ?></a>
				<?php } ?>
			</td>
			<td>
				<?php if($campo['estado'] == 'PRESENTE') { ?>
				<a href="?legislador=<?php echo $campo['legislador']; ?>" class="btn btn-success btn-block text-left"><?php echo $campo['legislador']; ?></a>
				<?php } elseif($campo['estado'] == 'AUSENTE') { ?>
				<a href="?legislador=<?php echo $campo['legislador']; ?>" class="btn btn-danger btn-block text-left"><?php echo $campo['legislador']; ?></a>
				<?php } ?>
			</td>
			<td style="font-size: 1.2em;"><?php echo $campo['manana']; ?></td>
			<td><?php echo $campo['intermedio']; ?></td>
			<td><?php echo $campo['tarde']; ?></td>
		</tr>
		

		


<?php 	} ?>

	</table>

	<?php
	$fecha = date('Y-m-d');
	$observaciones = mysqli_query($conexion, "SELECT * FROM observaciones WHERE fecha = '$fecha'");
	while($campo = mysqli_fetch_array($observaciones)) {
		?>
	
<hr>
	<h3>Observaciones</h3>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="form-group"><textarea rows="10" class="form-control" name="detalles" placeholder="Observaciones..."><?php echo $campo['detalles']; ?></textarea></div>
		<div class="form-group"><input type="submit" name="submit" id="submit" value="Guardar" class="btn btn-primary"></div>
	</form>

		<?php } ?>

		</div>

</body>
</html>



<?php

if(isset($_POST['submit'])) {
			$fecha = date('Y-m-d');
	$detalles = $_POST['detalles'];
	mysqli_query($conexion, "UPDATE observaciones SET detalles = '$detalles' WHERE fecha = '$fecha'");
	echo '<script>window.location="./control"</script>';
} 


date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date('Y-m-d');
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE fecha = '$fecha'");
if ($resultado->num_rows === 0) {
    
   echo '<script>window.location="./control"</script>';
    date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha = date('Y-m-d');
    	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'CANTEROS', 'AUSENTE', '', '', '', '$fecha')");
		mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'CASSANI', 'AUSENTE', '', '', '', '$fecha')");
	 	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'BAEZ', 'AUSENTE', '', '', '', '$fecha')");
	 	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'ROTELA', 'AUSENTE', '', '', '', '$fecha')");
	 	mysqli_query($conexion, "INSERT INTO observaciones (detalles, fecha) VALUES ('', '$fecha')");

}

	

// Oficina
if(isset($_GET['oficina'])) {
	$oficina = $_GET['oficina'];
	$usuarios = mysqli_query($conexion, "SELECT * FROM usuarios WHERE legislador = '$oficina' AND  fecha = '$fecha'");
	while($campo = mysqli_fetch_array($usuarios)) {
		$fecha = date('Y-m-d');
		if($campo['oficina'] == 'NO') {
			mysqli_query($conexion, "UPDATE usuarios SET oficina = 'SI', fecha = '$fecha' WHERE legislador = '$oficina' AND  fecha = '$fecha'");
			echo '<script>window.location="./control"</script>';
		} elseif($campo['oficina'] == 'SI') {
			mysqli_query($conexion, "UPDATE usuarios SET oficina = 'NO', fecha = '$fecha' WHERE legislador = '$oficina' AND  fecha = '$fecha'");
			echo '<script>window.location="./control"</script>';
		}
	}
}

// Legislador
if(isset($_GET['legislador'])) {
	$legislador = $_GET['legislador'];
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha = date('Y-m-d');
	$usuarios = mysqli_query($conexion, "SELECT * FROM usuarios WHERE legislador = '$legislador' AND fecha = '$fecha'");
	while($campo = mysqli_fetch_array($usuarios)) {
		$PRESENTE = $campo['estado'];
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$hora = date('H:i');






		// Turno mañana
		if($hora < '13:00') {
			if($campo['estado'] == 'PRESENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'AUSENTE', manana = CONCAT(manana,' S') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control"</script>';
			} elseif($campo['estado'] == 'AUSENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'PRESENTE', manana = CONCAT(manana,' E') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control"</script>';
			}
		}

		// Turno intermedio
		if($hora > '13:00' && $hora < '16:00') {
			if($campo['estado'] == 'PRESENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'AUSENTE', intermedio = CONCAT(intermedio,' S') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control"</script>';
			} elseif($campo['estado'] == 'AUSENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'PRESENTE', intermedio = CONCAT(intermedio,' E') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control"</script>';
			}
		}

		// Turno tarde
		if($hora > '16:00' & $hora < '21:00') {
			if($campo['estado'] == 'PRESENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'AUSENTE', tarde = CONCAT(tarde,' S') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control"</script>';
			} elseif($campo['estado'] == 'AUSENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'PRESENTE', tarde = CONCAT(tarde,' E') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control"</script>';
			}
		}

	}
}
?>