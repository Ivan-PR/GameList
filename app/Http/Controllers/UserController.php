<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function create(){
        return view('users.create');
    }

    public function login(){
        return view('users.login');
    }

    public function register(){
        return view('users.registre');
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.editar', compact('user'));
    }

    // Duda, tendremos que hacer una pagina para confirmar que queremos borrar un usuario o simplemente del tiron?


}