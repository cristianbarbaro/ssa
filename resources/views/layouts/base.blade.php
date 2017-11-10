<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aseguradora SSA</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
  </head>

  <body>
    <div class="container">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="{{url('/')}}">Aseguradora SSA</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Inicio</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Sesión</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      @yield('content')
    </div>
  </body>
</html>
