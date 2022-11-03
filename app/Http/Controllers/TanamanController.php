<?php

namespace App\Http\Controllers;

use App\Models\tanaman;
use Illuminate\Http\Request;

class TanamanController extends Controller
{
    public function index() {
        $tanamen = Tanaman::all();
        return view('tanaman.index',['tanamen' => $tanamen]);
    }

    public function index1() {
        $tanamen = Tanaman::all();
        return view ('katalog.index2', ['tanamen'=>$tanamen]);
    }

    public function create() {
        return view('tanaman.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $tanamen = new Tanaman();
        $tanamen->name = $validateData['name'];
        $tanamen->description = $validateData['description'];
        $tanamen->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $tanamen->image = $namaFile;
        }
        $tanamen->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('tanaman.index');

    }

    public function edit(Tanaman $tanaman) {
        return view('tanaman.edit',['tanaman' => $tanaman]);
    }

    public function update(Request $request, Tanaman $tanaman) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
        $tanaman->name = $validateData['name'];
        $tanaman->description = $validateData['description'];
        $tanaman->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $tanaman->image = $namaFile;
        }
        $tanaman->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('tanaman.index');

    }

    public function destroy(Request $request, Tanaman $tanaman) {
        $tanaman->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('tanaman.index');       
    }

    public function search(Request $request){
        $get_name = $request->search_name;
        $tanamen = Tanaman::where('name','LIKE','%'.$get_name.'%')->get();
        return view('katalog.index2',compact('tanamen'));
    }

    public function pemesanan(Tanaman $tanaman) {
        return view('tanaman.pemesanan', ['tanaman'=>$tanaman]);
    }
}
