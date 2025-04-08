@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <section style="align-items: center; height: 90vh;">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 30px">
            <h1 style="text-align: center">
                Портал клининговых услуг «Мой Не Сам» представляет собой информационную систему для формирования заявок на
                уборку жилых и производственных помещений. Перед началом использования портала пользователю необходимо
                пройти процедуру регистрации
            </h1>
            <a href="{{ route('registerView') }}">Регистрация</a>
        </div>
    </section>

@endsection
