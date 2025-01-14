<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = Karyawan::all(); //mengambil semua data yang ada di model karyawan
        //mengembalikan nilai untuk menampilkan halaman dan data
        return view('karyawan.index', compact('data')); 
    }

    public function create()
    {
        return view('karyawan.create');
    }

}
