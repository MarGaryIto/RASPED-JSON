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
        <img src="..." class="img-responsive" alt="icon">
        <p class="lead">Espacio para la consulta y generación de archivos JSON, desde la base de datos remota de RASPED.</p>
      </div>

      <!-- Tabla poblada de las consultas -->
      <div class="row marketing">
        <div class="col-lg-6" background="#000">
          <h4>Todo el Personal</h4>
          <a class="btn btn-lg btn-success" href="#" role="button">Consultar</a>

          <h4>Personal por Telefono</h4>
          <form role="form">
            <div class="form-group">
                <input type="text" pattern="^[9|8|7|6|5|4|3|2|1|0]\d{9}$" class="form-control" id="ejemplo_email_1" placeholder="Telefono" required>
            </div>
            <a class="btn btn-lg btn-success" href="#" role="button">Consultar</a>
          </form>
        </div>
        <div class="col-lg-6">
          <h4>Personal por id</h4>
          <form role="form">
            <div class="form-group">
                <input type="number" min="1" max="100" step="1" class="form-control" id="ejemplo_email_1" placeholder="id" required>
            </div>
            <a class="btn btn-lg btn-success" href="#" role="button">Consultar</a>
          </form>
        </div>
      </div>
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
      
      <!-- Descripcion final -->
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
