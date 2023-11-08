<?php

namespace App\Http\Controllers;

use App\Models\Kartu;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index', ['pelanggan' => $pelanggan]);
    }

    public function create()
    {
        //
        $kartu = Kartu::all();
        $gender = ['L','P'];
        return view('admin.pelanggan.create',compact('kartu','gender'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tambah data eloquent
        $pelanggan = new Pelanggan;
        $pelanggan->kode = $request->kode;
        $pelanggan->nama = $request->nama;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->email = $request->email;
        $pelanggan->kartu_id = $request->kartu_id;
        $pelanggan->save();
        return redirect('admin/pelanggan');
    }
}
