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
}
