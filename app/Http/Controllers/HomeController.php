<?php

namespace App\Http\Controllers; use Illuminate\Http\Request;
class HomeController extends Controller
{
public function index()
{
// $data = [
//	'nama' => 'Budi',
// 'pekerjaan' => 'Developer',
//];
// return view('home')->with($data);
$nama = "Teddy";
$pekerjaan = "programmer";
$alamat = "jl.padang bulan II";
$tanggal_lahir = "23-06-2006";
$Hobi = "Futsal";
return view('home', compact('nama', 'pekerjaan', 'alamat', 'tanggal_lahir', 'Hobi'));
}
public function contact()
{
return view('contact');
}
}
