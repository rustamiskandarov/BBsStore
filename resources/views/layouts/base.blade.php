<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>@yield('title')</title>

    <link rel="canonical" href="">




    <!-- Bootstrap core CSS -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Favicons -->

    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">Сайт доска объявлений</h4>
                    <p class="text-muted">Сайт доска объявлений</p>
                    <li><a href="#" class="text-white"></a></li>
                    <li><a href="#" class="text-white"></a></li>
                    <li><a href="#" class="text-white"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{route('main')}}" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                     stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                     viewBox="0 0 24 24">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                    <circle cx="12" cy="13" r="4"/>
                </svg>
                <strong>Объявления</strong>
            </a>
            <span class="">
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    @auth
                    <a class="me-3 py-2 text-info text-decoration-none" href="{{route('bb.home')}}">Мои объявления</a>
                    @endauth
                    @guest
                    <a class="me-3 py-2 text-white text-decoration-none" href="{{route('login')}}">Вход</a>
                    <a class="me-3 py-2 text-white text-decoration-none" href="{{route('register')}}">Регистрация</a>
                    @endguest
                    @auth
                    <form action="{{route('logout')}}" method="POST" class="form-inline">@csrf
                    <input type="submit" class="btn btn-outline-secondary" value="Выход">
                        @endauth
                </form>
                </nav>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                        aria-controls="navbarHeader" aria-expanded="false" aria-label="">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </span>

        </div>
    </div>
</header>

<main>



    <div class="album py-5 bg-light">
        <div class="container">

        @yield('main')
        </div>
    </div>

</main>

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">WebStudio</a>
        </p>
        <p class="mb-0">2022© Веб струдия <a href="/">Name </a> Name<a href="#">
                Name </a>.</p>
    </div>
</footer>

<script src="{{ mix('/js/app.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>
