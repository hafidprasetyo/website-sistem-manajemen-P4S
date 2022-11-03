<?php

namespace App\Http\Controllers;

use App\Models\konsultan;
use Illuminate\Http\Request;

class KonsultanController extends Controller
{
    public function index() {
        $konsultans = Konsultan::all();
        return view ('konsultan.index', ['konsultans'=>$konsultans]);
    }

    public function index1() {
        $konsultans = Konsultan::all();
        return view('konsultann.index',['konsultans' => $konsultans]);
    }

    public function create() {
        return view('konsultan.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'image'              => 'required|file|image|max:2048',
        ]);
         
        $konsultans = new Konsultan();
        $konsultans->name = $validateData['name'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $konsultans->image = $namaFile;
        }
        $konsultans->save();
        $request->session()->flash('alert','Penambahan data berhasil');
        return redirect()->route('konsultan.index');

    }

    public function edit(Konsultan $konsultan) {
        return view('konsultan.edit',['konsultan' => $konsultan]);
    }

    public function update(Request $request, Konsultan $konsultan) {
        $validateData = $request->validate([
            'name'               => 'required|min:3|max:50',
            'image'              => 'required|file|image|max:2048',
        ]);
        $konsultan->name = $validateData['name'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $konsultan->image = $namaFile;
        }
        $konsultan->save();
        $request->session()->flash('alert','Perubahan data berhasil');
        return redirect()->route('konsultan.index');

    }

    public function destroy(Request $request, Konsultan $konsultan) {
        $konsultan->delete();
        $request->session()->flash('alert','Hapus data berhasil');
        return redirect()->route('konsultan.index');       
    }

    public function pemesanan(Konsultan $konsultan) {
        return view('konsultann.pemesanan', ['konsultan'=>$konsultan]);
    }
}
