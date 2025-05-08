<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'master_wilayah';

    // Menentukan kolom yang bisa diisi (mass assignable)
    protected $fillable = ['nama_wilayah', 'kode_pos', 'keterangan'];
}
