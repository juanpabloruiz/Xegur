<?php
session_start();
if(!isset($_SESSION['usuario'])) {
	echo '<script>window.location="./"</script>';
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
	<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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

	

<div class="container-fluid">



<style>


.affix {
  right: 0;
}




</style>





		<?php




date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date('Y-m-d');
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE fecha = '$fecha'");
if ($resultado->num_rows === 0) {
    
	
    date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha = date('Y-m-d');
    mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'CANTEROS', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'ALTERATS', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'BOFFIL', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'BREARD', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'COLOMBI', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'DOS SANTOS', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'SUAREZ', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'FLINTA', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'GIRAUD', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'INSAURRALDE', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'NAZAR', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'MARTINEZ LLANO', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'MIÑO', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'RODRIGUEZ', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'SAND GIORASI', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'SEWARD', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'ACEVEDO', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'AGUIRRE', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'BESTARD', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'CASSANI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'BAEZ', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'CHAIN', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'BARRIONUEVO', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'FERNANDEZ AFFUR', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'GAYA', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'GARCIA', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'GIRAUD CABRAL', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'LOCATELLI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'LOPEZ', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'MEIXNER', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'MANCINI FRATTI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'BASSI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'MOLINA', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'CENTURION', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'MORTOLA', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'GODOY', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'CALVI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'PACAYUT', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'PELLEGRINI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'SAEZ', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'PEREYRA CEBREIRO', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'YARDIN', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'POZO', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'RAMIREZ', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'ROTELA CAÑETE', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, vehiculo, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NO', 'VISCHI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	
}

$fecha = date('Y-m-d');
$observaciones = mysqli_query($conexion, "SELECT * FROM observaciones WHERE fecha = '$fecha'");
if ($observaciones->num_rows === 0) {
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha = date('Y-m-d');
	mysqli_query($conexion, "INSERT INTO observaciones (detalles, fecha) VALUES ('', '$fecha')");
	echo '<script>window.location="./control"</script>';
}

	

// Oficina
if(isset($_GET['oficina'])) {
	$oficina = $_GET['oficina'];
	$usuarios = mysqli_query($conexion, "SELECT * FROM usuarios WHERE legislador = '$oficina' AND  fecha = '$fecha'");
	while($campo = mysqli_fetch_array($usuarios)) {
		$fecha = date('Y-m-d');
		if($campo['oficina'] == 'NO') {
			mysqli_query($conexion, "UPDATE usuarios SET oficina = 'SI', fecha = '$fecha' WHERE legislador = '$oficina' AND  fecha = '$fecha'");
			echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
		} elseif($campo['oficina'] == 'SI') {
			mysqli_query($conexion, "UPDATE usuarios SET oficina = 'NO', fecha = '$fecha' WHERE legislador = '$oficina' AND  fecha = '$fecha'");
			echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
		}
	}
}

// Vehículo
if(isset($_GET['vehiculo'])) {
	$vehiculo = $_GET['vehiculo'];
	$usuarios = mysqli_query($conexion, "SELECT * FROM usuarios WHERE legislador = '$vehiculo' AND  fecha = '$fecha'");
	while($campo = mysqli_fetch_array($usuarios)) {
		$fecha = date('Y-m-d');
		if($campo['vehiculo'] == 'NO') {
			mysqli_query($conexion, "UPDATE usuarios SET vehiculo = 'SI', fecha = '$fecha' WHERE legislador = '$vehiculo' AND  fecha = '$fecha'");
			echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
		} elseif($campo['oficina'] == 'SI') {
			mysqli_query($conexion, "UPDATE usuarios SET vehiculo = 'NO', fecha = '$fecha' WHERE legislador = '$vehiculo' AND  fecha = '$fecha'");
			echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
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
				echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
			} elseif($campo['estado'] == 'AUSENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'PRESENTE', manana = CONCAT(manana,' E') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
			}
		}

		// Turno intermedio
		if($hora > '13:00' && $hora < '16:00') {
			if($campo['estado'] == 'PRESENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'AUSENTE', intermedio = CONCAT(intermedio,' S') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
			} elseif($campo['estado'] == 'AUSENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'PRESENTE', intermedio = CONCAT(intermedio,' E') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
			}
		}

		// Turno tarde
		if($hora > '16:00' & $hora < '21:00') {
			if($campo['estado'] == 'PRESENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'AUSENTE', tarde = CONCAT(tarde,' S') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
			} elseif($campo['estado'] == 'AUSENTE') {
				mysqli_query($conexion, "UPDATE usuarios SET estado = 'PRESENTE', tarde = CONCAT(tarde,' E') WHERE legislador = '$legislador' AND fecha = '$fecha'");
				echo '<script>window.location="./control#'.$campo['legislador'].'"</script>';
			}
		}

	}
}
?>



<div class="row">

