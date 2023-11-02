<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagenotController extends Controller
{
    public function index() {
        return view('admin.pagenot'); //mengarahkan ke file dashboard yang ada di dalam folder admin
    }
}
