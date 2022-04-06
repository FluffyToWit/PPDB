<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = 'registrasi';

    protected $fillable = [
        'nama', 'jk', 'alamat', 'agama', 'asalsekolah', 'jurusan'
    ];
}
