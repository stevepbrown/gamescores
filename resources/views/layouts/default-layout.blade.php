<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/bs-template.css">
  <link rel="icon" href="https://www.soapmedia.co.uk/wp-content/themes/soap-base/favicon.ico" /><link>
  <title>
    @yield('title')
  </title>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @yield('login-control')
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        @yield('filters') </div>
      <div id="content-container" class="col-sm-8">
            @yield('content');
      </div>
      <div class="col-sm-2 sidenav">
        @yield('actions')
      </div>
    </div>
</div>
</div>
<footer class="container-fluid text-center">
  <p>&copy; Steve Brown 2017</p>
</footer>
</body>
</html>
