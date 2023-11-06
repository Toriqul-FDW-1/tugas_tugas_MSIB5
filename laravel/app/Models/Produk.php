<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    //mapping table
    protected $table = 'produk';
    //mapping kolom atau field
    protected $fillabel = [
        'kode','nama','harga_beli','harga_jual','stok','min_stok','jenis_produk_id'
    ];
    
    //relasi antar table one to many yang berhubungan dengan produk
    public function jenis_produk()
    {
        return $this->belongsTo(Jenis_produk::class);
    }
}
