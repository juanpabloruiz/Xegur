<?php $conexion = new mysqli('localhost', 'root', '', 'seguridad'); session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Legislatura Corrientes - Seguridad</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <style>
  body {background: #3870c0;}
  </style>
</head>
<body>

  <div class="container">

    <div class="row">
      <div class="col-lg-4 mx-auto my-auto">
        <a href="../"><img src="img/logo.png" class="card-img-top" alt="Logotipo"></a>

        <!-- Formulario -->
        <form method="post" action="">
          <?php
          if(isset($_POST['submit'])) {
            $correo_post = $_POST['correo'];
            $clave_post = $_POST['clave'];
            $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo_post'");
            while($campo = mysqli_fetch_array($consulta)) {
              $correo = $campo['correo'];
              $clave = $campo['clave'];
              if($correo_post !== $correo) {
                echo '<div class="alert alert-danger">El usuario no existe</div>';
              } elseif($clave_post !== $clave) {
                echo '<div class="alert alert-danger">La contraseña es incorrecta</div>';
              } elseif($correo_post == $correo && $clave_post == $clave) {
                $_SESSION['user'] = $correo_post;
                echo '<script>window.location="panel"</script>';
              }
            }
          }
          ?>
          <div class="form-group"><input type="email" name="correo" placeholder="Correo electrónico" class="form-control" required autofocus></div>
          <div class="form-group"><input type="password" name="clave" placeholder="Contraseña" class="form-control" required></div>
          <div class="form-group"><input type="submit" name="submit" value="Ingresar" class="btn btn-primary btn-block"></div>
        </form>
        <!-- /Formulario -->

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