<?php

namespace App\Http\Controllers;

use App\Models\bibitmusiman;
use Illuminate\Http\Request;

class BibitmusimanController extends Controller
{
    public function index() {
        $bibitmusimen = Bibitmusiman::all();
        return view('bibitmusiman.index',['bibitmusimen' => $bibitmusimen]);
    }

    public function index1() {
        $bibitmusimen = Bibitmusiman::all();
        return view ('katalog1.index4', ['bibitmusimen'=>$bibitmusimen]);
    }

    public function create() {
        return view('bibitmusiman.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $bibitmusimen = new Bibitmusiman();
        $bibitmusimen->name = $validateData['name'];
        $bibitmusimen->description = $validateData['description'];
        $bibitmusimen->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $bibitmusimen->image = $namaFile;
        }
        $bibitmusimen->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('bibitmusiman.index');

    }

    public function edit(Bibitmusiman $bibitmusiman) {
        return view('bibitmusiman.edit',['bibitmusiman' => $bibitmusiman]);
    }

    public function update(Request $request, Bibitmusiman $bibitmusiman) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
        $bibitmusiman->name = $validateData['name'];
        $bibitmusiman->description = $validateData['description'];
        $bibitmusiman->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $bibitmusiman->image = $namaFile;
        }
        $bibitmusiman->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('bibitmusiman.index');

    }

    public function destroy(Request $request, Bibitmusiman $bibitmusiman) {
        $bibitmusiman->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('bibitmusiman.index');       
    }

    public function search(Request $request){
        $get_name = $request->search_name;
        $bibitmusimen = Bibitmusiman::where('name','LIKE','%'.$get_name.'%')->get();
        return view('katalog1.index4',compact('bibitmusimen'));
    }

    public function pemesanan(Bibitmusiman $bibitmusiman) {
        return view('bibitmusiman.pemesanan', ['bibitmusiman'=>$bibitmusiman]);
    }
}
