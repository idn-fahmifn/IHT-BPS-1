<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = Karyawan::paginate(5); //mengambil semua data yang ada di model karyawan
        //mengembalikan nilai untuk menampilkan halaman dan data
        return view('karyawan.index', compact('data')); 
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function post(Request $request)
    {

        $input = $request->all();
        $request->validate([
            'nama' => 'string|min:2|max:30|required',
            'umur' => 'integer|min:10|max:60|required',
            'nik' => 'string|min:5|max:6|required|unique:karyawan',
        ]);
        Karyawan::create($input);
        return redirect()->route('karyawan.index')->with('sukses', 'Berhasil menambahkan data');

    }

}
