<?php
namespace App\Models;
use app\Models\Kecamatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = "desa";
    
    public function Kecamatan()
    {
        return $this->hasMany(Kecamatan::class, 'id_kecamatan');
    }
}