<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/my-css/master.css') }}" >
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light container-fruid">
        <a class="navbar-brand" href="/">Logo</a>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mt-2 mt-lg-0 col-lg-6">
                <li class="nav-item active bar-link">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item bar-link">
                  <a class="nav-link " href="#">Manage</a>
                </li>
                <li class="nav-item bar-link">
                  <a class="nav-link" href="#">Import</a>
                </li>
                <li class="nav-item bar-link">
                  <a class="nav-link" href="#">export</a>
                </li>
              </ul>
              <div class="col-lg-4"></div>
              <ul class="navbar-nav  mt-2 mt-lg-0 col-lg-2">
                <li class="nav-item dropdown avar-div">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Someone
                    <img src="{{ url('/image/default-avar.jpg') }}" alt="" class="avatar"/>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Login</a>
                    <a class="dropdown-item" href="#">Register</a>
                  </div>
                </li>
              </ul>
            </div>
    </nav>
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>