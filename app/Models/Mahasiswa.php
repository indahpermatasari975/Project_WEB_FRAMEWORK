<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mahasiswas';

    protected $fillable = [
        'nim','nama_lengkap','tempat_lahir',
        'tgl_lahir','email','prodi','alamat'
    ];

    // alternatif:
    // protected $guarded = [];
}
