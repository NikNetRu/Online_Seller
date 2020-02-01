<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>BALTA73</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{!! asset('css/welcome.css') !!}" media="all" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--HEADER BLOCK-->
        <header class = "menu-bar border">
            <div class = "row col align-items-center">
                <div class = "col-sm-2">
                    <div class = "logo row justify-content-center">
                    <strong>BALTA73</strong>
                    </div>
                </div> 
                <div class = "col-sm-9">
                    <div class = "userInfo row justify-content-end">
                    @auth
                    Для зарегестрированных
                    @endauth
                    @unless (Auth::check())
                    <a class="text-dark px-md-1 align-middle" href="{{ route('login') }}">Войти</a>
                    <a class="text-dark px-md-1 align-middle" href="{{ route('register') }}">Регистрация</a>
                    @endunless
                    </div>
                </div>
            </div>
        </header>
        <!--DROPDOWN MAIN MENU-->
        <div class = "row">
            <div class = "col-sm-auto">
                <nav class = "main-menu">
                    <ul class = "menu d-flex sm-auto">
                        <li class="menu__item">
                            <button type="button" class="btn btn-warning">Главная</button>
                        </li>
                        <li class="menu__item">
                            <div class="btn-group">
                              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Продукты
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </div>
                        </li>
                        <li class="menu__item">
                            <button type="button" class="btn btn-warning">Оплата и доставка</button>
                        </li>
                        <li class="menu__item">
                            <button type="button" class="btn btn-warning">О нас</button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
@yield('сontent')
@section('middleBlock')
        <!--NEWS AND CAROUSEL BLOCK-->
        <div class = "row carouselBlock">
            <div class = "caroselNews">
            <div id="carouselNews" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner ">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{!! asset('images/newsImages/apelsiny-apelsin-frukty.jpg') !!}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{!! asset('images/newsImages/apelsiny-apelsin-frukty.jpg') !!}" alt="Second slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselNews" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselNews" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        </div>
@show       
        <!--FOOTER-->
        <footer class="text-muted">
          <div class="container">
              <p>Для связи NikNetRu@list.ru</p>
          </div>
        </footer>
        
    </body>
</html>
