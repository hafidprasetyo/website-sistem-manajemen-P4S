<?php

namespace App\Http\Controllers;

use App\Models\peternakan;
use Illuminate\Http\Request;

class PeternakanController extends Controller
{
    public function index() {
        $peternakans = Peternakan::all();
        return view('peternakan.index',['peternakans' => $peternakans]);
    }

    public function index1() {
        $peternakans = Peternakan::all();
        return view ('katalog1.index', ['peternakans'=>$peternakans]);
    }

    public function create() {
        return view('peternakan.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $peternakans = new Peternakan();
        $peternakans->name = $validateData['name'];
        $peternakans->description = $validateData['description'];
        $peternakans->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $peternakans->image = $namaFile;
        }
        $peternakans->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('peternakan.index');

    }

    public function edit(Peternakan $peternakan) {
        return view('peternakan.edit',['peternakan' => $peternakan]);
    }

    public function update(Request $request, Peternakan $peternakan) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
        $peternakan->name = $validateData['name'];
        $peternakan->description = $validateData['description'];
        $peternakan->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $peternakan->image = $namaFile;
        }
        $peternakan->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('peternakan.index');

    }

    public function destroy(Request $request, Peternakan $peternakan) {
        $peternakan->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('peternakan.index');       
    }

    public function search(Request $request){
        $get_name = $request->search_name;
        $peternakans = Peternakan::where('name','LIKE','%'.$get_name.'%')->get();
        return view('katalog1.index',compact('peternakans'));
    }

    public function pemesanan(Peternakan $peternakan) {
        return view('peternakan.pemesanan', ['peternakan'=>$peternakan]);
    }
}
