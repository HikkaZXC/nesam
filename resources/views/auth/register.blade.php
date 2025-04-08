@extends('layouts.app')

@section('title', 'Авторизация')

@section('content')

    <section>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <label for="login">Логин</label>
                <input type="text" name="login">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div>
                <label for="fio">ФИО</label>
                <input type="text" name="fio">
            </div>
            <div>
                <label for="phone">Номер телефона</label>
                <input type="text" name="phone">
            </div>
            <div>
                <label for="password">Пароль</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </section>

@endsection