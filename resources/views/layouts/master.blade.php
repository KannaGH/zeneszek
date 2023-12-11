<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">Lista</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="/Zeneszek">Zenészek</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ZeneRogzites">Zene rögzítés</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Zenelista">Zene lista</a>
              </li>
            
          </ul>
        </div>
      </nav>

    @yield('content')

</body>
</html>