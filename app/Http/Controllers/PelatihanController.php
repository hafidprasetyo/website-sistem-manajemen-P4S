<?php

namespace App\Http\Controllers;

use App\Models\pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index() {
        $pelatihans = Pelatihan::all();
        return view ('pelatihan.index', ['pelatihans'=>$pelatihans]);
    }

    public function index1() {
        $pelatihans = Pelatihan::all();
        return view('pelatihann.index',['pelatihans' => $pelatihans]);
    }

    public function create() {
        return view('pelatihan.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $pelatihans = new Pelatihan();
        $pelatihans->name = $validateData['name'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $pelatihans->image = $namaFile;
        }
        $pelatihans->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('pelatihan.index');

    }

    public function edit(Pelatihan $pelatihan) {
        return view('pelatihan.edit',['pelatihan' => $pelatihan]);
    }

    public function update(Request $request, Pelatihan $pelatihan) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'image'              => 'required|file|image|max:2048',
        ]);
        $pelatihan->name = $validateData['name'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $pelatihan->image = $namaFile;
        }
        $pelatihan->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('pelatihan.index');

    }

    public function destroy(Request $request, Pelatihan $pelatihan) {
        $pelatihan->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('pelatihan.index');       
    }

    public function pemesanan(Pelatihan $pelatihan) {
        return view('pelatihann.pemesanan', ['pelatihan'=>$pelatihan]);
    }
}
