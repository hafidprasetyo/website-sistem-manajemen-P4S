<?php

namespace App\Http\Controllers;

use App\Models\bibittahunan;
use Illuminate\Http\Request;

class BibittahunanController extends Controller
{
    public function index() {
        $bibittahunans = Bibittahunan::all();
        return view('bibittahunan.index',['bibittahunans' => $bibittahunans]);
    }

    public function index1() {
        $bibittahunans = Bibittahunan::all();
        return view ('katalog1.index5', ['bibittahunans'=>$bibittahunans]);
    }

    public function create() {
        return view('bibittahunan.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $bibittahunans = new Bibittahunan();
        $bibittahunans->name = $validateData['name'];
        $bibittahunans->description = $validateData['description'];
        $bibittahunans->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $bibittahunans->image = $namaFile;
        }
        $bibittahunans->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('bibittahunan.index');

    }

    public function edit(Bibittahunan $bibittahunan) {
        return view('bibittahunan.edit',['bibittahunan' => $bibittahunan]);
    }

    public function update(Request $request, Bibittahunan $bibittahunan) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
        $bibittahunan->name = $validateData['name'];
        $bibittahunan->description = $validateData['description'];
        $bibittahunan->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $bibittahunan->image = $namaFile;
        }
        $bibittahunan->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('bibittahunan.index');

    }

    public function destroy(Request $request, Bibittahunan $bibittahunan) {
        $bibittahunan->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('bibittahunan.index');       
    }

    public function search(Request $request){
        $get_name = $request->search_name;
        $bibittahunans = Bibittahunan::where('name','LIKE','%'.$get_name.'%')->get();
        return view('katalog1.index5',compact('bibittahunans'));
    }

    public function pemesanan(Bibittahunan $bibittahunan) {
        return view('bibittahunan.pemesanan', ['bibittahunan'=>$bibittahunan]);
    }
}
