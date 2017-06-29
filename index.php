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
        <img src="<a href="https://image.ibb.co/j8bV55/RASPED_BM_icono_Reloj_Flecha_Fuera_Edited.png" class="img-responsive" alt="90px">
        <p class="lead">Espacio para la consulta y generación de archivos JSON, desde la base de datos remota de RASPED.</p>
      </div>

      <!-- Tabla poblada de las consultas -->      
      <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        
        <div class="col-lg-4">
          <h4>Todo el Personal</h4>
          <a href="content/personal.php" class="btn btn-primary" role="button">Consultar</a>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-4">
        <h4>Personal por Telefono</h4>
          <form role="form" action="content/con_tel_id-usu.php" method="post">
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
      
      <!-- Descripcion final tipo footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
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
