<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create(){
        return view('users.create');
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.editar', compact('user'));
    }

    // Duda, tendremos que hacer una pagina para confirmar que queremos borrar un usuario o simplemente del tiron?


}