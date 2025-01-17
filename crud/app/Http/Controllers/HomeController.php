<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = Food::all();
        return view('dashboard', compact('data'));
    }
}
