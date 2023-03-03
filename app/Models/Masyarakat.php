<?php

namespace App\Models;

use App\Models\Pengaduan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Masyarakat extends User
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'nik';
    protected $table = 'masyarakat';
    protected $fillable = ['nik', 'nama', 'username', 'password', 'telp'];

    public function pengaduans()
    {
        return $this->hasMany(Pengaduan::class, 'nik', 'nik');
    }
}
