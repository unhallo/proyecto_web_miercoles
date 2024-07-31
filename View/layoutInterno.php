<?php
    include_once '../Controller/usuarioController.php'; 

    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }



    function MostrarNav()
    {
        if(!isset($_SESSION["NombreUsuario"]))
        {
           header("location: login.php");
        }

        echo '
            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="home.php">
            <img src="images/CR.jpg" alt="CR" class="mr-1" >
            Comidi
            <br>
            <small>Ticas</small>
          </a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="home.php" class="nav-link">Inicio</a></li>
			      <li class="nav-item"><a href="login.php" class="nav-link">Iniciar sesion</a></li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="recetas.php" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Recetas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="desayunos.php">Desayunos</a></li>
            <li><a class="dropdown-item" href="platoFuerte.php">Plato Fuerte</a></li>
            <li><a class="dropdown-item" href="sopas.php">Sopas</a></li>
            <li><a class="dropdown-item" href="bebidas.php">Bebidas</a></li>
            <li><a class="dropdown-item" href="postres.php">Postres</a></li>
          </ul>
        </li>
            <li class="nav-item"><a href="restaurantes.php" class="nav-link">Restaurantes</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
      ';
    }

    function HeadCSS()
    {
        echo '<head>
                <title>ComidiTicas</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
                <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                <link rel="stylesheet" href="dist/css/adminlte.min.css">
                <link rel="stylesheet" href="dist/css/styles.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
                <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap4.css">
                <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
                <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
                <link rel="stylesheet" href="css/animate.css">
                <link rel="stylesheet" href="css/owl.carousel.min.css">
                <link rel="stylesheet" href="css/owl.theme.default.min.css">
                <link rel="stylesheet" href="css/magnific-popup.css">					
                <link rel="stylesheet" href="css/aos.css"
                <link rel="stylesheet" href="css/ionicons.min.css">
                <link rel="stylesheet" href="css/bootstrap-datepicker.css">
                <link rel="stylesheet" href="css/jquery.timepicker.css"
                <link rel="stylesheet" href="css/flaticon.css">
                <link rel="stylesheet" href="css/icomoon.css">
                <link rel="stylesheet" href="css/style.css">
            </head>
        ';
    }

    function HeadJS()
    {
        echo '
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dist/js/adminlte.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap4.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>
        ';
    }

    function ValidarRolAdministrador()
    {
        if($_SESSION["RolUsuario"] != 2)
        {
            header("location: home.php");
        } 
    }

?>