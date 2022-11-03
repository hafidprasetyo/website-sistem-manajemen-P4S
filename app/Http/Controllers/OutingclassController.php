<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutingclassController extends Controller
{
    public function index(){
        return view('outingclass.index');
    }
}
