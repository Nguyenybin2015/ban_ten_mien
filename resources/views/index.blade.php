<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>Tên Miền</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark p-3">
            <div class="container-fluid">
              <a class="navbar-brand" href="index">Binad</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
             
              <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Đăng kí</a>
                            <a class="dropdown-item" href="#">Tên miền miễn phí và trả phí</a>
                            <a class="dropdown-item" href="#">Bảng giá tên miền</a>
                            <a class="dropdown-item" href="#">WHOIS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Giới thiệu về Binad</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Công ty</a>
                            <a class="dropdown-item" href="#">Điều khoản và điều kiện</a>
                            <a class="dropdown-item" href="#">Liên hệ với chúng tôi</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item">
                      @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                        @endif
                    </li>
                    <li class="nav-item">
                      @if (Route::has('register'))
                          <a class="nav-link" href="{{ route('register') }}">Đăng kí</a>
                      @endif
                    </li>
                </ul>
              </div>
            </div>
            </nav>
    </header>
    <div class="container">

        <div class="row height d-flex justify-content-center align-items-center">

          <div class="col-md-8">

            <div class="search">
              <i class="fa fa-search"></i>
              <input type="text" class="form-control" placeholder="Have a question? Ask Now">
              <button class="btn-#bc8052 btn">Search</button>
            </div>
          </div>
          
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>