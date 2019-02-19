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

	

	<<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">Xegur</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="../">Inicio <span class="sr-only">(current)</span></a></li>
                      <li><a href="post.php?id=145">Acerca de</a></li>
                      <li><a href="salir">Salir</a></li>
                      
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        
                      <li><a href="/admin">Panel de control</a></li>
                      
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>







<div class="container-fluid top">



		<?php




date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date('Y-m-d');
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE fecha = '$fecha'");
if ($resultado->num_rows === 0) {
    
	
    date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha = date('Y-m-d');
    mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'CANTEROS', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'ALTERATS', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'BOFFIL', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'BREARD', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'COLOMBI', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'DOS SANTOS', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'SUAREZ', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'FLINTA', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'GIRAUD', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'INSAURRALDE', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'NAZAR', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'MARTINEZ LLANO', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'MIÑO', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'RODRIGUEZ', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'SAND GIORASI', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'SEWARD', 'senador', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'ACEVEDO', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'AGUIRRE', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'BESTARD', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'CASSANI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'BAEZ', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'CHAIN', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'BARRIONUEVO', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'FERNANDEZ AFFUR', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'GAYA', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'GARCIA', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'GIRAUD CABRAL', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'LOCATELLI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'LOPEZ', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'MEIXNER', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'MANCINI FRATTI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'BASSI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'MOLINA', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'CENTURION', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'MORTOLA', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'GODOY', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'CALVI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'PACAYUT', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'PELLEGRINI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'SAEZ', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'PEREYRA CEBREIRO', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'YARDIN', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'POZO', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'RAMIREZ', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'ROTELA CAÑETE', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	mysqli_query($conexion, "INSERT INTO usuarios (oficina, legislador, categoria, estado, manana, intermedio, tarde, fecha) VALUES ('NO', 'VISCHI', 'diputado', 'AUSENTE', '', '', '', '$fecha')");
	
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























<div class="row">

<div class="col-md-8">

	<table class="table table-bordered table-sm">


		<tr>
			<th class="text-center">Oficina</th>
			<th class="text-center">Senador/a</th>
			<th class="text-center">Mañana</th>
			<th class="text-center">Intermedio</th>
			<th class="text-center">Tarde</th>
		</tr>
		

		<?php $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE fecha = '$fecha' AND categoria = 'senador' order by legislador ASC");
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
			<th class="text-center">Diputado/a</th>
			<th class="text-center">Mañana</th>
			<th class="text-center">Intermedio</th>
			<th class="text-center">Tarde</th>
		</tr>
		

		<?php $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE fecha = '$fecha' AND categoria = 'diputado' order by legislador ASC");
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

	<div class="col-md-4">

	<?php
	$fecha = date('Y-m-d');
	$observaciones = mysqli_query($conexion, "SELECT * FROM observaciones WHERE fecha = '$fecha'");
	while($campo = mysqli_fetch_array($observaciones)) {
		?>
	

	<h4>Observaciones</h4>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="form-group"><textarea rows="10" class="form-control" name="detalles" placeholder="Observaciones..."><?php echo $campo['detalles']; ?></textarea></div>
		<div class="form-group"><input type="submit" name="submit" id="submit" value="Guardar" class="btn btn-primary"></div>
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



