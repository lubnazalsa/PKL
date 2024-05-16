<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function register()
    {
        $data['title'] = 'Register';
        return view('public/register', $data);
    }

    public function register_action(Request $request)
{
    $request->validate([
        'name' => 'required',
        'username' => 'required|unique:users',
        'password' => 'required|min:8', // Ubah sesuai kebutuhan panjang minimal password
        'password_confirmation' => 'required|same:password',
    ]);

    $user = new User([
        'name' => $request->name,
        'username' => $request->username,
        'password' => Hash::make($request->password), // Gunakan password yang diinputkan pengguna
    ]);

    $user->save();

    return redirect()->route('login')->with('success', 'Registration Success. Please Login!');
}


    public function login ()
        {
        return view('login');
        }

        public function postLogin (Request $request)
            {
                $validated = $request->validate([
                'username' => 'required|min:4|max:10',
                'password' => 'required|min:3'
                ]);
                $username = $validated['username'];
                $password = $validated['password'];
                if ($username && $password) {
                echo "Login berhasil";
                } else {
                return back()->withErrors($validated)->withInput();
                }
            }
}
