<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/my_css/master.css') }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light container-fruid">
        <a class="navbar-brand logo bar-link" href="/">Logo</a>
        <div class="collapse navbar-collapse search-box" id="collapsibleNavId">
              <ul class="navbar-nav mt-2 mt-lg-0 col-lg-5">
                <li>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </li>
              </ul>
              <div class="col-lg-3"></div>
                <ul class="navbar-nav mt-2 mt-lg-0 col-lg-2 avar-div">
                  <li class="nav-item dropdown avar-div">
                    <a class="nav-link dropdown-toggle user-name" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ url('/image/default-avar.jpg') }}" alt="" class="avatar"/>
                      ADMIN
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="#">Login</a>
                      <a class="dropdown-item" href="#">Register</a>
                    </div>
                  </li>
                </ul>
            </div>
    </nav>
    <div class="container-fluid mar-top">
      <div class="row">
        <div class="col-md-2 text-center">
          <div class="">
            <div class="container btn btn-outline-primary nut">
              <a class="chu" href=""> hehe</a>
            </div>
            <div class="container btn btn-outline-primary nut">
              <a class="chu" href=""> hehe</a>
            </div>
            <div class="container btn btn-outline-primary nut">
              <a class="chu" href=""> hehe</a>
            </div>
            <div class="container btn btn-outline-primary nut">
              <a class="chu" href=""> hehe</a>
            </div>
          </div>
        </div>
        <div class="col-md-9 bg-light-gray">
          @yield('content')
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>