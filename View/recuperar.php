<?php include_once 'layoutInterno.php';
      include_once '../Controller/usuarioController.php'; 
?>
<!DOCTYPE html>
<html>
<?php 
    HeadCSS();
?>
<body  class="hold-transition login-page bg-dark"  >

<div class="login-box" >
  <div class="login-logo">
    <a  style= "color: #fff;">Comidi
            <br>
            <small style= "color: #fac564;">Ticas</small>
          </a>
  </div>
  
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa tus datos</p>

      <?php
          if(isset($_POST["msj"]))
          {
              echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
          }
      ?>

      <form action="" method="post">

      <Label>Correo Electronico</Label>  
      <div class="input-group mb-3">
      <input type="email" id="txtEmail" name="txtEmail" class="form-control" 
          placeholder="Correo Electronico"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
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
           <button type="submit" id= "btnRecuperarAcceso" name="btnRecuperarAcceso" 
            class="btn btn-primary btn-block">Recuperar Acceso</button>
          </div>
        </div>
      </form>


      <p class="mb-1">
        <a href="login.php">Iniciar sesion</a>
      </p>
    </div>
  
  </div>
</div>

<?php 
        HeadJS();
?>
</body>
</html>