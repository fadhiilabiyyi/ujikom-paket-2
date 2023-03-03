<?php

namespace App\Models;

use App\Models\Tanggapan;
use App\Models\Masyarakat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pengaduan';
    protected $table = 'pengaduan';
    protected $guarded = ['id_pengaduan'];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'nik', 'nik');
    }

    public function tanggapan()
    {
        return $this->hasOne(Tanggapan::class, 'id_tanggapan');
    }
}
