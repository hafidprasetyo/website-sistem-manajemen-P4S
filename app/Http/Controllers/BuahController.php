<?php

namespace App\Http\Controllers;

use App\Models\buah;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    public function index() {
        $buahs = Buah::all();
        return view('buah.index',['buahs' => $buahs]);
    }

    public function index1() {
        $buahs = Buah::all();
        return view ('katalog.index', ['buahs'=>$buahs]);
    }
    
    public function create() {
        return view('buah.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $buahs = new Buah();
        $buahs->name = $validateData['name'];
        $buahs->description = $validateData['description'];
        $buahs->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $buahs->image = $namaFile;
        }
        $buahs->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('buah.index');

    }

    public function edit(Buah $buah) {
        return view('buah.edit',['buah' => $buah]);
    }

    public function update(Request $request, Buah $buah) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
        $buah->name = $validateData['name'];
        $buah->description = $validateData['description'];
        $buah->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $buah->image = $namaFile;
        }
        $buah->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('buah.index');

    }

    public function destroy(Request $request, Buah $buah) {
        $buah->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('buah.index');       
    }

    public function search(Request $request){
        $get_name = $request->search_name;
        $buahs = Buah::where('name','LIKE','%'.$get_name.'%')->get();
        return view('katalog.index',compact('buahs'));
    }

    public function pemesanan(Buah $buah) {
        return view('buah.pemesanan', ['buah'=>$buah]);
    }
}
