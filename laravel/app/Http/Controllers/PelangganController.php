<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index', ['pelanggan' => $pelanggan]);
    }
}
