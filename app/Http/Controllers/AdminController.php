<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        return view('Admin.login',[
            'title' => 'login',
            'active' => 'login'
        ]);
        }
    
        public function store(Request $request){
            $validateData = $request->validate([
                'username' => 'required|min:3|max:50',
                'password' => 'required',
            ]);
    
        $admins = new Admin();
        $admins->username = $validateData['username'];
        $admins->password = $validateData['password'];
        $admins->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('Admin.index');
        }
    
        public function authenticate(Request $request)
        {
        $validateData = $request -> validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $result = Admin::where('username', '=', $validateData['username'])->first();
            if ($result) {
                if (($request -> password == $result -> password)) {
                    session(['username' => $request -> username]);
                    return redirect('/dashboardadmin');
                } else {
                    return back() -> withInput() -> with ('alert', "Username atau password salah") ;
                    }
                } else {
                return back() -> withInput() -> with ('alert', "Username atau password salah") ;
                }
    
        }
    
        public function logout(request $request) {
            session() -> forget('username');
            return redirect('/loginadmin') -> with ('alert', 'Logout berhasil') ;
        }
    
        public function create(){
            return view('admin.create');
        }
    
        public function index1(){
        $admins = Admin::all();
        return view('Admin.index',['admins' => $admins]);
        }
    
        public function destroy(Request $request, Admin $admin)
        {
        $admin->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('Admin.index');
        }
}
