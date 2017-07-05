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
            <div class="form-group">
                <input type="text" name="telefono" id="telefono" pattern="^[9|8|7|6|5|4|3|2|1|0]\d{9}$" class="form-control" id="ejemplo_email_1" placeholder="Telefono" required>
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
          </form>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-4">
        <h4>Personal por id</h4>
          <form role="form" action="content/personal_id.php" method="post">
            <div class="form-group">
                <input id="id_personal" name="id_personal"  type="number" min="1" max="100" step="1" class="form-control" id="ejemplo_email_1" placeholder="id" required>
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
          </form>
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->
        
      <!-- Columna de tres elementos -->
      <div class="row">
        
        <div class="col-lg-4">
        <h4>Insertar Personal</h4>
          <form role="form-inline" action="content/insertar_personal.php" method="post">
            <div class="form-group"><!-- Sede --><!-- Cupo -->
              <input type="number" min="01" max="99" step="1" name="sede" id="sede" class="form-control" placeholder="sede" required>
            </div>
            <div class="form-group">
              <input type="number" min="01" max="9999" step="1" name="cupo" id="cupo" class="form-control" placeholder="cupo" required>
            </div></br>
            <div class="form-group"><!-- Nombre Personal -->
                <input type="text" name="nombre_personal" id="nombre_personal" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group"><!-- Apellido Paterno -->
                <input type="text" name="apellido_p" id="apellido_p" class="form-control" placeholder="Apellido Paterno" required>
            </div>
            <div class="form-group"><!-- Apellido Materno -->
                <input type="text" name="apellido_m" id="apellido_m" class="form-control" placeholder="Apellido Materno" required>
            </div>
            <div class="form-group"><!-- Lada -->
                <input type="number" min="01" max="999" step="1" name="lada" id="lada" class="form-control" placeholder="lada" required>
            </div>
            <div class="form-group"><!-- Telefono -->
                <input type="number" min="01" max="9999999" step="1" name="telefono" id="telefono" class="form-control" placeholder="telefono" required>
            </div>
            <div class="form-group"><!-- Contraseña -->
                <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="contrasena" required>
            </div>
            <div class="form-group"><!-- horario -->
              <label for="sel1">horario</label>
              <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
            <div class="form-group"><!-- puesto -->
              <label for="sel1">puesto</label>
              <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
            <div class="form-group"><!-- Tipo Usuario -->
              <label for="sel1">tipo de usuario</label>
              <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
          </form>
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
