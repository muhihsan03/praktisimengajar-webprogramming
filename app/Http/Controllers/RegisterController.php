<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //untuk menampilkan halaman register

    public function show()
    {
        return view('register');
    }

    //untuk simpan data ke database

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return "berhasil simpan";
    }
}
