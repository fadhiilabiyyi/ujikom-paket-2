<?php

namespace App\Models;

use App\Models\Petugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanggapan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tanggapan';
    protected $table = 'tanggapan';
    protected $fillable = ['id_tanggapan', 'id_pengaduan', 'tanggal_tanggapan', 'tanggapan', 'id_petugas'];

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'id_pengaduan', 'id_pengaduan');
    }
}
