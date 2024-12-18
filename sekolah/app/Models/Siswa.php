<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'alamat',
    ];
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
