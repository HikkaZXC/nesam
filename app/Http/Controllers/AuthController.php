<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'login' => 'string|required|unique:users',
            'email' => 'email|required|unique:users|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'fio' => 'string|required|regex:/^[А-Яа-яЁё\s]{2,}$/',
            'phone' => 'required|string|regex:/^\+7\(\d{3}\)-\d{3}-\d{2}-\d{2}$/',
            'password' => 'required|string|min:6',
        ], [
            'login.required' => 'Поле логин обязательно для заполнения',
            'login.unique' => 'Такой логин уже существует',
            'email.required' => 'Поле email обязательно для заполнения',
            'email.email' => 'Поле email должно быть действительным email адресом',
            'email.unique' => 'Такой email уже существует',
            'email.regex' => 'Неверный формат email',
            'fio.required' => 'Поле ФИО обязательно для заполнения',
            'fio.regex' => 'ФИО должно содержать только русские буквы и пробелы',
            'phone.required' => 'Поле телефон обязательно для заполнения',
            'phone.regex' => 'Неверный формат телефона. Используйте формат: +7(XXX)-XXX-XX-XX',
            'password.required' => 'Поле пароль обязательно для заполнения',
            'password.min' => 'Пароль должен содержать минимум 6 символов',
        ]);

        User::create([
            'login' => $request->login,
            'email' => $request->email,
            'fio' => $request->fio,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        Auth::attempt();

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ], [
            'login.required' => 'Поле логин обязательно для заполнения',
            'password.required' => 'Поле пароль обязательно для заполнения'
        ]);

        if (Auth::attempt([
            'login' => $request->login,
            'password' => $request->password
        ])) {
            return redirect()->route('home');
        }

        return redirect()->route('loginView')
            ->withErrors(['login' => 'Неверный логин или пароль']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
