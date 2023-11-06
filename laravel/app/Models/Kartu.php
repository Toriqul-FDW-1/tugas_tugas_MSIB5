<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;
    //mapping table
    protected $table = 'kartu';
    //mapping kolom atau field
    protected $fillabel = [
        'kode','nama','diskon','iuran'
    ];
    
    //relasi antar table
    public function pelanggan()
    {
        return $this->hasMany(Pelanggan::class);
    }
}
