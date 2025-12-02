<?php

// app/Models/Film.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    
    // Sesuaikan nama tabel jika Anda ingin menggunakan nama jamak yang berbeda
    protected $table = 'films'; 

    protected $fillable = [
        'judul',
        'sinopsis',
        'tahun_rilis',
        'genre',
        'poster', // Tambahkan ini
    ];
}
