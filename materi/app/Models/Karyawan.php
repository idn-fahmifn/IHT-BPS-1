<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    
    protected $table = 'users'; //mendefinisikan nama table yang terdapat di database.

    
    protected $fillable = [
        // mendefinisikan entitas atau kolom yang ada pada tabel
        'name', 'email', 'password'
    ];



}
