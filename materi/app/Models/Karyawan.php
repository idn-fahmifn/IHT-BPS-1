<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    
    use HasFactory;

    protected $table = 'karyawan';
    protected $fillable = [
        // mendefinisikan entitas atau kolom yang ada pada tabel
        'nama', 'nik', 'umur', 'alamat', 'jabatan'
    ];



}
