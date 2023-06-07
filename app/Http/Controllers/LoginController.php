<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //show login
    public function show()
    {
        return view('login');
    }

    //ambil data
    public function login(Request $request)
    {
        //login
        $email = $request->email;
        $password = $request->password;

        //check email password
        $user = User::where('email', $email)->first();//first untuk ambil 1 data get untuk banyak, paginate
        $hashedPassword = $user->password;

        if (Hash::check($password, $hashedPassword)){
            return "Login Berhasil!";
        }
        else{
            return "Login gagal!";
        }

        return $user;
    }
}
