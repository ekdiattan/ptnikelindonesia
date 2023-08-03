<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
// use Illuminate\Auth\AuthenticationException;


class UserController extends Controller
{
    public function show(){
        $tampildata = User::all();
        return view('/pengguna/index',['tampildata'=> $tampildata,'title' => 'Pengguna | PT Nikel Indonesia']);
    }
    public function create(){
        return view('/pengguna/create',['title' => 'Pengguna | PT Nikel Indonesia']);
    }
    public function store(Request $request){
        User::create([
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'no_pegawai' => $request->no_pegawai,
            'jabatan' => $request->jabatan,
            'hak_akses' => $request->hak_akses,
            'remember_token' => Str::random(60),
        ]);
        return redirect('/pengguna');
    }
    public function edit($id){
        $tampildata = User::find($id); 
        return view('/pengguna/update',['tampildata' => $tampildata, 'title' => 'Pengguna | PT Nikel Indonesia']);
    }
    public function update(Request $request, $id){

        $tampildata= User::find($id);
        $tampildata->update([

            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'no_pegawai' => $request->no_pegawai,
            'jabatan' => $request->jabatan,
            'hak_akses' => $request->hak_akses,
            'remember_token' => Str::random(60),
        ]);
        return redirect('/pengguna');
    }
    public function delete(Request $request, $id){

        $tampildata=User::find($id);
        $tampildata->delete();
        return redirect('/pengguna');
    }
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('no_pegawai', 'password'))) {
            return redirect('/dashboard');
        }
        return back();
    }
    public function logout()
    {
       Auth::logout();
       return redirect('/');
    }
   
}
