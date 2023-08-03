<?php

namespace App\Http\Controllers;

use App\Models\Blok;
use Illuminate\Http\Request;


class BlokController extends Controller
{
    public function index(){
        $tampildata = Blok::all();
        return view('/master/blok/index',['tampildata' => $tampildata, 'title' => 'Blok | PT Nikel Indonesia']);
    }
    public function create(){

        return view('/master/blok/create',['title' => 'Blok | PT Nikel Indonesia']);
    }

    public function store(Request $request){

        $validatedDate = $request->validate([

            'nama_blok' => 'required|string',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
        ]);
        Blok::create([
            'nama_blok' => $request->nama_blok,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
        ]);
        return redirect('/blok');

    }
    public function edit($id){
        $tampildata = Blok::find($id);
        return view('/master/blok/update',['tampildata' => $tampildata, 'title' => 'Blok | PT Nikel Indonesia']);
    }
    public function update(Request $request, $id){

        $tampildata=Blok::find($id);
        $tampildata->update([
            'nama_blok' => $request->nama_blok,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
        ]);
        return redirect('/blok');
    }
    public function delete(Request $request, $id){

        $tampildata=Blok::find($id);
        $tampildata->delete();
        return redirect('/blok');
    }

}
