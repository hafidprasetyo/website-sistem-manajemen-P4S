<?php

namespace App\Http\Controllers;

use App\Models\perikanan;
use Illuminate\Http\Request;

class PerikananController extends Controller
{
    public function index() {
        $perikanans = Perikanan::all();
        return view('perikanan.index',['perikanans' => $perikanans]);
    }

    public function index1() {
        $perikanans = Perikanan::all();
        return view ('katalog1.index1', ['perikanans'=>$perikanans]);
    }

    public function create() {
        return view('perikanan.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $perikanans = new Perikanan();
        $perikanans->name = $validateData['name'];
        $perikanans->description = $validateData['description'];
        $perikanans->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $perikanans->image = $namaFile;
        }
        $perikanans->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('perikanan.index');

    }

    public function edit(Perikanan $perikanan) {
        return view('perikanan.edit',['perikanan' => $perikanan]);
    }

    public function update(Request $request, Perikanan $perikanan) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
        $perikanan->name = $validateData['name'];
        $perikanan->description = $validateData['description'];
        $perikanan->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $perikanan->image = $namaFile;
        }
        $perikanan->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('perikanan.index');

    }

    public function destroy(Request $request, Perikanan $perikanan) {
        $perikanan->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('perikanan.index');       
    }

    public function search(Request $request){
        $get_name = $request->search_name;
        $perikanans = Perikanan::where('name','LIKE','%'.$get_name.'%')->get();
        return view('katalog1.index1',compact('perikanans'));
    }

    public function pemesanan(Perikanan $perikanan) {
        return view('perikanan.pemesanan', ['perikanan'=>$perikanan]);
    }
}
