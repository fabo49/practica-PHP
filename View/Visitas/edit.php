
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro de usuarios, bienvenido</title>
  <!-- Status bar en chrome para android -->
  <meta name="theme-color" content="#795548">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Materialize -->
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <style>
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
  </style>
</head>
<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col s12">
  					<h1>Edición de usuario</h1>
        </div>
      </div>
			<div class="row">
				<div class="col s12">
					<p class="flow-text"><?php echo $mensaje; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6">
					<a class="waves-effect waves-light btn left-align" href="<?php echo $_SERVER['PHP_SELF']; ?>">Agregar un nuevo usuario</a>
          <span class="hide-on-med-and-up"><br/></span>
				</div>
				<div class="col s12 m6">
					<a class="waves-effect waves-light btn right-align" href="<?php echo $_SERVER['PHP_SELF']; ?>?action=ver">Ver todos los usuarios</a>
				</div>
			</div>
    </div>
  </main>
  <footer class="page-footer brown">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text center-align">Universidad de Costa Rica</h5>
          <h6 class="white-text center-align">Escuela de Ciencias de la Computación e Informática</h6>
          <p class="center-align grey-text text-lighten-4">Tarea corta 4: Creación de una base de datos de direcciones orientada a archivos | Desarrollo de aplicaciones para Internet CI-2413</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">© <?php echo date("o")?> Fabián Rodríguez</div>
    </div>
  </footer>
</body>
</html>
