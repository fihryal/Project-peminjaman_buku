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
        return redirect('/perpus');
    }

}
