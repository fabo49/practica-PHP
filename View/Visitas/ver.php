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
	th{
		text-align:center;
	}

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
					<h1>Registro de usuarios</h1>
					<p class="flow-text">Direcciones personales</p>
					<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Agregar un nuevo usuario</a>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<table class="striped responsive-table">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Telefono de la casa</th>
								<th>Direccion de la casa</th>
								<th>Telefono del trabajo</th>
								<th>Direccion del trabajo</th>
								<th>Correo electronico</th>
								<th colspan=2>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($visitas as $visita)
							{
								?>
								<tr>
									<td><?php echo $visita['nombre']; ?></td>
									<td><?php echo $visita['apellidos']; ?></td>
									<td><?php echo $visita['tel_casa']; ?></td>
									<td><?php echo $visita['direccion_casa']; ?></td>
									<td><?php echo $visita['tel_trabajo']; ?></td>
									<td><?php echo $visita['direccion_trabajo']; ?></td>
									<td><?php echo $visita['correo']; ?></td>

									<!-- TODO: hay que pasarle le identificador al mofo -->
									<td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=edit&id=<?php echo $visita['id'];?>">Editar</a></td>
									<td><a href="<?php echo 
$_SERVER['PHP_SELF']; ?>?action=delete&id=<?php echo $visita['id'];?>">Borrar</a></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Agregar un nuevo usuario</a>
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
