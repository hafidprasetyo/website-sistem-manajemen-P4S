<?php

namespace App\Http\Controllers;

use App\Models\saprodi;
use Illuminate\Http\Request;

class SaprodiController extends Controller
{
    public function index() {
        $saprodis = Saprodi::all();
        return view('saprodi.index',['saprodis' => $saprodis]);
    }

    public function index1() {
        $saprodis = Saprodi::all();
        return view ('katalog1.index2', ['saprodis'=>$saprodis]);
    }

    public function create() {
        return view('saprodi.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $saprodis = new Saprodi();
        $saprodis->name = $validateData['name'];
        $saprodis->description = $validateData['description'];
        $saprodis->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $saprodis->image = $namaFile;
        }
        $saprodis->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('saprodi.index');

    }

    public function edit(Saprodi $saprodi) {
        return view('saprodi.edit',['saprodi' => $saprodi]);
    }

    public function update(Request $request, Saprodi $saprodi) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'description'        => 'required',
            'stok'               => 'required',
            'image'              => 'required|file|image|max:2048',
        ]);
        $saprodi->name = $validateData['name'];
        $saprodi->description = $validateData['description'];
        $saprodi->stok = $validateData['stok'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $saprodi->image = $namaFile;
        }
        $saprodi->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('saprodi.index');

    }

    public function destroy(Request $request, Saprodi $saprodi) {
        $saprodi->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('saprodi.index');       
    }

    public function search(Request $request){
        $get_name = $request->search_name;
        $saprodis = Saprodi::where('name','LIKE','%'.$get_name.'%')->get();
        return view('katalog1.index2',compact('saprodis'));
    }
}
