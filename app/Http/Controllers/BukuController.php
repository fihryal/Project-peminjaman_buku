<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
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
        buku::create($request->all());
        return redirect('/perpus')->with('success','Data Berhasil DiTambahkan');
    }

    public function edit($id)
    {
        $data = buku::find($id);

        return view ('tampilkandata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = buku::find($id);
        $data->update($request->all());

        return redirect('/perpus')->with('success','Data Berhasil DiUpdate');
    }

    public function delete($id)
    {
        $data = buku::find($id);
        $data->delete();

        return redirect('/perpus')->with('success','Data Berhasil DiHapus');
    }

}
