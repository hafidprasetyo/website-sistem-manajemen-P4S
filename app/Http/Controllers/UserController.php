<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\buah;
use App\Models\sayuran;
use App\Models\perikanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index',['users' => $users]);
    }
}
