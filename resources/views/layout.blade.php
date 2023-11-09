<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"/>



    </head>
    <body>
        <div class="container">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="a-propos">A propos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="{{route('clients.index')}}" >Voir nos clients</a>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
            @if((session()->has('message')))
                <div class="alert alert-success" role="alert">
                    {{session()->get('message')}}
                </div>
            @endif

        @yield('content')

        </div>
    </body>
</html>
