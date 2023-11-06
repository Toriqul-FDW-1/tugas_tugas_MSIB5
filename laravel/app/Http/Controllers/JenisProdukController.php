<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_produk;

class JenisProdukController extends Controller
{
    public function index(){

        $jenis_produk = Jenis_produk::all();
        return view('admin.jenis.index', compact('jenis_produk'));

    }

    public function create(){
        
    }
}
