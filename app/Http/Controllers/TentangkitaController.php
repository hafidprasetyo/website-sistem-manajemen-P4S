<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangkitaController extends Controller
{
    public function index(){
        return view('tentangkita.index');
    }
}