<div class="tall-div col-lg-6">

	<table class="table table-bordered table-sm">


		<tr>
			<th class="text-center">Oficina</th>
			<th class="text-center">Vehículo</th>
			<th class="text-center">Senador/a</th>
			<th class="text-center">Mañana</th>
			<th class="text-center">Intermedio</th>
			<th class="text-center">Tarde</th>
		</tr>
		

		<?php $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE fecha = '$fecha' AND categoria = 'senador' order by legislador ASC");
		while($campo = mysqli_fetch_array($consulta)) { ?>
		

		<tr>
			<td id="<?php echo $campo['legislador']; ?>">
				<?php if($campo['oficina'] == 'SI') { ?>
				<a href="?oficina=<?php echo $campo['legislador']; ?>" class="btn btn-success btn-block"><?php echo $campo['oficina']; ?></a>
				<?php } elseif($campo['oficina'] == 'NO') { ?>
				<a href="?oficina=<?php echo $campo['legislador']; ?>" class="btn btn-danger btn-block"><?php echo $campo['oficina']; ?></a>
				<?php } ?>
			</td>
			<td id="<?php echo $campo['legislador']; ?>">
				<?php if($campo['vehiculo'] == 'SI') { ?>
				<a href="?vehiculo=<?php echo $campo['legislador']; ?>" class="btn btn-success btn-block"><?php echo $campo['vehiculo']; ?></a>
				<?php } elseif($campo['vehiculo'] == 'NO') { ?>
				<a href="?vehiculo=<?php echo $campo['legislador']; ?>" class="btn btn-danger btn-block"><?php echo $campo['vehiculo']; ?></a>
				<?php } ?>
			</td>
			<td>
				<?php if($campo['estado'] == 'PRESENTE') { ?>
				<a href="?legislador=<?php echo $campo['legislador']; ?>" class="btn btn-success btn-block"><?php echo $campo['legislador']; ?></a>
				<?php } elseif($campo['estado'] == 'AUSENTE') { ?>
				<a href="?legislador=<?php echo $campo['legislador']; ?>" class="btn btn-danger btn-block"><?php echo $campo['legislador']; ?></a>
				<?php } ?>
			</td>
			<td><?php echo $campo['manana']; ?></td>
			<td><?php echo $campo['intermedio']; ?></td>
			<td><?php echo $campo['tarde']; ?></td>
		</tr>
		

		


<?php 	} ?>

	</table>

	<!-- Diputados -->

	<table class="table table-bordered table-sm">


		<tr>
			<th class="text-center">Oficina</th>
			<th class="text-center">Vehículo</th>
			<th class="text-center">Diputado/a</th>
			<th class="text-center">Mañana</th>
			<th class="text-center">Intermedio</th>
			<th class="text-center">Tarde</th>
		</tr>
		

		<?php $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE fecha = '$fecha' AND categoria = 'diputado' order by legislador ASC");
		while($campo = mysqli_fetch_array($consulta)) { ?>
		

		<tr>
			<td id="<?php echo $campo['legislador']; ?>">
				<?php if($campo['oficina'] == 'SI') { ?>
				<a href="?oficina=<?php echo $campo['legislador']; ?>" class="btn btn-success btn-block"><?php echo $campo['oficina']; ?></a>
				<?php } elseif($campo['oficina'] == 'NO') { ?>
				<a href="?oficina=<?php echo $campo['legislador']; ?>" class="btn btn-danger btn-block"><?php echo $campo['oficina']; ?></a>
				<?php } ?>
			</td>
			<td id="<?php echo $campo['legislador']; ?>">
				<?php if($campo['vehiculo'] == 'SI') { ?>
				<a href="?vehiculo=<?php echo $campo['legislador']; ?>" class="btn btn-success btn-block"><?php echo $campo['vehiculo']; ?></a>
				<?php } elseif($campo['vehiculo'] == 'NO') { ?>
				<a href="?vehiculo=<?php echo $campo['legislador']; ?>" class="btn btn-danger btn-block"><?php echo $campo['vehiculo']; ?></a>
				<?php } ?>
			</td>			
			<td>
				<?php if($campo['estado'] == 'PRESENTE') { ?>
				<a href="?legislador=<?php echo $campo['legislador']; ?>" class="btn btn-success btn-block"><?php echo $campo['legislador']; ?></a>
				<?php } elseif($campo['estado'] == 'AUSENTE') { ?>
				<a href="?legislador=<?php echo $campo['legislador']; ?>" class="btn btn-danger btn-block"><?php echo $campo['legislador']; ?></a>
				<?php } ?>
			</td>
			<td><?php echo $campo['manana']; ?></td>
			<td><?php echo $campo['intermedio']; ?></td>
			<td><?php echo $campo['tarde']; ?></td>
		</tr>
		

		


<?php 	} ?>

	</table>


	</div>

	
	<div class="col-lg-6 col-sm-6 col-md-6"  data-spy="affix">
	

	<?php
	$fecha = date('Y-m-d');
	$observaciones = mysqli_query($conexion, "SELECT * FROM observaciones WHERE fecha = '$fecha'");
	while($campo = mysqli_fetch_array($observaciones)) {
		?>
	
	<a href="salir" class="btn btn-danger pull-right">Cerrar sesión</a>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
	<h4>Observaciones</h4>
	<div class="form-group"><input type="submit" name="submit" id="submit" value="Guardar" class="btn btn-primary"></div>
		<div class="form-group"><textarea rows="10" cols="50%" class="form-control" name="detalles" placeholder="Observaciones..."><?php echo $campo['detalles']; ?></textarea></div>
		
	</form>

		<?php } 
		
		// Actualizar observaciones
if(isset($_POST['submit'])) {
	$fecha = date('Y-m-d');
$detalles = $_POST['detalles'];
mysqli_query($conexion, "UPDATE observaciones SET detalles = '$detalles' WHERE fecha = '$fecha'");
echo '<script>window.location="./control"</script>';
} 
		
		?>

		</div>

		</div>

		</div>

</body>
</html>



