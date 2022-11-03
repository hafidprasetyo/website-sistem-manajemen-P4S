<?php

namespace App\Http\Controllers;

use App\Models\sayuran;
use Illuminate\Http\Request;

class SayuranController extends Controller
{
    public function index() {
        $sayurans = Sayuran::all();
        return view('sayuran.index',['sayurans' => $sayurans]);
    }

    public function index1() {
        $sayurans = Sayuran::all();
        return view ('katalog.index1', ['sayurans'=>$sayurans]);
    }

    public function create() {
        return view('sayuran.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $sayurans = new Sayuran();
        $sayurans->name = $validateData['name'];
        $sayurans->description = $validateData['description'];
        $sayurans->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $sayurans->image = $namaFile;
        }
        $sayurans->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('sayuran.index');

    }

    public function edit(Sayuran $sayuran) {
        return view('sayuran.edit',['sayuran' => $sayuran]);
    }

    public function update(Request $request, Sayuran $sayuran) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
        $sayuran->name = $validateData['name'];
        $sayuran->description = $validateData['description'];
        $sayuran->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $sayuran->image = $namaFile;
        }
        $sayuran->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('sayuran.index');

    }

    public function destroy(Request $request, Sayuran $sayuran) {
        $sayuran->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('sayuran.index');       
    }

    public function search(Request $request){
        $get_name = $request->search_name;
        $sayurans = Sayuran::where('name','LIKE','%'.$get_name.'%')->get();
        return view('katalog.index1',compact('sayurans'));
    }

    public function pemesanan(Sayuran $sayuran) {
        return view('sayuran.pemesanan', ['sayuran'=>$sayuran]);
    }
}
