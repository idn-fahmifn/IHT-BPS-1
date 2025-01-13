<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ContohController;
use App\Http\Middleware\AgeMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// mendeklarasikan route sederhana 

// method get. 
Route::get('hello', function () {
    // menampilkan nilai string.
    // return "Hello world, saya sedang belajar Laravel.";
    return view('hello');
});

// Method get dengan parameter 
Route::get('nama/{parameter}', function ($nama) {
    return "Hallo, Nama saya adalah : " . $nama;
});

// route method Get dan diberi name.
Route::get('dashboard', function () {
    return "Ini adalah halaman Dashboard.";
})->name('halaman-utama');

// Route method post
Route::post('hello', function(Request $request){
    return $request;
})->name('kirim');


// Group 
Route::prefix('bps')->group(function(){
    // url : bps/it
    Route::get('it', function(){
        return "halaman IT";
    })->name('it-area');

    // url : bps/it
    Route::get('finance', function(){
        return "halaman Finance";
    })->name('fincance-area');

    // url : bps/it
    Route::get('ga', function(){
        return "halaman GA";
    })->name('ga-area');

});


// study case middlware

// membuat halaman form untuk input umur.
Route::get('form-umur', function(){
    return view('umur.form');
})->name('form');

Route::post('proses', function(Request $request){
    $request->validate([
        'umur' => 'integer|min:1|max:90|required'
    ]);

    $request->session()->put('umur', $request->umur);

    return redirect()->route('sukses');
})->name('proses-umur');

// halaman yang bisa diakses oleh usia >=18 tahun.
Route::get('sukses', function(){
    return "Hallo, anda bisa mengakses halaman sukses.";
})->name('sukses')->middleware(AgeMiddleware::class);


Route::get('contoh', [ContohController::class, 'index'])->name('contoh.index');
Route::get('form-contoh', [ContohController::class, 'create'])->name('contoh.create');

Route::resource('barang', BarangController::class);




