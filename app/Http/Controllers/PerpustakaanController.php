<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index()
    {
        // Simulasi data buku dari database
        $dataBuku = [
            ['judul' => 'Pemrograman Laravel', 'penulis' => 'Budi Santoso'],
            ['judul' => 'Sistem Informasi Perpustakaan', 'penulis' => 'Siti Aminah'],
            ['judul' => 'Database Modern', 'penulis' => 'Andi Wijaya'],
        ];

        return view('dashboard', compact('dataBuku'));
    }
}