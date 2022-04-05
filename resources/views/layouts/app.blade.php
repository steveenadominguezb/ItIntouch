<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>24-7 Intouch</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <style>
    .form-register {
      margin-top: 10%;
      border: lightcyan;
      border-radius: 30px;
      height: 75%;
    }

    .box1 {
      margin-left: 10%;
      width: 35%;
      display: inline-block;
    }

    .box2 {
      margin-left: 10%;
      width: 35%;
      display: inline-block;
    }

    .but-register {
      margin: auto;
      margin-top: 5%;
      width: 25%;
    }

    .father {
      height: 100%;
      margin-top: 15%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-login {
      /* background-color: #b7e4c7; */
      padding: 50px;
      border: solid;
      border-color: black;
      border-radius: 20px;
    }

    .login {
      margin-right: 20px;
    }

    body {
      background-image: url("https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/zr6ottdijvsdyeir1zsb");
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-light bg-success">
    <div class="container-fluid">
      <a class="navbar-brand text-light fw-bold" href="#">IT INTOUCH</a>
      <div class="d-flex w-auto">
        @if (auth()->check())

        @else

        <a class="login h-100 p-2 text-light border border-light rounded-3 fw-bold text-decoration-none" href="{{ route('login.index') }}">Login</a>
        @endif

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header bg-success">
          <!-- {{
            $name = auth()->user()->Name ?? 'IT Intouch';
          }} -->
          <h5 class="offcanvas-title text-light fw-bold text-capitalize" id="offcanvasNavbarLabel">{{$name}}</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            @if (auth()->check())
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login.destroy') }}">Logout</a>
            </li>
            @endif

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Privileges
              </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                @yield('content-privileges')
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  @yield('content')
</body>

</html>