<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function register(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'passwordconf' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->password === $request->passwordconf) {
            $user->save();
            Auth::login($user);
            return redirect(route('home'));
        }
        return redirect(route('users.registre'));
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        // $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials/*, $remember */)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        } else {
            return redirect(route('users.login'));
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('users.login'));
    }
}
