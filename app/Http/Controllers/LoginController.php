<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function show()
    {
        if (session('auth')) {
            return redirect()->route('admin');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Перевірка форми
        if (!$request->filled(['email', 'password'])) {
            return back()->with('infoMessage', 'Заповніть форму авторизації!');
        }

        $user = DB::table('users')
            ->where('email', $request->input('email'))
            ->where('password', sha1($request->input('password')))
            ->first();

        if ($user) {
            session(['auth' => true]);
            return redirect()->route('admin');
        }

        return back()->with('infoMessage', "Такого користувача не існує. <a href='/register'>Зареєструйтесь тут</a>");
    }
}
