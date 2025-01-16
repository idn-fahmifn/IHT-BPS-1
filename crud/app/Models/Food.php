<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'id_menu',
        'nama_makanan',
        'harga',
        'deskripsi',
        'gambar'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
