<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nama_menu', 'thumbnail'];


    public function foods()
    {
        return $this->hasMany(Food::class, 'id_menu');
    }

    public function delete()
    {
        $this->foods()->delete();
        return parent::delete();
    }
}
