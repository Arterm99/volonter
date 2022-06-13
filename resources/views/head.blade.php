<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" ;>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->


</head>

<body>

<div style="background: #eeb40d">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="{{ route('home') }}"
               class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

                <!--                    <svg class="bi me-2" width="40" height="32"><use xlink:href="/"></use></svg> -->

                <img class="img-fluid img-thumbnail-logo" src="{{ asset('/storage/logo.svg') }}" title="Лого Мосволонтер">
            </a>

            <ul class="nav nav-pills" style="margin: auto;">
                <li class="nav-item">
                    <a href="{{ route('volonter') }}" class="nav-link" id="pills-home-tab">Волонтеры</a>
                </li>
                <li class="nav-item"><a href="{{ route('register-volonter') }}" class="nav-link">Стать
                        волонтером</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Взять задание</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Желаю помочь</a></li>

                <div class="d-flex bg-indigo-50">
                    @if (Route::has('login'))
                        @auth
                            @if (auth()->user()->role == 'admin')
                                <li class="nav-item"><a href="{{ route('volonter') }}" class="nav-link">Волонтеры</a>
                                </li>
                            @endif
                            <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Профиль</a></li>
                        @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Войти</a></li>

                            @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Зарегистрироваться</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </div>
            </ul>
        </header>
    </div>
</div>

@yield('content')


<!--   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

<!-- footer -->
<div class="container">
    <footer class="row row-cols-5 py-5 my-5 border-top">
        <div class="col">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <p class="text-muted">© 2022</p>
        </div>

        <div class="col">

        </div>

        <div class="col">
            <h5></h5>
            <ul class="nav flex-column">

            </ul>
        </div>

        <div class="col">
            <h5></h5>
            <ul class="nav flex-column">

            </ul>
        </div>

        <div class="col">
            <h5></h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Волонтеры</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Взять заказ</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Желаю помочь</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Войти</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Зарегестрироваться</a></li>
            </ul>
        </div>
    </footer>
</div>
</html>
