<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <header>
        <a href="{{ route('home') }}">Мой не сам</a>
        <nav>
            <ul>
                <li><a href="">История заявок</a></li>
                <li><a href="">Создать заявку</a></li>
                <li><a href="">Админ панель</a></li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li><a href="{{ route('loginView') }}">Вход</a></li>
                <li><a href="{{ route('registerView') }}">Регистрация</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>
