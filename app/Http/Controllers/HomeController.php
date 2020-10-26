<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
        // $siswa = DB::table('siswa')->get();
        // return view ('siswa', ['siswa' => $siswa]);
    }
}
