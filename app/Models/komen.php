<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'isi', 'blog_id'];

    // Jika Anda ingin menentukan koneksi ke tabel tertentu, Anda dapat melakukannya sebagai berikut:
    // protected $table = 'nama_tabel_komen';
}
