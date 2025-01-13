<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index()
    {
        return view('hello');
    }

    public function create()
    {
        return "ini form create contoh";
    }


}
