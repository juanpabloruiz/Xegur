<?php
session_start();
if(!isset($_SESSION['user'])) {
	echo '<script>window.location="./"</script>';
}
$conexion = new mysqli('localhost', 'root', '', 'seguridad');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Legislatura Corrientes - Seguridad</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  
  <style>
  .fixed {position: fixed;top: 20px;right: 0;}
  .row {margin-top: 20px;}
  .table-head {background: #111111;position: fixed;top: 20px;left: 20px;}
  @media only screen and (max-width: 600px) {
    .fixed {position: relative;}
  }
  </style>
</head>
<body class="bg-dark text-white">



    <div class="container-fluid">

    <div class="row">

    <div class="col-md-8">
    <div class="table-responsive">
    <table class="table table-dark table-hover table-sm">
    <thead>

      <tr>
        <th class="text-center">Oficina</th>
        <th class="text-center">Auto</th>
        <?php  ?>
        <th class="text-center" width="20%">
        Diputados 
        <?php $consulta = mysqli_query($conexion, "SELECT * FROM legisladores WHERE camara = 'diputados' AND estado = 'PRESENTE'");
         $row = mysqli_num_rows($consulta); echo ' | <span class="badge badge-light">'.$row.'</span>'; ?></th>
        <th class="text-center" width="60%">Registros</th>
      </tr>
      </thead>
      <tbody>

      
      <?php
      $consulta = mysqli_query($conexion, "SELECT * FROM legisladores WHERE camara = 'diputados' ORDER BY usuario ASC");
      while($campo = mysqli_fetch_array($consulta)) { ?>


      
      <tr class="bg-primary">

        <!-- Oficina -->
        <td id="<?php echo $campo['id_legislador']; ?>">
        <?php if($campo['oficina'] == 'SI') { ?>
          <a href="?oficina=<?php echo $campo['id_legislador']; ?>" class="btn btn-success btn-sm btn-block" role="button" style="width: 60px;"><i class="fas fa-lock-open fa-lg"></i></a>
        <?php } else { ?>
          <a href="?oficina=<?php echo $campo['id_legislador']; ?>" class="btn btn-danger btn-sm btn-block" role="button" style="width: 60px;"><i class="fas fa-lock fa-lg"></i></a>
        <?php } ?>  
        </td>
        <!-- /Oficina -->

        <!-- Vehiculos -->
        <td id="<?php echo $campo['id_legislador']; ?>">
        <?php if($campo['vehiculo'] == 'SI') { ?>
          <a href="?vehiculo=<?php echo $campo['id_legislador']; ?>" class="btn btn-success btn-sm btn-block" role="button" style="width: 60px;"><i class="fas fa-car fa-lg"></i></a>
        <?php } else { ?>
          <a href="?vehiculo=<?php echo $campo['id_legislador']; ?>" class="btn btn-danger btn-sm btn-block" role="button" style="width: 60px;"><i class="fas fa-car fa-lg"></i></a>
        <?php } ?>  
        </td>
        <!-- /Vehiculos -->

        <td id="<?php echo $campo['id_legislador']; ?>">
        <?php if($campo['estado'] == 'PRESENTE') { ?>
          <a href="?id=<?php echo $campo['id_legislador']; ?>" class="btn btn-success btn-sm btn-block" role="button" style="width: 150px;"><?php echo $campo['usuario']; ?></a>
        <?php } else { ?>
          <a href="?id=<?php echo $campo['id_legislador']; ?>" class="btn btn-danger btn-sm btn-block" role="button" style="width: 150px;"><?php echo $campo['usuario']; ?></a>
        <?php } ?>  
        </td>
        
        
        
        <td>
        
        <?php $id_legislador = $campo['id_legislador'];

        if(isset($_POST['fecha'])) {
$fecha = $_POST['dato'];
      $registros = mysqli_query($conexion, "SELECT * FROM registros WHERE legislador = '$id_legislador' AND fecha = '$fecha'");
      while($dato = mysqli_fetch_array($registros)) { echo $dato['registro']; } 

} else {

        $fecha = date('Y-m-d');
      $registros = mysqli_query($conexion, "SELECT * FROM registros WHERE legislador = '$id_legislador' AND fecha = '$fecha'");
      while($dato = mysqli_fetch_array($registros)) { echo $dato['registro']; }} ?>
      
      </td>

        
      </tr>
      <?php } ?>

      </tbody>
    </table>
    </div>

    <div class="table-responsive">
    <table class="table table-dark table-hover table-sm">
    <thead>

      <tr>
        <th class="text-center">Oficina</th>
        <th class="text-center">Auto</th>
        <th class="text-center" width="20%">Senadores
        <?php $consulta = mysqli_query($conexion, "SELECT * FROM legisladores WHERE camara = 'senadores' AND estado = 'PRESENTE'");
         $row = mysqli_num_rows($consulta); echo ' | <span class="badge badge-light">'.$row.'</span>'; ?></th>
        <th class="text-center" width="60%">Registros</th>
      </tr>
      </thead>
      <tbody>

      <?php
      $consulta = mysqli_query($conexion, "SELECT * FROM legisladores WHERE camara = 'senadores' ORDER BY usuario ASC");
      while($campo = mysqli_fetch_array($consulta)) {
        
        ?>


      
      <tr class="bg-warning">

        <!-- Oficina -->
        <td id="<?php echo $campo['id_legislador']; ?>">
        <?php if($campo['oficina'] == 'SI') { ?>
          <a href="?oficina=<?php echo $campo['id_legislador']; ?>" class="btn btn-success btn-sm btn-block" role="button" style="width: 60px;"><i class="fas fa-lock-open fa-lg"></i></a>
        <?php } else { ?>
          <a href="?oficina=<?php echo $campo['id_legislador']; ?>" class="btn btn-danger btn-sm btn-block" role="button" style="width: 60px;"><i class="fas fa-lock fa-lg"></i></a>
        <?php } ?>  
        </td>
        <!-- /Oficina -->


      <td id="<?php echo $campo['id_legislador']; ?>">
        <?php if($campo['vehiculo'] == 'SI') { ?>
          <a href="?vehiculo=<?php echo $campo['id_legislador']; ?>" class="btn btn-success btn-sm btn-block" role="button" style="width: 60px;"><i class="fas fa-car fa-lg"></i></a>
        <?php } else { ?>
          <a href="?vehiculo=<?php echo $campo['id_legislador']; ?>" class="btn btn-danger btn-sm btn-block" role="button" style="width: 60px;"><i class="fas fa-car fa-lg"></i></a>
        <?php } ?>  
        </td>

        <td id="<?php echo $campo['id_legislador']; ?>">
        <?php if($campo['estado'] == 'PRESENTE') { ?>
          <a href="?id=<?php echo $campo['id_legislador']; ?>" class="btn btn-success btn-sm btn-block" role="button" style="width: 150px;"><?php echo $campo['usuario']; ?></a>
        <?php } else { ?>
          <a href="?id=<?php echo $campo['id_legislador']; ?>" class="btn btn-danger btn-sm btn-block" role="button" style="width: 150px;"><?php echo $campo['usuario']; ?></a>
        <?php } ?>  
        </td>
        
        
        
        <td>
        
        <?php $id_legislador = $campo['id_legislador'];

if(isset($_POST['fecha'])) {
$fecha = $_POST['dato'];
      $registros = mysqli_query($conexion, "SELECT * FROM registros WHERE legislador = '$id_legislador' AND fecha = '$fecha'");
      while($dato = mysqli_fetch_array($registros)) { echo $dato['registro']; } 

} else {
        

        $fecha = date('Y-m-d');
      $registros = mysqli_query($conexion, "SELECT * FROM registros WHERE legislador = '$id_legislador' AND fecha = '$fecha'");
      while($dato = mysqli_fetch_array($registros)) { echo $dato['registro']; }} ?>
      
      </td>

        
      </tr>
      <?php } ?>

      </tbody>
    </table>
    </div>

    </div>

    <div class="col-md-4 fixed">

    <?php
    $fecha = date('Y-m-d');
    $fecha_observaciones = date('d/m/Y');
    echo '<h5>Observaciones del día '.$fecha_observaciones.'</h5>';
    mysqli_query($conexion, "INSERT INTO observaciones (observacion, fecha) VALUES ('', '$fecha')");
    $observaciones = mysqli_query($conexion, "SELECT * FROM observaciones WHERE fecha = '$fecha'");
    while($campo = mysqli_fetch_array($observaciones)) { ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group"><textarea name="observacion" rows="7" name="observacion" class="form-control"><?php echo $campo['observacion']; ?></textarea></div>
      <div class="form-group"><input type="submit" name="observaciones" value="Guardar" class="btn btn-primary"></div>
    </form>
    
    <?php } ?>

    <form method="post" action="">
      <div class="form-group"><input type="date" name="dato" class="form-control"></div>
      <div class="form-group"><input type="submit" name="fecha" value="Cargar" class="btn btn-success"></div>
    </form>

    </div>

    </div>

    </div>

  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/startbootstrap-scrolling-nav@4.2.1/js/scrolling-nav.js" integrity="sha256-GWwestffEMemEIiagzHFvLrZp3Hzr3mxKiE1b5naOzU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
  <!-- /Javascript -->  

</body>
</html>

<?php

if(isset($_GET['salir'])) {
  session_start();
  session_unset();
  session_destroy();
  echo '<script>window.location="./"</script>';
}

if(isset($_POST['observaciones'])) {
  $observacion = $_POST['observacion'];
  $fecha = date('Y-m-d');
  mysqli_query($conexion, "UPDATE observaciones SET observacion = '$observacion' WHERE fecha = '$fecha'");
  echo '<script>window.location="panel"</script>';
}

// Legislador
if(isset($_GET['id'])) {
	$get = $_GET['id'];
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha = date('Y-m-d');
	$usuarios = mysqli_query($conexion, "SELECT * FROM legisladores WHERE id_legislador = '$get'");
	while($campo = mysqli_fetch_array($usuarios)) {
	
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$hora = date('H:i');


	
			if($campo['estado'] == 'PRESENTE') {
        mysqli_query($conexion, "UPDATE legisladores SET estado = 'AUSENTE' WHERE id_legislador = '$get'");
        mysqli_query($conexion, "INSERT INTO registros (registro, hora, fecha, legislador) VALUES ('S', '$hora', '$fecha', '$get')");
				echo '<script>window.location="./panel#'.$get.'"</script>';
			} elseif($campo['estado'] == 'AUSENTE') {
        mysqli_query($conexion, "UPDATE legisladores SET estado = 'PRESENTE' WHERE id_legislador = '$get'");
        mysqli_query($conexion, "INSERT INTO registros (registro, hora, fecha, legislador) VALUES ('E', '$hora', '$fecha', '$get')");
				echo '<script>window.location="./panel#'.$get.'"</script>';
			}
	

	

	}
}

// Oficina
if(isset($_GET['oficina'])) {
	$get = $_GET['oficina'];
	
	
	$oficinas = mysqli_query($conexion, "SELECT * FROM legisladores WHERE id_legislador = '$get'");
	while($campo = mysqli_fetch_array($oficinas)) {
	
	


	
			if($campo['oficina'] == 'SI') {
        mysqli_query($conexion, "UPDATE legisladores SET oficina = 'NO' WHERE id_legislador = '$get'");       
				echo '<script>window.location="./panel#'.$get.'"</script>';
			} elseif($campo['oficina'] == 'NO') {
        mysqli_query($conexion, "UPDATE legisladores SET oficina = 'SI' WHERE id_legislador = '$get'");     
				echo '<script>window.location="./panel#'.$get.'"</script>';
			}
	

	

	}
}



// Vehículo
if(isset($_GET['vehiculo'])) {
	$get = $_GET['vehiculo'];
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha = date('Y-m-d');
	$vehiculos = mysqli_query($conexion, "SELECT * FROM legisladores WHERE id_legislador = '$get'");
	while($campo = mysqli_fetch_array($vehiculos)) {
	
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$hora = date('H:i');


	
			if($campo['vehiculo'] == 'SI') {
        mysqli_query($conexion, "UPDATE legisladores SET vehiculo = 'NO' WHERE id_legislador = '$get'");       
				echo '<script>window.location="./panel#'.$get.'"</script>';
			} elseif($campo['vehiculo'] == 'NO') {
        mysqli_query($conexion, "UPDATE legisladores SET vehiculo = 'SI' WHERE id_legislador = '$get'");     
				echo '<script>window.location="./panel#'.$get.'"</script>';
			}
	

	

	}
}

?>