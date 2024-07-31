<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Gestion de Restaurantes</title>

<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="../css/animate.css">

<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<link rel="stylesheet" href="../css/magnific-popup.css">					
<link rel="stylesheet" href="../css/aos.css">		
<link rel="stylesheet" href="../css/ionicons.min.css">
<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
<link rel="stylesheet" href="../css/jquery.timepicker.css">		
<link rel="stylesheet" href="../css/flaticon.css">
<link rel="stylesheet" href="../css/icomoon.css">
<link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php 
        require_once("../model/gestionRestaurante.php");
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="/index.php">
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
	          <li class="nav-item active"><a href="/index.php" class="nav-link">Inicio</a></li>
			      <li class="nav-item"><a href="View/login.php" class="nav-link">Iniciar sesion</a></li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="View/recetas.php" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Recetas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="View/desayunos.php">Desayunos</a></li>
            <li><a class="dropdown-item" href="View/platoFuerte.php">Plato Fuerte</a></li>
            <li><a class="dropdown-item" href="View/sopas.php">Sopas</a></li>
            <li><a class="dropdown-item" href="View/bebidas.php">Bebidas</a></li>
            <li><a class="dropdown-item" href="View/postres.php">Postres</a></li>
          </ul>
        </li>
            <li class="nav-item"><a href="View/restaurantes.php" class="nav-link">Restaurantes</a></li>
            <li class="nav-item"><a href="View/gestionRestaurante.php" class="nav-link">Gestion de Restaurantes</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <div class="container my-5" style="background:black;border-radius:10px;padding: 20px;">
        <h1>Restaurantes</h1>
        <a href="./nuevo_restaurante.php" class="btn btn-primary mb-3">Nuevo restaurante</a>

        <table class="table table-hover" style="color:white;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Menu</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($restaurantes as $restaurante): ?>
                    <tr>
                        <td style="width: 150px;">
                            <?php echo $restaurante->COD_REST ?>
                        </td>

                        <td style="width: 150px;">
                            <?php echo $restaurante->NOM_REST ?>
                        </td>

                        <td style="width: 150px;">
                            <?php echo $restaurante->MENU_REST ?>
                        </td>
                        <td class="text-end">
                            <a href="./modifica_restaurante.php?id=<?php echo $restaurante->COD_REST ?>" class="btn btn-primary">Modificar restaurante</a>
                            <a href="./modifica_direccion.php?id=<?php echo $restaurante->COD_POST ?>" class="btn btn-success">Modificar direccion</a>
                            <a href="./gestionRestaurante.php?id=<?php echo $restaurante->COD_REST ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>