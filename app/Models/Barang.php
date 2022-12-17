<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = '';



    public function ruangan()
    {
        return $this->hasMany(Ruangan::class);
    }

    public function cabang()
    {
        return $this->hasMany(Cabang::class);
    }
    
    public function vendor()
    {
        return $this->hasMany(vendor::class);
    }

    public function jenis()
    {
        return $this->hasMany(KelompokBarang::class);
    }
}
