<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    //mapping table
    protected $table = 'pelanggan';
    //mapping kolom atau field
    protected $fillabel = [
        'kode','nama','jk','tmp_lahir','tgl_lahir','email','kartu_id'
    ];
    public $timestamps = false;
    
    //relasi antar table
    public function kartu()
    {
        return $this->belongsTo(Kartu::class);
    }
}
