<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Food;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Menu::all();
        return view('menu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all(); //mengambil semua nilai yang diinputka di form.
        // validasi form.
        $request->validate([
            'nama_menu' => ['required', 'max:30', 'min:2', 'string'],
            'thumbnail' => ['required', 'max:10240'],
        ]);

        // upload thumbnail (gambar).
        if($request->hasFile('thumbnail'))
        {
            $gambar = $request->file('thumbnail'); //mengabil data gambar
            $path = 'public/images/thumbnail-menu'; //tempat penyimpanan
            $ext = $gambar->getClientOriginalExtension(); //mengambil extension
            $nama = 'jenis-menu'.random_int('0000','9999').'.'.$ext; //memberikan nama pada file yang diupload
            $gambar->storeAs($path, $nama); //menyimpan gambar di local storage.
            $input['thumbnail'] = $nama; //menyimpan nama file ke database
        }
        // simpan semua data ke database
        Menu::create($input);
        // jika berhasil maka redirect ke halaman index
        return redirect()->route('menu.index')->with('success', 'Menu berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Menu::findOrFail($id);
        return view('menu.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // mencari data spesified
        $data = Menu::findOrFail($id);
        $input = $request->all();

        // validasi Input
        $request->validate([
            'nama_menu' => ['max:30', 'min:2', 'string'],
            'thumbnail' => ['max:10240'],
        ]);
        if($request->hasFile('thumbnail'))
        {
            $gambar = $request->file('thumbnail'); //mengabil data gambar
            $path = 'public/images/thumbnail-menu'; //tempat penyimpanan
            $ext = $gambar->getClientOriginalExtension(); //mengambil extension
            $nama = 'jenis-menu'.random_int('0000','9999').'.'.$ext; //memberikan nama pada file yang diupload
            $gambar->storeAs($path, $nama); //menyimpan gambar di local storage.
            $input['thumbnail'] = $nama; //menyimpan nama file ke database
        }
        $data->update($input);
        return redirect()->route('menu.index')->with('success', 'Data Berhasil Diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Menu::findOrFail($id);
        $data->delete();
        return redirect()->route('menu.index')->with('success', 'Data berhasil dihapus');
    }
}
