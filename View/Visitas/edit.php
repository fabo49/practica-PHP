
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
          <h1>Edicion de usuarios</h1>
          <p class="flow-text">Este formulario le permite editar direcciones de contactos en el sistema.</p>
        </div>
      </div>
      <div class="row">
        <form name="visita" id="visita" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="col s12 ">
          <input name="action" type="hidden" value="salvar" />
          <input name="id" type="hidden" value="<?php echo $vec_data['id']; ?>"/>
          <div class="input-field col s6">
            <input type="text" class="validate" name="nombre" id="nombre" maxlength="50" value="<?php echo $vec_data['nombre']; ?>">
            <label for="nombre">Nombre</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate" name="apellidos" id="apellidos" maxlength="50" value="<?php echo $vec_data['apellidos']; ?>">
            <label for="apellidos">Apellidos</label>
          </div>
          <div class="input-field col s12">
            <input type="tel" class="validate" name="tel_casa" id="tel_casa" maxlength="15" value="<?php echo $vec_data['tel_casa']; ?>">
            <label for="tel_casa">Teléfono de la casa</label>
          </div>
          <div class="input-field col s12">
            <textarea type="text" cols="50" rows="2" class="materialize-textarea validate" name="direccion_casa" id="direccion_casa" length="256"><?php echo $vec_data['direccion_casa']; ?></textarea>
            <label for="direccion_casa">Dirección de la casa</label>
          </div>
          <div class="input-field col s12">
            <input type="tel" class="validate" name="tel_trabajo" id="tel_trabajo" maxlength="15" value="<?php echo $vec_data['tel_trabajo']; ?>">
            <label for="tel_trabajo">Teléfono del trabajo</label>
          </div>
          <div class="input-field col s12">
            <textarea type="text" cols="50" rows="2" class="materialize-textarea validate" name="direccion_trabajo" id="direccion_trabajo" length="256"><?php echo $vec_data['direccion_trabajo']; ?></textarea>
            <label for="direccion_trabajo">Dirección del trabajo</label>
          </div>
          <div class="input-field col s12">
            <input name="correo" type="email" id="correo" class="validate" value="<?php echo $vec_data['correo']; ?>">
            <label for="correo" data-error="Tiene que ser un correo electrónico válido." data-success="right">Correo electrónico</label>
          </div>
          <div class="input-field col s12">
            <button class="btn-floating btn-large waves-effect waves-light right" type="submit" name="Enviar" id="Enviar"><i class="material-icons">send</i></button>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col s12">
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=ver">Ver todos los usuarios registrados.</a>
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
