<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    // Pastikan tulisannya 'public' bukan 'pubic'
    public function contact() 
    {
        return "ini adalah halaman kontak";
    }
}