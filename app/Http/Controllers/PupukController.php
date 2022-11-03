<?php

namespace App\Http\Controllers;

use App\Models\pupuk;
use Illuminate\Http\Request;

class PupukController extends Controller
{
    public function index() {
        $pupuks = Pupuk::all();
        return view('pupuk.index',['pupuks' => $pupuks]);
    }

    public function create() {
        return view('pupuk.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'luaslahan'          => 'required',
            'jumlah'             => 'required',
        ]);
         
        $pupuks = new Pupuk();
        $pupuks->name = $validateData['name'];
        $pupuks->luaslahan = $validateData['luaslahan'];
        $pupuks->jumlah = $validateData['jumlah'];
        $pupuks->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('pupuk.index');

    }

    public function edit(Pupuk $pupuk) {
        return view('pupuk.edit',['pupuk' => $pupuk]);
    }

    public function update(Request $request, Pupuk $pupuk) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'luaslahan'          => 'required',
            'jumlah'             => 'required',
        ]);
        $pupuk->name = $validateData['name'];
        $pupuk->luaslahan = $validateData['luaslahan'];
        $pupuk->jumlah = $validateData['jumlah'];
        $pupuk->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('pupuk.index');

    }

    public function destroy(Request $request, Pupuk $pupuk) {
        $pupuk->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('pupuk.index');       
    }

}
