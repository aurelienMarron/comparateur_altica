<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Le comparateur de niveaux de services de traduction</title>

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
    <body class="d-flex flex-column justify-content-between m-2">
        <header class="">

        </header>

        <div class="flex-fill">
            @yield('content')
        </div>
        {{--   {{ config('app.name') }}

        @if(Route::is('home'))
        <p>Bienvenue</p>
        @endif

        <img src="{{ asset('/images/img.png') }}" alt="img inexistante"> --}}

        <footer class=" d-flex flex-row justify-content-center ">
            <p class="text-center">
                Plus d'informations sur notre site web : <a href="https://www.altica-traductions.fr">www.altica-traductions.fr</a> <br>
                Suivez-nous également sur nos réseaux sociaux LinkedIn <a href="https://www.linkedin.com/company/altica-traductions-sarl/"><i class="bi bi-linkedin"></i></a> et Facebook <a href="https://www.facebook.com/alticatraductions"><i class="bi bi-facebook"></i></a> <br>
                &copy; Copyright 2021 &middot; <a href="https://altica-traductions.fr/wp1/mentions-legales/">About us</a>
            </p>
        </footer>
    </body>
</html>
