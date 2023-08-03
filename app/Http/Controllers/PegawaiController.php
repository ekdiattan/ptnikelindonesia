<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $tampildata = Pegawai::all();
        return view('/master/pegawai/index',['tampildata'=> $tampildata ,'title' => 'Pegawai | PT Nikel Indonesia']);
    }
    public function create(){

        return view('/master/pegawai/create',['title' => 'Region | PT Nikel Indonesia']);
    }
    public function store(Request $request){

        $validatedDate = $request->validate([
            'nama_pegawai' => 'required|string',
            'tanggallahir' => 'required|string',
            'umur' => 'required|string',
            'jeniskelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_pegawai' => 'required|string',
            'jabatan' => 'required|string',
        ]);
        Pegawai::create([
            'nama_pegawai' => $request->nama_pegawai,
            'tanggallahir' => $request->tanggallahir,
            'umur' => $request->umur,
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
            'no_pegawai' => $request->no_pegawai,
            'jabatan' => $request->jabatan,
        ]);
        return redirect('/pegawai');
    }
    public function edit($id){
        $tampildata = Pegawai::find($id);
        return view('/master/pegawai/update',['tampildata' => $tampildata, 'title' => 'Region | PT Nikel Indonesia']);
    }
    public function update(Request $request, $id){
        $tampildata = Pegawai::find($id);
        $tampildata->update([
            'nama_pegawai' => $request->nama_pegawai,
            'tanggallahir' => $request->tanggallahir,
            'umur' => $request->umur,
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
            'no_pegawai' => $request->no_pegawai,
            'jabatan' => $request->jabatan,
        ]);
        return redirect('/pegawai');
    }
    public function delete(Request $request, $id){

        $tampildata=Pegawai::find($id);
        $tampildata->delete();
        return redirect('/pegawai');
    }
}
