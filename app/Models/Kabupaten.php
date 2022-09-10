<?php

namespace App\Models;
use app\Models\Kecamatan;
use app\Models\Provinsi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    protected $table = "kabupaten";

    public function Kecamatan()
    {
        return $this->hasMany(Kecamatan::class, 'id_kecamatan');
    }

    public function Provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'id_provinsi');
    }
}