<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index(){
        $tampildata = Region::all();
        return view('/master/region/index',['tampildata' => $tampildata, 'title' => 'Region | PT Nikel Indonesia']);
    }
    public function create(){

        return view('/master/region/create',['title' => 'Region | PT Nikel Indonesia']);
    }
    public function store(Request $request){
        $validatedDate = $request->validate([
            'nama_region' => 'required|string',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
        ]);
        Region::create([
            'nama_region' => $request->nama_region,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
        ]);
        return redirect('/region');
    }
    public function edit($id){
        $tampildata = Region::find($id);
        return view('/master/region/update',['tampildata' => $tampildata, 'title' => 'Region | PT Nikel Indonesia']);
    }
    public function update(Request $request, $id){
        $tampildata = Region::find($id);
        $tampildata->update([
            'nama_region' => $request->nama_region,
            'almat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
        ]);
        return redirect('/region');
    }
    public function delete(Request $request, $id){

        $tampildata=Region::find($id);
        $tampildata->delete();
        return redirect('/region');
    }

    
}