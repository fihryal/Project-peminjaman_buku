<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    public function __construct()
    {
        $this -> middleware('auth');
    }

    public function index(){

        $data = buku::all();
        return view ('perpus', compact('data'));
    }

    public function create()
    {
        return view ('tambahdata');
    }

    public function insertdata(Request $request)
    {
        $request->validate([
            'foto' => 'required|mimes:jpg,png,jpng',
            'nama_buku' => 'required',
            'komentar' => 'required',
        ],
        [
            'foto.required' => 'Kalian harus memasukkan file!',
            'nama_buku.required' => 'Kalian harus memasukkan nama buku!',
            'komentar.required' => 'Kalian marus memiliki komentar!'
        ]);

        $data = buku::create($request->all());
        if ($request -> hasFile('foto')) {
            $request -> file('foto')->move('fotobuku/',$request->file('foto')->getClientOriginalName());
            $data -> foto = $request -> file('foto')->getClientOriginalName();
            $data->save(); 
        }
        return redirect('/perpus')->with('success','Data Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $data = buku::find($id);

        return view ('tampilkandata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $request->validate([
            'foto' => 'required|mimes:jpg,png,jpng',
            'nama_buku' => 'required',
            'komentar' => 'required',
        ],
        [
            'foto.required' => 'Kalian harus memasukkan file!',
            'nama_buku.required' => 'Kalian harus memasukkan nama buku!',
            'komentar.required' => 'Kalian marus memiliki komentar!'
        ]);

        $data = buku::find($id);
        $data->update($request->all());
        if ($request -> hasFile('foto')) {
            $request -> file('foto')->move('fotobuku/',$request->file('foto')->getClientOriginalName());
            $data -> foto = $request -> file('foto')->getClientOriginalName();
            $data->save(); 
        }

        return redirect('/perpus')->with('success','Data Berhasil Di Update');
    }

    public function delete($id)
    {
        $data = buku::find($id);
        $data->delete();

        return redirect('/perpus')->with('success','Data Berhasil Di Hapus');
    }

}
