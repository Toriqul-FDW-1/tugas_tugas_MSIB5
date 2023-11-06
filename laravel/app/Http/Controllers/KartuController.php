<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kartu;
use Illuminate\Support\Facades\DB;
class KartuController extends Controller
{
    public function index(){
        
        $kartu = DB::table('kartu')->get();
        return view ('admin.kartu.index', compact('kartu'));

    }
}
