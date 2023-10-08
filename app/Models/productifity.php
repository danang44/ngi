<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productifity extends Model
{
    use HasFactory;
    protected $table = 'productifities';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul', 'gambar', 'kategori', 'tanggal', 'deskripsi', 'kontenlengkap'];
}
