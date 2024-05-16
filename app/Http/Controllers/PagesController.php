<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function loginPage () {
        return view('public.login');
        }

    public function dashboardSiswa () {
            return view('siswa.dashboard');
            }

    
}
