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

        return view ('admin.jenis.create');
    }

    public function store(Request $request){

        $jenis_produk = new Jenis_produk;
        $jenis_produk->nama = $request->nama;
        $jenis_produk->save();
        return redirect('admin/jenis_produk');

    }

    public function show($id)
    {
        //
    }

    public function edit($id){

        // $data = Jenis_produk::where('id', $id)->get();
        // return view('admin.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
