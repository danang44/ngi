<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retail extends Model
{
    use HasFactory;
    protected $table = 'retails';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul', 'gambar', 'kategori', 'tanggal', 'deskripsi'];
}
