<?php

namespace App\Models;

use App\Models\Tanggapan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends User
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'id_petugas';
    protected $table = 'petugas';
    protected $fillable = ['id_petugas', 'nama_petugas', 'username', 'password', 'telp', 'level'];

    public function tanggapans()
    {
        return $this->hasMany(Tanggapan::class);
    }
}
