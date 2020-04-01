<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('alert.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src=" {{asset('js/all.min.js')}} "></script>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top ">
<div class="container">
  <a class="navbar-brand" href="#">Gestion d'Alerte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link font-weight-bolder" href="@yield('route')">@yield('page') <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>

    </div>
  </div>
</nav>

@yield('container')

</body>
</html>