<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;


class KendaraanController extends Controller
{
    public function index(){
        $kendaraan = Kendaraan::all();
        return view('/master/kendaraan/index',['kendaraan' => $kendaraan, 'title' => 'Kendaraan | PT Nikel Indonesia']);
    }
    public function create(){

        return view('/master/kendaraan/create',['title' => 'Kendaraan | PT Nikel Indonesia']);
    }
    public function store(Request $request){

        $validatedDate = $request->validate([
            'nama_merk' => 'required|string',
            'no_kendaraan' => 'required|string',
            'jenis_kendaraan' => 'required|string',
        ]);
        Kendaraan::create([
            'nama_merk' => $request->nama_merk,
            'no_kendaraan' => $request->no_kendaraan,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'nama_vendor' => $request->nama_vendor,
        ]);
        return redirect('/kendaraan');
    }
    public function edit($id){
        $kendaraan = Kendaraan::find($id); 
        return view('/master/kendaraan/update',['kendaraan' => $kendaraan, 'title' => 'Blok | PT Nikel Indonesia']);
    }
    public function update(Request $request, $id){

        $kendaraan=Kendaraan::find($id);
        $kendaraan->update([
            'nama_merk' => $request->nama_merk,
            'no_kendaraan' => $request->no_kendaraan,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'nama_vendor' => $request->nama_vendor,
        ]);
        return redirect('/kendaraan');
    }
    public function delete(Request $request, $id){

        $kendaraan=Kendaraan::find($id);
        $kendaraan->delete();
        return redirect('/kendaraan');
    }
}
