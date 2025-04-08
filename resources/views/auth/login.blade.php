@extends('layouts.app')

@section('title', 'Авторизация')

@section('content')

    <section>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label for="login">Логин</label>
                <input type="text" name="login">
            </div>
            @error('login')
                {{ $message }}
            @enderror
            <div>
                <label for="password">Пароль</label>
                <input type="password" name="password">
            </div>
            @error('password')
                {{ $message }}
            @enderror
            <button type="submit">Войти</button>
        </form>
    </section>

@endsection
