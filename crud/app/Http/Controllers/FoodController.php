<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Menu;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Food::all();
        return view('food.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::all();
        return view('food.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'nama_makanan' => ['required', 'min:3', 'max:30', 'string'],
            'harga' => ['required', 'min:3', 'max:6', 'string'],
            'gambar' => ['required',  'max:10240'],
            'deskripsi' => ['required'],
        ]);

        if($request->hasFile('gambar'))
        {
            $gambar = $request->file('gambar'); //mengabil data gambar
            $path = 'public/images/food'; //tempat penyimpanan
            $ext = $gambar->getClientOriginalExtension(); //mengambil extension
            $nama = 'jenis-menu'.random_int('0000','9999').'.'.$ext; //memberikan nama pada file yang diupload
            $gambar->storeAs($path, $nama); //menyimpan gambar di local storage.
            $input['gambar'] = $nama; //menyimpan nama file ke database
        }

        Food::create($input);
        return redirect()->route('food.index')->with('success', 'Data Berhasil Dibuat');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Food::findOrFail($id);
        $menu = Menu::all();
        return view('food.show', compact('data', 'menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Food::findOrFail($id);
        $input = $request->all();

        // validasi Input
        $request->validate([
            'nama_makanan' => ['max:30', 'min:2', 'string'],
            'harga' => ['max:6', 'min:3', 'string'],
            'deskripsi' => ['required'],
            'gambar' => ['max:10240'],
        ]);
        if($request->hasFile('gambar'))
        {
            $gambar = $request->file('gambar'); //mengabil data gambar
            $path = 'public/images/food'; //tempat penyimpanan
            $ext = $gambar->getClientOriginalExtension(); //mengambil extension
            $nama = 'jenis-menu'.random_int('0000','9999').'.'.$ext; //memberikan nama pada file yang diupload
            $gambar->storeAs($path, $nama); //menyimpan gambar di local storage.
            $input['gambar'] = $nama; //menyimpan nama file ke database
        }
        $data->update($input);
        return redirect()->route('food.index')->with('success', 'Data Berhasil Diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Food::findOrFail($id);
        $data->delete();
        return redirect()->route('food.index')->with('success', 'Data berhasil dihapus');
    }
}
