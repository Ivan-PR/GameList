<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class LoginController extends Controller {

    public function register(Request $request) {

        $request->validate([
            'name' => 'required | min:3| max:50 | string | regex:/^[a-zA-Z\s]*$/',
            'email' => 'required | email',
            'password' => 'required | min:8 | max:50 ',
            'passwordconf' => 'required | same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->password === $request->passwordconf) {
            $user->save();

            // Asignar un rol al usuario (ejemplo: rol "usuario")
            $role = Role::where('name', 'User')->first();
            $user->roles()->attach($role);


            Auth::login($user);
            return redirect(route('home'));
        }
        return redirect(route('users.registre'));
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required | email ',
            'password' => 'required '
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
