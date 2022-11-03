<?php

namespace App\Http\Controllers;

use App\Models\benih;
use Illuminate\Http\Request;

class BenihController extends Controller
{
    public function index() {
        $benihs = Benih::all();
        return view('benih.index',['benihs' => $benihs]);
    }

    public function index1() {
        $benihs = Benih::all();
        return view ('katalog1.index3', ['benihs'=>$benihs]);
    }

    public function create() {
        return view('benih.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $benihs = new Benih();
        $benihs->name = $validateData['name'];
        $benihs->description = $validateData['description'];
        $benihs->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $benihs->image = $namaFile;
        }
        $benihs->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('benih.index');

    }

    public function edit(Benih $benih) {
        return view('benih.edit',['benih' => $benih]);
    }

    public function update(Request $request, Benih $benih) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
        $benih->name = $validateData['name'];
        $benih->description = $validateData['description'];
        $benih->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $benih->image = $namaFile;
        }
        $benih->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('benih.index');

    }

    public function destroy(Request $request, Benih $benih) {
        $benih->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('benih.index');       
    }

    public function search(Request $request){
        $get_name = $request->search_name;
        $benihs = Benih::where('name','LIKE','%'.$get_name.'%')->get();
        return view('katalog1.index3',compact('benihs'));
    }

    public function pemesanan(Benih $benih) {
        return view('benih.pemesanan', ['benih'=>$benih]);
    }
}
