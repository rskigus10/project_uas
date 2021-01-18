<?php

namespace App\Models;

use App\Models\Kecamatan;
use App\Models\Provinsi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'wilayah_kabupaten';

    function kecamatan(){
        return $this->hasMany(Kecamatan::class, 'kabupaten_id');
    }

    function provinsi(){
        return $this->belongsTo(provinsi::class, 'provinsi_id');
    }
}
