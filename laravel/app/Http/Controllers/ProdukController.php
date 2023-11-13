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

        $request->validate([
            'kode' => 'required |unique:produk|max:10',
            'nama' => 'required |max:45',
            'harga_beli' => 'required |numeric',
            'harga_jual' => 'required |numeric',
            'stok' => 'required |numeric',
            'min_stok' => 'required |numeric',
            'foto' => 'nullable|image|mimes:jpg,jpeg,gif,png,svg|max:2084',
            'deskripsi' => 'nullable|string|min:10',
            'jenis_produk_id' => 'required|integer',

        ],
        [
            'kode.max' => 'kode maximal 10 karakter',
            'kode.required' => 'kode Wajib Diisi',
            'kode.unique' => 'kode sudah terisi silahkan tambahkan kode lain',
            'nama.required' => 'Nama Wajib Diisi',
            'nama.max' => 'Nama Maksimal 25 karakter',
            'harga_beli.required' => 'Harga Beli Wajib Diisi',
            'harga_beli.numeric' => 'Wajib diisi angka',
            'harga_jual.required' => 'Harga Jual Wajib Diisi',
            'harga_jual.numeric' => 'Wajib diisi angka',
            'stok.required' => 'Stok Wajib Diisi',
            'min_stok.required' => 'Minimal Stok Wajib Diisi',
            'foto.max' => 'Maksimal 2 MB',
            'foto.image' => 'File ekstensi harus jpg, jpeg, gif, png, svg',
        ]
    );

        //proses upload foto
        if (!empty($request->foto)){
            $fileName = 'foto-'.uniqid().'.'.$request->foto->extension();
            $request->foto->move(public_path('admin/img'), $fileName);
        }else{
            $fileName = '';
        }
        //tambah data menggunakan query builder
        DB::table('produk')->insert([
            'kode'=>$request->kode,
            'nama'=>$request->nama,
            'harga_beli'=>$request->harga_beli,
            'harga_jual'=>$request->harga_jual,
            'stok'=>$request->stok,
            'min_stok'=>$request->min_stok,
            'foto'=>$fileName,
            'deskripsi'=>$request->deskripsi,
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

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode' => 'required |unique:produk|max:10',
            'nama' => 'required |max:45',
            'harga_beli' => 'required |numeric',
            'harga_jual' => 'required |numeric',
            'stok' => 'required |numeric',
            'min_stok' => 'required |numeric',
            'foto' => 'nullable|image|mimes:jpg,jpeg,gif,png,svg,webp|max:2084',
            'deskripsi' => 'nullable|string|min:10',
            'jenis_produk_id' => 'required|integer',

        ],
        [
            'kode.required' => 'kode Wajib Diisi',
            'nama.required' => 'Nama Wajib Diisi',
            'harga_beli.required' => 'Harga Beli Wajib Diisi',
            'harga_jual.required' => 'Harga Jual Wajib Diisi',
            'stok.required' => 'Stok Wajib Diisi',
            'min_stok.required' => 'Minimal Stok Wajib Diisi',
            'foto.max' => 'Maksimal 2 MB',
            'foto.image' => 'File ekstensi harus jpg, jpeg, gif, png, svg, webp',
        ]
    );

    $foto = DB::table('produk')->select('foto')->where('id', $request->id)->get();
    foreach ($foto as $f){
        $namaFileFotoLama = $f->foto;
    }
    if(!empty($request->foto)){
        //jika ada foto lama maka hapus fotonya 
    if(!empty($namaFileFotoLama->foto)) unlink('admin/img'.$namaFileFotoLama->foto);
    //proses ganti foto
    $fileName = 'foto-'.$request->id . '.' . $request->foto->extension();
    $request->foto->move(public_path('admin/img'), $fileName);
    } else {
        $fileName = '';
    }
    DB::table('produk')->where('id',$request->id)->update([
        'kode'=>$request->kode,
        'nama'=>$request->nama,
        'harga_beli'=>$request->harga_beli,
        'harga_jual'=>$request->harga_jual,
        'stok'=>$request->stok,
        'min_stok'=>$request->min_stok,
        'foto'=>$fileName,
        'deskripsi'=>$request->deskripsi,
        'jenis_produk_id'=>$request->jenis_produk_id,
    ]);
    
    return redirect('admin/produk');
    }

    public function destroy(string $id){
        
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin/produk');
    }
}


