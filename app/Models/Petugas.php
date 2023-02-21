<?php

namespace App\Models;

use App\Models\Tanggapan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_petugas';
    protected $table = 'petugas';
    protected $fillable = ['id_petugas', 'nama_petugas', 'username', 'password', 'telp', 'level'];

    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class);
    }
}
