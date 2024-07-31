<?php include_once 'layoutInterno.php';
      include_once '../Controller/usuarioController.php'; 
?>
<!DOCTYPE html>
<html>

<?php 
  HeadCSS();
?>

<body  class="hold-transition login-page bg-dark">
<div class="login-box" >
  <div class="login-logo">
    <a style= "color: #fff;">Comidi
            <br>
            <small style= "color: #fac564;">Ticas</small>
          </a>
  </div>
  
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa tus datos para inciar sesion</p>

      <?php
          if(isset($_POST["msj"]))
          {
            echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
          }
      ?>

      <form action="" method="post">

      <Label>Correo Electrónico</Label>
        <div class="input-group mb-3">
          <input type="email" id="txtEmail" name="txtEmail" class="form-control" 
          placeholder="Correo Electronico"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <Label>Contraseña</Label>
        <div class="input-group mb-3">
          <input type="password" id="txtPassword" name="txtPassword" class="form-control" 
          placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-8">

            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recuerdame
              </label>
            </div>
          </div>
          
          <div class="col-4">
            <button type="submit" id="btnIniciarSesion" name="btnIniciarSesion" 
            class="btn btn-primary btn-block">Inicio de Sesion</button>
          </div>
        </div>
      </form>



      <p class="mb-1">
        <a href="recuperar.php">Olvide mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="registro.php" class="text-center">Registrar un nuevo usuario</a>
    </div>
   
  </div>
</div>

<?php 
        HeadJS();
    ?>
</body>
</html>
