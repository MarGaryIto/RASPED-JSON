<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RASPED</title>
 
    <!-- CSS de Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap/css/jumbotron-narrow.css" rel="stylesheet">

  </head>
  
  <!-- Contenido de la paguina -->
  <body>
    
    <!-- Version -->
    <div class="container" aling="center">
      <div class="header clearfix">
        <h3 class="text-muted">Versión 1.0.0</h3>
      </div>

      <!-- Jumbotron contenedor de titulo y descripcion -->
      <div class="jumbotron">
        <h1>RASPED</h1>
        <img src="https://k61.kn3.net/4/9/C/3/3/1/5A6.png" class="img-responsive" alt="Cinque Terre">
        <p class="lead">Espacio para la consulta y generación de archivos JSON, desde la base de datos remota de RASPED.</p>
      </div>

      <!-- Tabla poblada de las consultas -->      
      <div class="container marketing">

      <!-- Columna de tres elementos -->
      <div class="row">
        
        <div class="col-lg-4">
          <h4>Todo el Personal</h4>
          <a href="content/personal.php" class="btn btn-primary" role="button">Consultar</a>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-4">
        <h4>Personal por Telefono</h4>
          <form role="form" action="content/personal_tel.php" method="post">
            <div class="input-group">
              <input type="text" name="telefono" id="telefono" pattern="^[9|8|7|6|5|4|3|2|1|0]\d{9}$" class="form-control" id="ejemplo_email_1" placeholder="Telefono" required>
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
          </form>
          <form >
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-4">
        <h4>Personal por ID</h4>
          <form role="form" action="content/personal_id.php" method="post">
            <div class="input-group">
              <input type="number" name="id_personal" id="id_personal" min="1" max="99" class="form-control" placeholder="ID" required>
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
          </form>
          <form >
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->
        
      <!-- Columna de tres elementos -->
      <div class="row">
        
        <div class="col-lg-4">
        <h4>Insertar Personal</h4>
          <form role="form-inline" action="content/agregar.php" method="post">
            <div class="form-group"><!-- Nombre Personal -->
                <input type="text" name="nombre_personal" id="nombre_personal" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group"><!-- Apellido Paterno -->
                <input type="text" name="apellido_p" id="apellido_p" class="form-control" placeholder="Apellido Paterno" required>
            </div>
            <div class="form-group"><!-- Apellido Materno -->
                <input type="text" name="apellido_m" id="apellido_m" class="form-control" placeholder="Apellido Materno" required>
            </div>
            <div class="form-group"><!-- Contraseña -->
                <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="contrasena" required>
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
          </form>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-4">
          <h4>Horarios</h4>
          <a href="content/horarios.php" class="btn btn-primary" role="button">Puestos</a>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-4">
          <h4>Puestos</h4>
          <a href="content/puestos.php" class="btn btn-primary" role="button">Puestos</a>
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->
      
      <!-- Descripcion final tipo footer -->
      <footer class="footer">
        <p>&copy; 2017 RASPED - JSON - Android - 1715110196@utec-tgo.edu.mx.</p>
      </footer>
      
    </div>
 
    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
 
    <!-- Todos los plugins JavaScript de Bootstrap -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/js/npm.js"></script>
  </body>
</html>
