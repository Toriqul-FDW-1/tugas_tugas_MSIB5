<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Jenis_produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::join('jenis_produk', 'jenis_produk_id', '=', 'jenis_produk.id')
        ->select('produk.*', 'jenis_produk.nama as jenis')
        ->get();
        return view ('admin.produk.index', compact('produk'));
    }

    
    public function create()
    {
        //tambah data
        $jenis_produk = DB::table('jenis_produk')->get();
        return view('admin.produk.create', compact('jenis_produk'));
    }


    public function store(Request $request)
    {
        //tambah data menggunakan query builder
        DB::table('produk')->insert([
            'kode'=>$request->kode,
            'nama'=>$request->nama,
            'harga_beli'=>$request->harga_beli,
            'harga_jual'=>$request->harga_jual,
            'stok'=>$request->stok,
            'min_stok'=>$request->min_stok,
            'jenis_produk_id'=>$request->jenis_produk_id,
        ]);
        return redirect('admin/produk');
    }

    public function show(string $id){
        $produk = Produk::join('jenis_produk', 'jenis_produk_id', '=', 'jenis_produk.id')
        ->select('produk.*', 'jenis_produk.nama as jenis')
        ->where('produk.id', $id)
        ->get();
        return view ('admin.produk.detail', compact('produk'));
    }

    public function edit(string $id){
        $jenis_produk = DB::table('jenis_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.produk.edit', compact('produk', 'jenis_produk'));
    }

    public function update(Request $request, string $id){
    DB::table('produk')->where('id',$request->id)->update([
        'kode'=>$request->kode,
        'nama'=>$request->nama,
        'harga_beli'=>$request->harga_beli,
        'harga_jual'=>$request->harga_jual,
        'stok'=>$request->stok,
        'min_stok'=>$request->min_stok,
        'jenis_produk_id'=>$request->jenis_produk_id,
    ]);
    
    return redirect('admin/produk');
    }

    public function destroy(string $id){
        
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin/produk');
    }
}


