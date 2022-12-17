<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokBarang extends Model
{
    use HasFactory;

    public function FunctionName()
    {
        return $this->hasMany(Jenis::class);
    }
}
